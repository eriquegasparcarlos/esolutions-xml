<?php

namespace App\ESolutions\SunatOSEIntegration\Parsers;

use App\ESolutions\SunatOSEIntegration\Parsers\Ose\Nubefact\NubefactCdrParser;
use App\ESolutions\SunatOSEIntegration\Parsers\Sunat\SunatCdrParser;

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
