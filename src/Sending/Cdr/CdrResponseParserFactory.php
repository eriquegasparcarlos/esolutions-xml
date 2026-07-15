<?php

namespace ESolutions\Xml\Sending\Cdr;

use ESolutions\Xml\Sending\Cdr\NubefactCdrParser;
use ESolutions\Xml\Sending\Cdr\SunatCdrParser;

class CdrResponseParserFactory
{
    /**
     * Devuelve el parser adecuado según el proveedor.
     * @param string $provider 'sunat', 'nubefact', etc.
     * @return CdrResponseParserInterface
     */
    public static function make(string $provider): CdrResponseParserInterface
    {
        switch (strtolower($provider)) {
            case 'nubefact':
                return new NubefactCdrParser();
            case 'sunat':
            default:
                return new SunatCdrParser();
        }
    }
}
