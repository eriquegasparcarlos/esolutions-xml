<?php

namespace ESolutions\Xml\Validation\Sunat;

/**
 * Catálogo oficial de errores SUNAT (CatalogoErrores.xml del SFS, 2054 códigos).
 * Además del mensaje, deriva la severidad por rango de código:
 *   - 2000–3999 → rechazo (error)
 *   - 4000+     → observación (el comprobante se acepta con reparos)
 *   - <2000     → error de protocolo/estructura
 *
 * Nota: los XSLT del SFS suelen construir un mensaje contextual propio
 * (con nodo y valor). Este catálogo da el mensaje canónico de respaldo.
 */
class ErrorCatalog
{
    /** @var array<string,string>|null code => mensaje */
    private static ?array $messages = null;

    private string $file;

    public function __construct(?string $file = null)
    {
        $this->file = $file ?: dirname(__DIR__, 2) . '/Resources/sunat/catalogos/CatalogoErrores.xml';
    }

    public function message(string $code): ?string
    {
        if (self::$messages === null) {
            self::$messages = $this->load();
        }

        return self::$messages[$this->normalize($code)] ?? null;
    }

    /**
     * @return 'error'|'observacion'
     */
    public function severity(string $code): string
    {
        $n = (int) $this->normalize($code);

        return $n >= 4000 ? 'observacion' : 'error';
    }

    private function normalize(string $code): string
    {
        // Los códigos del catálogo van a 4 dígitos ('0001', '3294').
        return ctype_digit($code) ? str_pad($code, 4, '0', STR_PAD_LEFT) : $code;
    }

    /**
     * @return array<string,string>
     */
    private function load(): array
    {
        $out = [];

        // Base: CatalogoErrores.xml (SFS).
        if (is_file($this->file)) {
            $prev = libxml_use_internal_errors(true);
            $xml = simplexml_load_file($this->file);
            libxml_clear_errors();
            libxml_use_internal_errors($prev);
            if ($xml !== false) {
                foreach ($xml->error as $error) {
                    $code = (string) $error['numero'];
                    if ($code !== '') {
                        $out[$this->normalize($code)] = trim((string) $error);
                    }
                }
            }
        }

        // Overlay: error-codes.php extraído del Excel oficial de SUNAT (más actual;
        // gana en conflicto y aporta códigos nuevos). Generado por
        // tools/extract_from_excel.php. Ver docs/sunat-changes-2026-08.md.
        $php = dirname(__DIR__, 2) . '/Resources/sunat/error-codes.php';
        if (is_file($php)) {
            $codes = require $php;
            if (is_array($codes)) {
                foreach ($codes as $code => $msg) {
                    $out[$this->normalize((string) $code)] = (string) $msg;
                }
            }
        }

        return $out;
    }
}
