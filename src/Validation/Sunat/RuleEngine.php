<?php

namespace ESolutions\Xml\Validation\Sunat;

use DOMDocument;
use DOMXPath;
use ESolutions\Xml\Results\ValidationError;

/**
 * Motor que evalúa las reglas extraídas de los XSLT de SUNAT (SFS) contra el
 * XML de un comprobante, usando DOMXPath. Reimplementa las primitivas de
 * validate_utils.xsl.
 *
 * Cobertura: primitivas triviales (exist/regex/decimal/catálogo) 100%; las
 * isTrueExpresion se evalúan como XPath booleano (con resolución best-effort de
 * variables); las que usan dyn:evaluate/dp:/certificados/afiliación se omiten
 * y se contabilizan aparte.
 *
 * OJO: los XSLT cliente NO incluyen las reconciliaciones server-side de SUNAT
 * (p.ej. 3294 suma de impuestos, 3305 total precio venta). Esas se validan
 * aparte (reglas propias) — este motor cubre la capa cliente.
 */
class RuleEngine
{
    private DOMXPath $xp;
    private ErrorCatalog $errors;
    private SunatCatalog $catalogs;
    /** @var array<string,string> nombre => valor resuelto */
    private array $vars = [];   // variables-VALOR: se sustituyen como literal string
    private array $paths = [];  // variables-RUTA: se sustituyen como location path (textual)

    /** Namespaces UBL/SUNAT */
    private const NS = [
        'cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
        'cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
        'ext' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2',
        'ds' => 'http://www.w3.org/2000/09/xmldsig#',
        'sac' => 'urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1',
    ];

    public array $stats = ['evaluated' => 0, 'skipped' => 0, 'by_skip' => []];

    /**
     * Correr también las reglas de reconciliación (isTrueExpresion aritméticas).
     * Son potentes pero frágiles de replicar (dependen de sumas/redondeos y de
     * que TODAS las variables resuelvan a número), así que por defecto se omiten
     * y las reconciliaciones clave se cubren con reglas propias (3294/3305).
     */
    private bool $expressions;

    public function __construct(?ErrorCatalog $errors = null, ?SunatCatalog $catalogs = null, bool $expressions = false)
    {
        $this->errors = $errors ?? new ErrorCatalog();
        $this->catalogs = $catalogs ?? new SunatCatalog();
        $this->expressions = $expressions;
    }

    /**
     * @param array $ruleset  contenido de rules/<tipo>.php (source, globals, rules)
     * @return ValidationError[]
     */
    public function run(string $signedXml, array $ruleset): array
    {
        $dom = new DOMDocument();
        $prev = libxml_use_internal_errors(true);
        $dom->loadXML($signedXml);
        libxml_clear_errors();
        libxml_use_internal_errors($prev);

        $this->xp = new DOMXPath($dom);
        foreach (self::NS as $p => $u) {
            $this->xp->registerNamespace($p, $u);
        }
        // El elemento raíz suele estar en el namespace por defecto (Invoice-2…):
        // lo registramos como 'doc' para poder navegar la cabecera.
        $rootNs = $dom->documentElement->namespaceURI;
        if ($rootNs) {
            $this->xp->registerNamespace('doc', $rootNs);
        }

        // Variables del XSLT, resueltas contra la raíz.
        $this->resolveGlobals($dom, $ruleset['globals'] ?? []);

        $errors = [];
        foreach ($ruleset['rules'] as $rule) {
            foreach ($this->evalRule($rule) as $err) {
                $errors[] = $err;
            }
        }
        return $errors;
    }

