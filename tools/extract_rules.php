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

// ── Variables globales (top-level xsl:variable) ───────────────────────────
$globals = [];
foreach ($xp->query('/xsl:stylesheet/xsl:variable | /xsl:transform/xsl:variable') as $v) {
    /** @var DOMElement $v */
    $name = $v->getAttribute('name');
    $select = $v->getAttribute('select');
    if ($name !== '') {
        $globals[$name] = $select !== '' ? $select : null;
    }
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
    $match = null;
    $mode = null;
    $n = $node->parentNode;
    while ($n instanceof DOMElement) {
        if ($n->namespaceURI === XSL_NS) {
            if ($n->localName === 'if') {
                $t = $n->getAttribute('test');
                if ($t !== '') array_unshift($conditions, $t);
            } elseif ($n->localName === 'when') {
                $t = $n->getAttribute('test');
                if ($t !== '') array_unshift($conditions, $t);
            } elseif ($n->localName === 'template') {
                $match = $n->getAttribute('match') ?: null;
                $mode = $n->getAttribute('mode') ?: null;
                break; // el template acota el contexto
            }
        }
        $n = $n->parentNode;
    }
    return [$match, $mode, $conditions];
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

    [$match, $mode, $conditions] = $contextOf($call);

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
        'context' => $match,
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
