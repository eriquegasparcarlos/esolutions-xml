<?php

/**
 * Extractor de reglas SUNAT: parsea un ValidaExprReg*.xsl del SFS y emite una
 * lista declarativa de reglas para el motor PHP (SunatRulesValidator).
 *
 * Cada regla capturada:
 *   [
 *     'primitive'   => 'existAndRegexpValidateElement',
 *     'params'      => ['errorCodeNotExist'=>"'2075'", 'node'=>'cbc:UBLVersionID', 'regexp'=>"'^(2.1)$'", ...],
 *     'context'     => 'cac:InvoiceLine',   // @match del template contenedor (null = raíz /*)
 *     'mode'        => 'linea'|null,
 *     'conditions'  => ["\$tipoOperacion = '0101'", ...],  // xsl:if/xsl:when envolventes
 *   ]
 *
 * Además emite las variables globales (top-level xsl:variable) para que el
 * motor las resuelva, y un resumen de cobertura por primitiva.
 *
 * Uso:  php tools/extract_rules.php <ValidaExprReg...xsl> <salida.php>
 *
 * Es REPRODUCIBLE: cuando SUNAT publique un SFS nuevo, se re-corre contra los
 * XSLT nuevos y el git diff muestra qué reglas cambiaron.
 */

if ($argc < 3) {
    fwrite(STDERR, "Uso: php extract_rules.php <xsl> <salida.php>\n");
    exit(1);
}

[$_, $xslPath, $outPath] = $argv;

if (!is_file($xslPath)) {
    fwrite(STDERR, "No existe: $xslPath\n");
    exit(1);
}

const XSL_NS = 'http://www.w3.org/1999/XSL/Transform';

$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
libxml_use_internal_errors(true);
if (!$dom->load($xslPath)) {
    fwrite(STDERR, "XML inválido: $xslPath\n");
    foreach (libxml_get_errors() as $e) fwrite(STDERR, '  ' . trim($e->message) . "\n");
    exit(1);
}
libxml_clear_errors();

$xp = new DOMXPath($dom);
$xp->registerNamespace('xsl', XSL_NS);

// ── Variables globales ────────────────────────────────────────────────────
// Están a nivel top-level Y como hijas directas del template raíz (match="/*"),
// donde el XSLT define $monedaComprobante, $tipoOperacion, $SumatoriaIGV, etc.
$globals = [];
$collectVars = function ($nodeList) use (&$globals) {
    foreach ($nodeList as $v) {
        /** @var DOMElement $v */
        $name = $v->getAttribute('name');
        $select = $v->getAttribute('select');
        if ($name !== '' && !isset($globals[$name])) {
            $globals[$name] = $select !== '' ? $select : null;
        }
    }
};
$collectVars($xp->query('/xsl:stylesheet/xsl:variable | /xsl:transform/xsl:variable'));
// Template raíz: el que matchea "/" o "/*"
foreach ($xp->query('//xsl:template[@match="/*" or @match="/"]') as $rootTpl) {
    $collectVars($xp->query('xsl:variable', $rootTpl));
}

// ── Recorrido de reglas ───────────────────────────────────────────────────
$rules = [];
$coverage = [];   // primitiva => conteo
$skipped = [];    // motivo => conteo

/**
 * Devuelve el template (xsl:template) contenedor y su @match/@mode subiendo por el árbol,
 * y la lista de condiciones (xsl:if/@test y xsl:when/@test) que envuelven al nodo.
 */
$contextOf = function (DOMNode $node) {
    $conditions = [];
    $forEach = [];   // @select de xsl:for-each, de fuera hacia dentro
    $match = null;
    $mode = null;
    $n = $node->parentNode;
    while ($n instanceof DOMElement) {
        if ($n->namespaceURI === XSL_NS) {
            if ($n->localName === 'if' || $n->localName === 'when') {
                $t = $n->getAttribute('test');
                if ($t !== '') array_unshift($conditions, $t);
            } elseif ($n->localName === 'for-each') {
                $sel = $n->getAttribute('select');
                if ($sel !== '') array_unshift($forEach, $sel);
            } elseif ($n->localName === 'template') {
                $match = $n->getAttribute('match') ?: null;
                $mode = $n->getAttribute('mode') ?: null;
                break;
            }
        }
        $n = $n->parentNode;
    }
    return [$match, $mode, $forEach, $conditions];
};