    /**
     * Resuelve las variables del XSLT ($monedaComprobante, $cbcCustomizationID,
     * $SumatoriaIGV, …) contra la raíz. Como se referencian entre sí, se itera:
     * en cada pasada se resuelven las que ya tienen todas sus dependencias.
     *
     * @param array<string,?string> $defs  name => expresión XPath (o null)
     */
    private function resolveGlobals(DOMDocument $dom, array $defs): void
    {
        $this->vars = [];
        $this->paths = [];
        $root = $dom->documentElement;

        // Clasifica una definición como VALOR (se evalúa) o RUTA (fragmento de
        // location path que compone otras rutas). SUNAT define variables-ruta que
        // se referencian entre sí (p.ej. $cacAgentPartyIdentificationID =
        // $cacAgentParty/cac:PartyIdentification/cbc:ID); esas deben sustituirse
        // como RUTA, no como su valor, o al componerlas el XPath se rompe.
        $isValue = static function (string $sel): bool {
            $s = ltrim($sel);
            if (str_contains($s, '$nombreArchivoEnviado')) {
                return true; // depende del nombre de archivo (dato externo, no es un nodo)
            }
            if (preg_match('/^[\'"0-9]/', $s)) {
                return true; // literal string o numérico
            }
            // Función XPath que devuelve un valor (no un node-set).
            return (bool) preg_match('/^(substring|substring-before|substring-after|concat|current-date|current-dateTime|number|count|sum|string|string-length|translate|normalize-space|boolean|not|true|false|round|floor|ceiling)\s*\(/', $s);
        };

        $total = count($defs);
        for ($pass = 0; $pass < 15 && (count($this->vars) + count($this->paths)) < $total; $pass++) {
            $progress = false;
            foreach ($defs as $name => $sel) {
                if (array_key_exists($name, $this->vars) || array_key_exists($name, $this->paths)) {
                    continue;
                }
                if ($sel === null || $sel === '') {
                    $this->vars[$name] = '';
                    $progress = true;
                    continue;
                }

                if ($isValue($sel)) {
                    // Variable-valor: sustituye lo ya resuelto y evalúa a string.
                    $expr = $this->substituteVars($sel);
                    if (preg_match('/\$[a-zA-Z_]/', $expr)) {
                        continue; // aún referencia algo no resuelto
                    }
                    $val = @$this->xp->evaluate("string($expr)", $root);
                    $this->vars[$name] = is_string($val) ? $val : '';
                    $progress = true;
                } else {
                    // Variable-ruta: compón sustituyendo rutas ya resueltas (textual).
                    $expr = $this->substitutePaths($sel);
                    if (preg_match('/\$[a-zA-Z_]/', $expr)) {
                        continue; // aún referencia una ruta no resuelta
                    }
                    $this->paths[$name] = $expr;
                    $progress = true;
                }
            }
            if (!$progress) {
                break; // dependencias circulares o irresolubles
            }
        }
    }

    /**
     * @return ValidationError[]
     */
    private function evalRule(array $rule): array
    {
        $prim = $rule['primitive'];
        $params = $rule['params'] ?? [];
        $out = [];

        // Si un parámetro XPath referencia una variable que no se pudo resolver
        // (típicamente una variable LOCAL del XSLT que el extractor no capturó),
        // la regla no es evaluable de forma fiable: se omite para no emitir un
        // falso positivo ("no existe" cuando el dato sí está).
        foreach (['node', 'test', 'expr'] as $pk) {
            if (isset($params[$pk]) && $this->hasUnresolvedVar((string) $params[$pk])) {
                $this->stats['skipped']++;
                $this->stats['by_skip']['unresolved_var'] = ($this->stats['by_skip']['unresolved_var'] ?? 0) + 1;
                return [];
            }
        }

        // Nodos de contexto donde aplica la regla (por el @match del template).
        $contexts = $this->contextNodes($rule['context'] ?? null);

        foreach ($contexts as $ctx) {
            // Precondiciones (xsl:if envolventes) deben cumplirse en este contexto.
            if (!$this->conditionsPass($rule['conditions'] ?? [], $ctx)) {
                continue;
            }

            $err = $this->applyPrimitive($prim, $params, $ctx);
            if ($err instanceof ValidationError) {
                $out[] = $err;
            }
        }
        return $out;
    }

    /** @return \DOMNode[] */
    private function contextNodes(?string $match): array
    {
        if ($match === null || $match === '/*' || $match === '/') {
            $n = $this->xp->document->documentElement;
            return $n ? [$n] : [];
        }
        // @match como selector relativo a la raíz (aprox: //match)
        $q = (str_starts_with($match, '/')) ? $match : '//' . $match;
        $nodes = @$this->xp->query($q);
        $res = [];
        if ($nodes) {
            foreach ($nodes as $n) {
                $res[] = $n;
            }
        }
        return $res;
    }

    private function conditionsPass(array $conditions, \DOMNode $ctx): bool
    {
        foreach ($conditions as $test) {
            $test = $this->substituteVars($test);
            // DOMXPath (XPath 1.0) no conoce las extensiones EXSLT que usan
            // los XSLT viejos del SFS (OtrosVoided): se resuelven en PHP y se
            // reinyectan como true()/false() antes de evaluar el resto.
            $test = $this->resolveExsltRegexp($test, $ctx);
            $val = @$this->xp->evaluate("boolean($test)", $ctx);
            if ($val !== true) {
                return false;
            }
        }
        return true;
    }

