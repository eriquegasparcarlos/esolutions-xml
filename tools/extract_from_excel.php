<?php

/**
 * Herramienta de mantenimiento: extrae datos del Excel oficial de "Reglas de
 * validación" de SUNAT hacia los recursos del paquete. Es la fuente autoritativa
 * y fechada — re-correr en cada Excel nuevo y `git diff` muestra los cambios.
 *
 * Requiere phpoffice/phpspreadsheet (no es dependencia del paquete; se corre
 * desde un proyecto que lo tenga, p.ej. un Laravel con maatwebsite/excel):
 *
 *   XLSX="/ruta/Reglas de validacion.xlsx" \
 *   php artisan tinker --execute="require 'vendor/esolutions/xml/tools/extract_from_excel.php';"
 *
 * Genera / actualiza:
 *   - src/Resources/sunat/error-codes.php  (código => mensaje, desde "CódigosRetorno")
 *   - imprime un inventario de reglas por documento (campo | TAG UBL | tipo | código)
 *
 * Los catálogos (cat_*.xml) y los rulesets por documento se actualizan aparte;
 * este tool cubre el catálogo de códigos (100% extraíble) y el inventario para
 * el análisis de brechas.
 */

use PhpOffice\PhpSpreadsheet\IOFactory;

$xlsx = getenv('XLSX') ?: ($argv[1] ?? null);
if (!$xlsx || !is_file($xlsx)) {
    fwrite(STDERR, "Falta la ruta del Excel. Usar: XLSX=/ruta/reglas.xlsx\n");
    return;
}

$pkg = dirname(__DIR__); // raíz del paquete

// ── 1) CódigosRetorno -> error-codes.php ───────────────────────────────────
$reader = IOFactory::createReaderForFile($xlsx);
$reader->setReadDataOnly(true);
$reader->setLoadSheetsOnly(['CódigosRetorno']);
$rows = $reader->load($xlsx)->getSheet(0)->toArray(null, true, false, false);

$codes = [];
foreach ($rows as $row) {
    $code = trim((string) ($row[0] ?? ''));
    $msg = trim((string) ($row[1] ?? ''));
    if (preg_match('/^[0-9]{3,4}$/', $code) && $msg !== '' && $msg !== '-') {
        $codes[str_pad($code, 4, '0', STR_PAD_LEFT)] = $msg;
    }
}
ksort($codes);

$body = "<?php\n\n"
    . "// GENERADO por tools/extract_from_excel.php desde el Excel oficial de SUNAT.\n"
    . "// NO editar a mano. " . count($codes) . " códigos de retorno.\n\n"
    . "return " . var_export($codes, true) . ";\n";
file_put_contents("$pkg/src/Resources/sunat/error-codes.php", $body);
echo count($codes) . " códigos escritos en src/Resources/sunat/error-codes.php\n";

// ── 2) Inventario de reglas por documento (para análisis de brechas) ───────
$sheets = ['Factura2_0', 'Boleta2_0', 'NotaCredito2_0', 'NotaDebito2_0', 'Resumen Diario1_1'];
foreach ($sheets as $sheet) {
    try {
        $reader = IOFactory::createReaderForFile($xlsx);
        $reader->setReadDataOnly(true);
        $reader->setLoadSheetsOnly([$sheet]);
        $rows = $reader->load($xlsx)->getSheet(0)->toArray(null, true, false, false);
    } catch (\Throwable $e) {
        continue;
    }
    $rules = 0;
    foreach ($rows as $row) {
        $tag = (string) ($row[7] ?? '');
        $code = trim((string) ($row[11] ?? ''));
        if ((stripos($tag, 'cbc:') !== false || stripos($tag, 'cac:') !== false) && preg_match('/[0-9]{4}/', $code)) {
            $rules++;
        }
    }
    echo "  $sheet: ~$rules reglas con TAG UBL + código\n";
}
