<?php

namespace ESolutions\Xml\Sending;

use ESolutions\Xml\Sending\Soap\SoapSunatClient;
use ESolutions\Xml\Sending\Soap\SunatResponseBuilder;
use ESolutions\Xml\Sending\Endpoints\SunatEndpoints;
use ESolutions\Xml\Sending\Endpoints\NubefactEndpoints;
use App\Models\User;

class DocumentSender
{
    protected string $provider;
    protected string $username;
    protected string $password;
    protected string $environment;
    protected User $company;
    protected string $documentTypeId;

    /**
     * @param string $provider 'sunat' | 'nubefact' | etc.
     * @param string $username
     * @param string $password
     * @param string $environment 'demo' | 'production'
     * @param User $company
     * @param string $documentTypeId
     */
    public function __construct(string $provider, string $username, string $password,
                                string $environment, User $company, string $documentTypeId)
    {
        $provider = strtolower($provider);
        $environment = strtolower($environment);

        if (!in_array($environment, ['demo', 'production'])) {
            throw new \InvalidArgumentException('El parámetro $environment solo puede ser demo o production.');
        }

        $this->provider = $provider;
        $this->username = $username;
        $this->password = $password;
        $this->environment = $environment;
        $this->company = $company;
        $this->documentTypeId = $documentTypeId;
    }

    /**
     * Enviar un documento (Factura, Boleta, Nota) vía sendBill.
     */
    public function sendBill(array $params): array
    {
        $endpoint = $this->getEndpoint('sendBill');
        $client = new SoapSunatClient($endpoint, $this->username, $this->password);

        $startTime = microtime(true);
        $result = $client->send('sendBill', $params);
        $elapsed = microtime(true) - $startTime;
        $result['provider'] = $this->provider;
        $response = SunatResponseBuilder::fromSendBill($result);
        $response['time'] = $elapsed;

        return $response;
    }

    /**
     * Enviar un Resumen o Baja vía sendSummary.
     */
    public function sendSummary(array $params): array
    {
        $endpoint = $this->getEndpoint('sendSummary');
        $client = new SoapSunatClient($endpoint, $this->username, $this->password);

        $startTime = microtime(true);
        $result = $client->send('sendSummary', $params);
        $elapsed = microtime(true) - $startTime;
        $result['provider'] = $this->provider;
        $response = SunatResponseBuilder::fromSendSummary($result);
        $response['time'] = $elapsed;

        return $response;
    }

    /**
     * Consultar el estado de un ticket (getStatus).
     */
    public function getStatus(array $params): array
    {
        $endpoint = $this->getEndpoint('getStatus');
        $client = new SoapSunatClient($endpoint, $this->username, $this->password);

        $startTime = microtime(true);
        $result = $client->send('getStatus', $params);
        $elapsed = microtime(true) - $startTime;
        $result['provider'] = $this->provider;
        $response = SunatResponseBuilder::fromGetStatus($result);
        $response['time'] = $elapsed;

        return $response;
    }

    /**
     * Obtiene el endpoint según proveedor, ambiente y tipo de operación.
     *
     * @param string $operation
     * @return string
     */
    protected function getEndpoint(string $operation): string
    {
        if ($this->provider === 'sunat') {
            switch ($operation) {
                case 'sendBill':
                case 'sendSummary':
                case 'getStatus':
                    $isRetention = in_array($this->documentTypeId, ['20', '40', 'RR'], true);
                    if ($isRetention) {
                        return $this->environment === 'production'
                            ? SunatEndpoints::RETENCION_PRODUCCION
                            : SunatEndpoints::RETENCION_BETA;
                    }

                    return $this->environment === 'production'
                        ? SunatEndpoints::FE_PRODUCTION
                        : SunatEndpoints::FE_BETA;
//                    if(in_array($this->documentTypeId, ['20', '40'])) {
//                        return $this->environment === 'production'
//                            ? SunatEndpoints::RETENCION_PRODUCCION
//                            : SunatEndpoints::RETENCION_BETA;
//                    } else {
//                        return $this->environment === 'production'
//                            ? SunatEndpoints::FE_PRODUCTION
//                            : SunatEndpoints::FE_BETA;
//                    }
                case 'getStatusCdr':
                    return SunatEndpoints::FE_CONSULTA_CDR;
            }
        }
        if ($this->provider === 'nubefact') {
            if ($this->environment === 'production') {
                if (empty(trim((string)$this->company->ose_url))) {
                    return NubefactEndpoints::PRODUCTION;
                }
                return $this->company->ose_url;
            } else {
                if (empty(trim((string)$this->company->ose_url_dev))) {
                    return NubefactEndpoints::BETA;
                }
                return $this->company->ose_url_dev;
            }
        }
        throw new \Exception("No se pudo resolver endpoint para operación [$operation] y proveedor [{$this->provider}]");
    }
}
