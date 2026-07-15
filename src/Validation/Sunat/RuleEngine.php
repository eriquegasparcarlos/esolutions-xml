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
    private array $vars = [];

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
        $root = $dom->documentElement;

        for ($pass = 0; $pass < 12 && count($this->vars) < count($defs); $pass++) {
            $progress = false;
            foreach ($defs as $name => $sel) {
                if (array_key_exists($name, $this->vars)) {
                    continue;
                }
                if ($sel === null || $sel === '') {
                    $this->vars[$name] = '';
                    $progress = true;
                    continue;
                }
                // Sustituye variables ya resueltas; si aún referencia alguna
                // no resuelta, se pospone a la siguiente pasada.
                $expr = $this->substituteVars($sel);
                if (preg_match('/\$[a-zA-Z_]/', $expr)) {
                    continue;
                }
                $val = @$this->xp->evaluate("string($expr)", $root);
                $this->vars[$name] = is_string($val) ? $val : '';
                $progress = true;
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
            $val = @$this->xp->evaluate("boolean($test)", $ctx);
            if ($val !== true) {
                return false;
            }
        }
        return true;
    }

    private function applyPrimitive(string $prim, array $params, \DOMNode $ctx): ?ValidationError
    {
        // Helpers de acceso a params (los códigos vienen como "'2075'": destildar comillas).
        $lit = fn (string $k) => isset($params[$k]) ? trim($params[$k], "'\"") : null;
        $xpathParam = fn (string $k) => $params[$k] ?? null;
        $isError = ($params['isError'] ?? 'true()') !== 'false()';

        switch ($prim) {
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

    private function substituteVars(string $xpath): string
    {
        foreach ($this->vars as $name => $val) {
            // Reemplaza $name por su literal string (comparaciones de igualdad).
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
