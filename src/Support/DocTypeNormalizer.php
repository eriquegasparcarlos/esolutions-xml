<?php

namespace ESolutions\Xml\Support;

class DocTypeNormalizer
{
    /**
     * Normaliza entradas tipo:
     * - invoice, boleta, credit_note, debit_note
     * - credit-note, debit-note
     * - 01, 03, 07, 08
     */
    public static function normalize(string $type): string
    {
        $t = trim(strtolower($type));

        // códigos SUNAT típicos
        if ($t === '01') return 'invoice';
        if ($t === '03') return 'boleta';
        if ($t === '07') return 'credit_note';
        if ($t === '08') return 'debit_note';

        // normaliza separadores
        $t = str_replace('-', '_', $t);

        // alias comunes
        $aliases = [
            'factura' => 'invoice',
            'invoice' => 'invoice',
            'boleta' => 'boleta',
            'credit_note' => 'credit_note',
            'debit_note' => 'debit_note',
        ];

        return $aliases[$t] ?? $t;
    }
}
