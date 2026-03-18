<?php

namespace App\ESolutions\SunatOSEIntegration\Ws\Services;

/**
 * Class WsdlProvider.
 */
final class WsdlProvider
{
    /**
     * Get billService WSDL Local Path.
     *
     * @return string
     */
    public static function getBillPath(): string
    {
        return __DIR__ . '/../../Resources/wsdl/billService.wsdl';
    }

    /**
     * Get billConsultService WSDL Local Path.
     *
     * @return string
     */
    public static function getConsultPath(): string
    {
        return __DIR__ . '/../../Resources/wsdl/billConsultService.wsdl';
    }
}
