<?php

namespace App\ESolutions\Xml\Support;

final class XmlTpl
{
    public static function cdata(?string $v): string
    {
        $v = (string) $v;
        return str_replace(']]>', ']]]]><![CDATA[>', $v);
    }

    public static function n($v, int $maxDecimals = 8): string
    {
        if ($v === null || $v === '' || $v === '-') return '0';
        $num = (float) $v;
        $s = number_format($num, $maxDecimals, '.', '');
        $s = rtrim(rtrim($s, '0'), '.');
        return $s === '' ? '0' : $s;
    }
}
