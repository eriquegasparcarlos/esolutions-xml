<?php

namespace ESolutions\Xml;

use ESolutions\Xml\Contracts\ErrorCodeCatalogInterface;
use ESolutions\Xml\Contracts\PayloadValidatorInterface;
use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Contracts\ZipCompressorInterface;
use ESolutions\Xml\Generator\XmlDocumentGenerator;
use ESolutions\Xml\Payload\PayloadValidator;
use ESolutions\Xml\Rendering\XmlTemplateRenderer;
use ESolutions\Xml\Sending\Catalog\FileErrorCodeCatalog;
use ESolutions\Xml\Sending\Zip\ZipFly;
use ESolutions\Xml\Sign\Signed;
use ESolutions\Xml\Validation\Rules\BusinessRulesValidator;
use ESolutions\Xml\Validation\Rules\SeriesFormatRule;
use ESolutions\Xml\Validation\XmlValidationPipeline;
use ESolutions\Xml\Validation\Xsd\SchemaResolver;
use ESolutions\Xml\Validation\Xsd\XsdValidator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class XmlServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Defaults del paquete; la app puede publicar y sobreescribir claves.
        $this->mergeConfigFrom(__DIR__ . '/../config/esolutions_xml.php', 'esolutions_xml');

        // ------------------------
        // Rendering (Blade -> XML)
        // ------------------------
        $this->app->singleton(XmlTemplateRenderer::class, fn () => new XmlTemplateRenderer());

        // ------------------------
        // Validación XSD
        // ------------------------
        $this->app->singleton(SchemaResolver::class, fn () => new SchemaResolver());

        $this->app->singleton(XsdValidator::class, function ($app) {
            return new XsdValidator($app->make(SchemaResolver::class));
        });

        // ------------------------
        // Reglas de negocio (separadas del XSD)
        // ------------------------
        $this->app->singleton(BusinessRulesValidator::class, fn () => new BusinessRulesValidator([
            new SeriesFormatRule(),
        ]));

        $this->app->singleton(XmlValidationPipeline::class, function ($app) {
            return new XmlValidationPipeline(
                $app->make(XsdValidator::class),
                $app->make(BusinessRulesValidator::class)
            );
        });

        // ------------------------
        // Firmador (cert demo del paquete por defecto)
        // ------------------------
        $this->app->singleton(Signed::class, fn () => new Signed(
            config('esolutions_xml.signing.default_certificate_file'),
            config('esolutions_xml.signing.default_certificate_password')
        ));

        // ------------------------
        // Contrato de payload
        // ------------------------
        $this->app->singleton(PayloadValidatorInterface::class, fn () => new PayloadValidator());

        // ------------------------
        // Envío: catálogo de códigos SUNAT y compresor ZIP.
        // El consumidor puede re-bindear (p.ej. decorador Redis del catálogo).
        // ------------------------
        $this->app->singleton(ErrorCodeCatalogInterface::class, fn () => new FileErrorCodeCatalog());
        $this->app->bind(ZipCompressorInterface::class, fn () => new ZipFly());

        // ------------------------
        // Generator (Validar payload + Render + Format + Sign + Validate)
        // ------------------------
        $this->app->singleton(XmlDocumentGeneratorContract::class, function ($app) {
            return new XmlDocumentGenerator(
                $app->make(XmlTemplateRenderer::class),
                $app->make(XmlValidationPipeline::class),
                $app->make(Signed::class),
                $app->make(PayloadValidatorInterface::class)
            );
        });

        $this->app->alias(XmlDocumentGeneratorContract::class, XmlDocumentGenerator::class);
    }

    public function boot()
    {
        // Vistas XML: view('esxml::invoice'), etc.
        $templatesPath = config('esolutions_xml.paths.templates_path') ?: __DIR__ . '/Templates';

        if (is_dir($templatesPath)) {
            View::addNamespace('esxml', $templatesPath);
        }

        $this->publishes([
            __DIR__ . '/../config/esolutions_xml.php' => config_path('esolutions_xml.php'),
        ], 'esolutions-xml-config');
    }
}
