<?php

namespace App\ESolutions\Xml\Support;

final class UblTextSanitizer
{
    public static function htmlToPlain(?string $html): string
    {
        if (!$html) return '';
        $t = str_replace("\r", '', $html);

        // Conserva saltos lógicos
        $t = preg_replace('#<(br|/p|/div|/li)\s*/?>#i', "\n", $t);
        $t = preg_replace('#<(p|div|li)\b[^>]*>#i', '', $t);

        // Fuera etiquetas y entidades → UTF-8
        $t = strip_tags($t);
        $t = html_entity_decode($t, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // Normaliza espacios y saltos
        $t = preg_replace('/[ \t]+/', ' ', $t);
        $t = preg_replace("/\n{2,}/", "\n", $t);
        $t = trim($t);

        // Quita caracteres no permitidos en XML 1.0
        $t = preg_replace('/[^\x09\x0A\x0D\x20-\x{D7FF}\x{E000}-\x{FFFD}]/u', '', $t);

        // Si no quieres saltos en UBL, cambia \n por separador
        $t = preg_replace('/\s*\n\s*/', ' — ', $t);
        return $t;
    }

    public static function chunkByLen(string $text, int $maxLen = 230): array
    {
        $out = [];
        $text = trim($text);
        while (mb_strlen($text, 'UTF-8') > $maxLen) {
            $slice = mb_substr($text, 0, $maxLen, 'UTF-8');
            $cut = mb_strrpos($slice, ' ', 0, 'UTF-8');
            if ($cut === false || $cut < (int)($maxLen * 0.6)) {
                $cut = $maxLen; // si no hay espacio razonable, corta duro al tope
            }
            $out[] = trim(mb_substr($text, 0, $cut, 'UTF-8'));
            $text = ltrim(mb_substr($text, $cut, null, 'UTF-8'));
        }
        if ($text !== '') $out[] = $text;
        return $out;
    }
}