    /**
     * Reemplaza cada llamada regexp:match(EXPR, "RE") por true()/false(),
     * evaluando EXPR como string XPath en el contexto y RE con preg_match
     * (EXSLT es case-sensitive; no se añade /i). El escaneo respeta comillas
     * y paréntesis anidados (EXPR puede ser concat(...), substring(...), …).
     */
    private function resolveExsltRegexp(string $test, \DOMNode $ctx): string
    {
        while (($start = strpos($test, 'regexp:match(')) !== false) {
            $i = $start + strlen('regexp:match(');
            $depth = 1;
            $quote = null;
            $args = [];
            $arg = '';
            $len = strlen($test);
            for (; $i < $len && $depth > 0; $i++) {
                $ch = $test[$i];
                if ($quote !== null) {
                    $arg .= $ch;
                    if ($ch === $quote) {
                        $quote = null;
                    }
                    continue;
                }
                if ($ch === '"' || $ch === "'") {
                    $quote = $ch;
                    $arg .= $ch;
                } elseif ($ch === '(') {
                    $depth++;
                    $arg .= $ch;
                } elseif ($ch === ')') {
                    $depth--;
                    if ($depth > 0) {
                        $arg .= $ch;
                    }
                } elseif ($ch === ',' && $depth === 1) {
                    $args[] = $arg;
                    $arg = '';
                } else {
                    $arg .= $ch;
                }
            }
            $args[] = $arg;

            if ($depth !== 0 || count($args) < 2) {
                return $test; // llamada malformada: se deja tal cual (evaluará a false)
            }

            $value = (string) @$this->xp->evaluate('string(' . trim($args[0]) . ')', $ctx);
            $regex = trim(trim($args[1]), "'\"");
            // Delimitador ~: las regex del XSLT ya traen '/' escapado como \/
            // (válido en PCRE con cualquier delimitador); re-escaparlo lo rompería.
            $matched = @preg_match('~' . str_replace('~', '\~', $regex) . '~', $value) === 1;

            $test = substr($test, 0, $start) . ($matched ? 'true()' : 'false()') . substr($test, $i);
        }

        return $test;
    }

    private function applyPrimitive(string $prim, array $params, \DOMNode $ctx): ?ValidationError
    {
        // Helpers de acceso a params (los códigos vienen como "'2075'": destildar comillas).
        $lit = fn (string $k) => isset($params[$k]) ? trim($params[$k], "'\"") : null;
        $xpathParam = fn (string $k) => $params[$k] ?? null;
        $isError = ($params['isError'] ?? 'true()') !== 'false()';

        switch ($prim) {
            // Estilo XSLT viejo (OtrosVoided/Retención 1.x): xsl:if envolvente
            // + call-template rejectCall. Las conditions SON la condición de
            // rechazo y ya pasaron en conditionsPass — aquí solo se emite.
            case 'rejectCall':
                return $this->err($lit('errorCode'), $isError, $params);

            case 'existElement':
                if ($this->stringOf($xpathParam('node'), $ctx) === '') {
                    return $this->err($lit('errorCodeNotExist'), $isError, $params);
                }
                return null;

            case 'existElementNoVacio':
                if (!$this->exists($xpathParam('node'), $ctx)) {
                    return $this->err($lit('errorCodeNotExist'), $isError, $params);
                }
                return null;

            case 'existAndRegexpValidateElement':
            case 'existAndValidateValueTwoDecimal':
            case 'existAndValidateValueThreeDecimal':
            case 'existAndValidateValueTenDecimal':
                $val = $this->stringOf($xpathParam('node'), $ctx);
                if ($val === '') {
                    return $this->err($lit('errorCodeNotExist'), $isError, $params);
                }
                $re = $this->regexFor($prim, $params);
                if ($re !== null && !preg_match($re, $val)) {
                    return $this->err($lit('errorCodeValidate'), $isError, $params);
                }
                return null;

            case 'regexpValidateElementIfExist':
            case 'validateValueTwoDecimalIfExist':
            case 'validateValueThreeDecimalIfExist':
            case 'validateValueTenDecimalIfExist':
            case 'validateValuePercentIfExist':
                if (!$this->exists($xpathParam('node'), $ctx)) {
                    return null; // opcional
                }
                $val = $this->stringOf($xpathParam('node'), $ctx);
                $re = $this->regexFor($prim, $params);
                if ($re !== null && !preg_match($re, $val)) {
                    return $this->err($lit('errorCodeValidate'), $isError, $params);
                }
                return null;

            case 'findElementInCatalog':
                $id = $this->stringOf($xpathParam('idCatalogo'), $ctx);
                $cat = $lit('catalogo');
                if ($id !== '' && $cat !== null && !$this->catalogs->has($cat, $id)) {
                    return $this->err($lit('errorCodeValidate'), $isError, $params);
                }
                return null;

            case 'isTrueExpresion':
            case 'isTrueExpresionIfExist':
            case 'isTrueExpresionEmptyNode':
                // Reglas de reconciliación: opt-in (ver $expressions).
                if (!$this->expressions) {
                    $this->stats['skipped']++;
                    $this->stats['by_skip']['isTrueExpresion(reconciliacion)'] = ($this->stats['by_skip']['isTrueExpresion(reconciliacion)'] ?? 0) + 1;
                    return null;
                }
                if ($prim === 'isTrueExpresionIfExist' && !$this->exists($xpathParam('node'), $ctx)) {
                    return null;
                }
                $expr = $xpathParam('expresion');
                if ($expr === null) {
                    return null;
                }
                $expr = $this->substituteVars($expr);
                $r = @$this->xp->evaluate("boolean($expr)", $ctx);
                // El error se emite cuando la expresión es VERDADERA.
                if ($r === true) {
                    return $this->err($lit('errorCodeValidate'), $isError, $params);
                }
                return null;

            default:
                // Primitivas no soportadas (fechas, certificados, dyn:evaluate, afiliación).
                $this->stats['skipped']++;
                $this->stats['by_skip'][$prim] = ($this->stats['by_skip'][$prim] ?? 0) + 1;
                return null;
        }
    }

