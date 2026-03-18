<?php

namespace App\ESolutions\Xml;

use App\ESolutions\Xml\Builders\Document\CreditNotePayloadBuilder;
use App\ESolutions\Xml\Builders\Document\DebitNotePayloadBuilder;
use App\ESolutions\Xml\Builders\Document\InvoicePayloadBuilder;
use App\ESolutions\Xml\Builders\Document\Shared\PartyMapper;
use App\ESolutions\Xml\Builders\PayloadBuilderResolver;
use App\ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use App\ESolutions\Xml\Rendering\XmlTemplateRenderer;
use App\ESolutions\Xml\Services\XmlDocumentGenerator;
use App\ESolutions\Xml\Sign\Signed;
use App\ESolutions\Xml\Validation\BusinessRulesValidator;
use App\ESolutions\Xml\Validation\Payload\Rules\SeriesFormatRule;
use App\ESolutions\Xml\Validation\Xml\SchemaResolver;
use App\ESolutions\Xml\Validation\Xml\XsdValidator;
use App\ESolutions\Xml\Validation\XmlValidationPipeline;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class XmlServiceProvider extends ServiceProvider
{
    public function register()
    {
        /**
         * Config
         * - Si este código vive dentro de tu app (no paquete),
         *   igual es válido: mergea defaults con lo que exista en config/esolutions_xml.php.
         */
        $this->mergeConfigFrom(config_path('esolutions_xml.php'), 'esolutions_xml');

        // ------------------------
        // Rendering (Blade -> XML)
        // ------------------------
        $this->app->singleton(XmlTemplateRenderer::class, function ($app) {
            return new XmlTemplateRenderer();
        });

        // ------------------------
        // XSD Validation
        // ------------------------
        $this->app->singleton(SchemaResolver::class, fn () => new SchemaResolver());

        $this->app->singleton(XsdValidator::class, function ($app) {
            return new XsdValidator($app->make(SchemaResolver::class));
        });

        // ------------------------
        // Business Rules Validation (separado del XSD)
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
        // Signer (cert demo por defecto)
        // ------------------------
        $this->app->singleton(Signed::class, fn () => new Signed(
            config('esolutions_xml.signing.default_certificate_file'),
            config('esolutions_xml.signing.default_certificate_password')
        ));

        // ------------------------
        // Builders (opcional, pero recomendado)
        // Document -> payload
        // ------------------------
        $this->app->singleton(PartyMapper::class, fn () => new PartyMapper());

        $this->app->singleton(InvoicePayloadBuilder::class, function ($app) {
            return new InvoicePayloadBuilder($app->make(PartyMapper::class));
        });

        $this->app->singleton(CreditNotePayloadBuilder::class, function ($app) {
            return new CreditNotePayloadBuilder($app->make(PartyMapper::class));
        });

        $this->app->singleton(DebitNotePayloadBuilder::class, function ($app) {
            return new DebitNotePayloadBuilder($app->make(PartyMapper::class));
        });

        $this->app->singleton(PayloadBuilderResolver::class, function ($app) {
            return new PayloadBuilderResolver([
                $app->make(InvoicePayloadBuilder::class),
                $app->make(CreditNotePayloadBuilder::class),
                $app->make(DebitNotePayloadBuilder::class),
                // luego SummaryPayloadBuilder, VoidedPayloadBuilder
            ]);
        });

        // ------------------------
        // Generator (Render + Format + Sign + Validate)
        // ------------------------
        $this->app->singleton(XmlDocumentGeneratorContract::class, function ($app) {
            return new XmlDocumentGenerator(
                $app->make(XmlTemplateRenderer::class),
                $app->make(XmlValidationPipeline::class),
                $app->make(Signed::class)
            );
        });

        // Si también quieres resolver por clase concreta:
        $this->app->alias(XmlDocumentGeneratorContract::class, XmlDocumentGenerator::class);
    }

    public function boot()
    {
        /**
         * Vistas XML
         * Si config('...templates_path') apunta a app/ESolutions/Xml/Templates, entonces:
         * view('esxml::invoice') etc.
         */
        $templatesPath = config('esolutions_xml.paths.templates_path');

        if ($templatesPath && is_dir($templatesPath)) {
            View::addNamespace('esxml', $templatesPath);
        }

        /**
         * Publish config (opcional en tu app, útil si lo tratas como “paquete interno”)
         */
        $this->publishes([
            config_path('esolutions_xml.php') => config_path('esolutions_xml.php'),
        ], 'esolutions-xml-config');
    }
}
