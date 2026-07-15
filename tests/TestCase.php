<?php

namespace ESolutions\Xml\Tests;

use ESolutions\Xml\XmlServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

/**
 * Base de los tests del paquete sobre Orchestra Testbench: arranca un Laravel
 * mínimo con el XmlServiceProvider registrado (config + vistas esxml::). El
 * firmado usa el certificado demo del paquete (config signing sin env).
 */
abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [XmlServiceProvider::class];
    }
}
