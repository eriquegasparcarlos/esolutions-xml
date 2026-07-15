<?php

namespace ESolutions\Xml\Support;

use Carbon\Carbon;

class XmlFormat
{
    public static function date($value): string
    {
        if (!$value) return '';
        return Carbon::parse($value)->format('Y-m-d');
    }

    public static function time($value): string
    {
        if (!$value) return '';
        return Carbon::parse($value)->format('H:i:s');
    }

    public static function money($value, int $decimals = 2): string
    {
        if ($value === null || $value === '') return number_format(0, $decimals, '.', '');
        return number_format((float)$value, $decimals, '.', '');
    }

    public static function qty($value, int $decimals = 10): string
    {
        if ($value === null || $value === '') return '0';
        // qty puede tener hasta 10 decimales en varias reglas
        $v = (float)$value;
        $s = number_format($v, $decimals, '.', '');
        // trim decimales innecesarios manteniendo al menos 1 si todo es 0
        $s = rtrim(rtrim($s, '0'), '.');
        return $s === '' ? '0' : $s;
    }

    public static function text($value, int $max = 250): string
    {
        $s = trim((string)$value);
        if ($s === '') return '';
        // SUNAT suele limitar largo + no saltos en campos específicos
        $s = str_replace(["\r", "\n"], ' ', $s);
        if (mb_strlen($s) > $max) $s = mb_substr($s, 0, $max);
        return $s;
    }

    public static function cdata($value): string
    {
        $s = (string)$value;
        // evitar cerrar CDATA accidentalmente
        return str_replace(']]>', ']]]]><![CDATA[>', $s);
    }
}
