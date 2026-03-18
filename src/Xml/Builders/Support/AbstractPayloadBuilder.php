<?php

namespace App\ESolutions\Xml\Builders\Support;

abstract class AbstractPayloadBuilder
{
    protected function decodeJson($value): array
    {
        if (is_array($value)) return $value;
        if (!is_string($value) || trim($value) === '') return [];
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : [];
    }

    protected function arrGet($value, string $key, $default = null)
    {
        if (!is_array($value)) return $default;
        return array_key_exists($key, $value) ? $value[$key] : $default;
    }

    /**
     * Convierte a string seguro (evita nulls)
     */
    protected function s($v, string $default = ''): string
    {
        if ($v === null) return $default;
        return (string) $v;
    }
}