    /** Regex PHP para las primitivas de formato/decimales. */
    private function regexFor(string $prim, array $params): ?string
    {
        // Regex explícita (existAndRegexpValidateElement / regexpValidateElementIfExist)
        if (isset($params['regexp'])) {
            $raw = trim($params['regexp'], "'\"");
            return '/' . str_replace('/', '\/', $raw) . '/i';
        }
        // Decimales: derivar de la primitiva.
        $decimals = match (true) {
            str_contains($prim, 'TenDecimal') => 10,
            str_contains($prim, 'ThreeDecimal') => 3,
            str_contains($prim, 'Percent') => 5,
            str_contains($prim, 'TwoDecimal') => 2,
            default => null,
        };
        if ($decimals === null) {
            return null;
        }
        $intDigits = str_contains($prim, 'Percent') ? 3 : 12;
        $gtZero = ($params['isGreaterCero'] ?? 'true()') !== 'false()';
        $head = $gtZero ? '(?!0[0-9]*(\.0*)?$)' : '(?!0[0-9]+$)';
        return '/^' . $head . '[0-9]{1,' . $intDigits . '}(\.[0-9]{1,' . $decimals . '})?$/';
    }

    /** ¿El XPath aún referencia una variable sin resolver tras sustituir? */
    private function hasUnresolvedVar(string $xpath): bool
    {
        return (bool) preg_match('/\$[a-zA-Z_]\w*/', $this->substituteVars($xpath));
    }

    /** Sustituye SOLO las variables-ruta, insertándolas como location path (sin comillas). */
    private function substitutePaths(string $xpath): string
    {
        foreach ($this->paths as $name => $path) {
            $xpath = preg_replace('/\$' . preg_quote($name, '/') . '\b/', $path, $xpath);
        }
        return $xpath;
    }

    private function substituteVars(string $xpath): string
    {
        // 1) Variables-ruta como path (para que $x/cac:Y siga siendo un XPath válido).
        $xpath = $this->substitutePaths($xpath);
        // 2) Variables-valor como literal string (comparaciones de igualdad).
        foreach ($this->vars as $name => $val) {
            $xpath = preg_replace('/\$' . preg_quote($name, '/') . '\b/', "'" . addslashes($val) . "'", $xpath);
        }
        return $xpath;
    }

    private function stringOf(?string $xpath, \DOMNode $ctx): string
    {
        if ($xpath === null || $xpath === '') {
            return '';
        }
        $xpath = $this->substituteVars($xpath);
        $r = @$this->xp->evaluate("string($xpath)", $ctx);
        return is_string($r) ? trim($r) : '';
    }

    private function exists(?string $xpath, \DOMNode $ctx): bool
    {
        if ($xpath === null || $xpath === '') {
            return false;
        }
        $xpath = $this->substituteVars($xpath);
        // Si tras sustituir queda un literal string (variable resuelta a valor),
        // no es un node-set: existe si no está vacío.
        if (preg_match("/^'.*'$/s", $xpath)) {
            return trim($xpath, "'") !== '';
        }
        $n = @$this->xp->query($xpath, $ctx);
        return $n !== false && $n->length > 0;
    }

    private function err(?string $code, bool $isError, array $params): ?ValidationError
    {
        if ($code === null) {
            return null;
        }
        $this->stats['evaluated']++;
        $msg = $this->errors->message($code) ?? 'Regla SUNAT ' . $code;
        $sev = $isError ? 'SUNAT' : 'SUNAT_OBS';
        return new ValidationError($msg, $sev, $code);
    }
}
