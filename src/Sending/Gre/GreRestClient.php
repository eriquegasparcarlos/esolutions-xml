<?php

namespace ESolutions\Xml\Sending\Gre;

/**
 * EXPERIMENTAL (v2.1): cliente para la API REST de Guías de Remisión
 * Electrónicas (GRE 2022). SUNAT deprecó el canal SOAP para guías; el
 * flujo moderno es:
 *
 *  1) Token OAuth2 client_credentials contra api-seguridad.sunat.gob.pe
 *     (client_id/client_secret emitidos en el portal SOL + usuario SOL).
 *  2) POST del comprobante: JSON {archivo: {nomArchivo, arcGreZip (b64),
 *     hashZip (sha256 del zip)}} contra api-cpe.sunat.gob.pe
 *     /v1/contribuyente/gem/comprobantes/{nomArchivo-sin-ext}
 *  3) GET del ticket (numTicket) hasta obtener el CDR.
 *
 * El XML DespatchAdvice se genera con generate('09', $payload) (plantilla
 * despatch.blade.php) y se comprime con ZipFly, igual que el flujo SOAP.
 *
 * Esta clase es un esqueleto documentado — la implementación completa
 * (endpoints beta/producción, refresh de token, parseo del CDR REST)
 * queda para la versión 2.1 del paquete.
 */
class GreRestClient
{
    public const AUTH_PRODUCTION = 'https://api-seguridad.sunat.gob.pe/v1/clientessol/%s/oauth2/token/';
    public const CPE_PRODUCTION = 'https://api-cpe.sunat.gob.pe/v1/contribuyente/gem/comprobantes/';

    public function __construct(
        protected string $clientId = '',
        protected string $clientSecret = '',
        protected string $solUsername = '',
        protected string $solPassword = '',
    ) {
    }

    public function getToken(): string
    {
        throw new \RuntimeException('GreRestClient es experimental: el envío GRE por API REST llega en la v2.1 del paquete.');
    }

    public function sendDespatch(string $filename, string $signedXml): array
    {
        throw new \RuntimeException('GreRestClient es experimental: el envío GRE por API REST llega en la v2.1 del paquete.');
    }

    public function getStatus(string $ticket): array
    {
        throw new \RuntimeException('GreRestClient es experimental: el envío GRE por API REST llega en la v2.1 del paquete.');
    }
}