// Compone el contexto XPath: match del template + for-each anidados.
$compose = function (?string $match, array $forEach): ?string {
    if (!$forEach) return $match;
    $base = ($match !== null && $match !== '/*') ? rtrim($match, '/') . '/' : '';
    return $base . implode('/', $forEach);
};

// Precomputa los apply-templates para resolver el contexto de los templates
// con @mode (que solo se aplican donde el apply-templates los invoca).
$applies = []; // [ 'select', 'mode', 'container' ]
foreach ($xp->query('//xsl:apply-templates[@select]') as $at) {
    [$m, , $fe, ] = $contextOf($at);
    $applies[] = [
        'select' => $at->getAttribute('select'),
        'mode' => $at->getAttribute('mode') ?: null,
        'container' => $compose($m, $fe),
    ];
}

// Para un template match=$match mode=$mode, devuelve el contexto efectivo
// según el apply-templates que lo invoca (container/select).
$resolveMode = function (?string $match, ?string $mode) use ($applies): ?string {
    if ($mode === null || $match === null) return $match;
    foreach ($applies as $a) {
        if ($a['mode'] === $mode && $a['select'] !== ''
            && (str_ends_with($a['select'], $match) || str_contains($a['select'], $match))) {
            $base = ($a['container'] !== null && $a['container'] !== '/*') ? rtrim($a['container'], '/') . '/' : '';
            return $base . $a['select'];
        }
    }
    return $match;
};

foreach ($xp->query('//xsl:call-template') as $call) {
    /** @var DOMElement $call */
    $primitive = $call->getAttribute('name');
    if ($primitive === '') {
        continue;
    }

    // params: name => select (o contenido literal)
    $params = [];
    foreach ($xp->query('xsl:with-param', $call) as $p) {
        /** @var DOMElement $p */
        $pname = $p->getAttribute('name');
        $psel = $p->getAttribute('select');
        if ($psel === '' && $p->textContent !== '') {
            $psel = "'" . trim($p->textContent) . "'"; // literal en el cuerpo
        }
        $params[$pname] = $psel;
    }

    [$match, $mode, $forEach, $conditions] = $contextOf($call);
    // Contexto efectivo: resuelve @mode vía apply-templates y encadena for-each.
    $context = $compose($resolveMode($match, $mode), $forEach);

    // Solo nos interesan las llamadas a PRIMITIVAS de validación (que llevan
    // algún errorCode). Las llamadas internas de utilidades no.
    $hasErrorCode = false;
    foreach ($params as $k => $v) {
        if (stripos($k, 'errorCode') === 0 || stripos($k, 'errorCode') !== false) {
            $hasErrorCode = true;
            break;
        }
    }
    if (!$hasErrorCode) {
        $skipped['sin_errorCode (' . $primitive . ')'] = ($skipped['sin_errorCode (' . $primitive . ')'] ?? 0) + 1;
        continue;
    }

    $rules[] = [
        'primitive' => $primitive,
        'params' => $params,
        'context' => $context,
        'mode' => $mode,
        'conditions' => $conditions,
    ];
    $coverage[$primitive] = ($coverage[$primitive] ?? 0) + 1;
};

// ── Salida ────────────────────────────────────────────────────────────────
@mkdir(dirname($outPath), 0777, true);
$export = var_export([
    'source' => basename($xslPath),
    'globals' => $globals,
    'rules' => $rules,
], true);

file_put_contents($outPath, "<?php\n\n// GENERADO por tools/extract_rules.php desde " . basename($xslPath) . " — NO EDITAR A MANO.\n\nreturn " . $export . ";\n");

// ── Resumen ─────────────────────────────────────────────────────────────
ksort($coverage);
fwrite(STDERR, "== " . basename($xslPath) . " ==\n");
fwrite(STDERR, "Reglas extraídas: " . count($rules) . "\n");
fwrite(STDERR, "Variables globales: " . count($globals) . "\n");
fwrite(STDERR, "Por primitiva:\n");
foreach ($coverage as $prim => $n) {
    fwrite(STDERR, sprintf("  %-42s %d\n", $prim, $n));
}
if ($skipped) {
    fwrite(STDERR, "Saltadas (sin errorCode = utilidades internas):\n");
    foreach ($skipped as $r => $n) fwrite(STDERR, sprintf("  %-42s %d\n", $r, $n));
}
fwrite(STDERR, "→ $outPath\n");
