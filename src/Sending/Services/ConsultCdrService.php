<?php

namespace ESolutions\Xml\Sending\Services;

use ESolutions\Xml\Contracts\ErrorCodeCatalogInterface;
use ESolutions\Xml\Results\Sending\StatusResult;
use ESolutions\Xml\Sending\Cdr\SunatCdrParser;
use ESolutions\Xml\Sending\Endpoints\SunatEndpoints;
use ESolutions\Xml\Sending\SenderConfig;
use ESolutions\Xml\Sending\Soap\SoapSunatClient;
use ESolutions\Xml\Sending\Soap\WsdlProvider;

/**
 * Reconsulta el CDR de un comprobante ya enviado (billConsultService),
 * por RUC + tipo + serie + número — sin necesidad de ticket. Es el flujo
 * para el error 1033 ("el comprobante ya fue enviado anteriormente").
 *
 * Solo aplica a SUNAT directo (el servicio de consulta es de SUNAT).
 */
class ConsultCdrService
{
    public function __construct(
        protected SenderConfig $config,
        protected ?ErrorCodeCatalogInterface $catalog = null,
    ) {
    }

    public function getStatusCdr(string $ruc, string $documentTypeId, string $series, string|int $number): StatusResult
    {
        return $this->call('getStatusCdr', $ruc, $documentTypeId, $series, $number);
    }

    public function getStatus(string $ruc, string $documentTypeId, string $series, string|int $number): StatusResult
    {
        return $this->call('getStatus', $ruc, $documentTypeId, $series, $number);
    }

    protected function call(string $method, string $ruc, string $documentTypeId, string $series, string|int $number): StatusResult
    {
        $client = new SoapSunatClient(
            SunatEndpoints::FE_CONSULTA_CDR,
            $this->config->username,
            $this->config->password,
            WsdlProvider::getConsultPath()
        );

        $startTime = microtime(true);
        $result = $client->send($method, [
            'rucComprobante' => $ruc,
            'tipoComprobante' => $documentTypeId,
            'serieComprobante' => strtoupper($series),
            'numeroComprobante' => $number,
        ]);
        $result['time'] = microtime(true) - $startTime;

        $parsed = (new SunatCdrParser($this->catalog))->parseStatusCdr($result);

        return StatusResult::fromArray($parsed + ['time' => $result['time']]);
    }
}
