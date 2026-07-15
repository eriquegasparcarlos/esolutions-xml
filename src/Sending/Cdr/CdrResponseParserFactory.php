<?php

namespace ESolutions\Xml\Sending\Cdr;

use ESolutions\Xml\Contracts\CdrResponseParserInterface;
use ESolutions\Xml\Contracts\ErrorCodeCatalogInterface;

class CdrResponseParserFactory
{
    /**
     * Devuelve el parser adecuado según el proveedor.
     *
     * @param string $provider 'sunat', 'nubefact', etc.
     * @param ErrorCodeCatalogInterface|null $catalog Traductor de códigos SUNAT
     *        (null => FileErrorCodeCatalog empaquetado)
     */
    public static function make(string $provider, ?ErrorCodeCatalogInterface $catalog = null): CdrResponseParserInterface
    {
        switch (strtolower($provider)) {
            case 'nubefact':
                return new NubefactCdrParser($catalog);
            case 'sunat':
            default:
                return new SunatCdrParser($catalog);
        }
    }
}
