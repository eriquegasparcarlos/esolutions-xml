<?php

namespace ESolutions\Xml\Sending\Soap;

use ESolutions\Xml\Sending\Cdr\CdrResponseParserFactory;

/**
 * Interpreta y unifica la respuesta de SUNAT/OSE para todos los flujos.
 */
class SunatResponseBuilder
{
    public static function fromSendBill(array $result): array
    {
        $provider = $result['provider'] ?? 'sunat';
        $parser = CdrResponseParserFactory::make($provider);

        return $parser->parseBill($result);
    }

    public static function fromSendSummary(array $result): array
    {
        $provider = $result['provider'] ?? 'sunat';
        $parser = CdrResponseParserFactory::make($provider);

        return $parser->parseSummary($result);
    }

    public static function fromGetStatus(array $result): array
    {
        $provider = $result['provider'] ?? 'sunat';
        $parser = CdrResponseParserFactory::make($provider);

        return $parser->parseGetStatus($result);
    }
}
