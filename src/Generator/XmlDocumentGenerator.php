<?php

namespace ESolutions\Xml\Generator;

use ESolutions\Xml\Contracts\PayloadValidatorInterface;
use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Rendering\XmlTemplateRenderer;
use ESolutions\Xml\Results\GenerationResult;
use ESolutions\Xml\Sign\Signed;
use ESolutions\Xml\Support\DocTypeNormalizer;
use ESolutions\Xml\Support\XmlFormatter;
use ESolutions\Xml\Validation\XmlValidationPipeline;

class XmlDocumentGenerator implements XmlDocumentGeneratorContract
{
    /** @var XmlTemplateRenderer */
    protected $renderer;

    /** @var XmlValidationPipeline */
    protected $validation;

    /** @var Signed */
    protected $signer;

    /** @var PayloadValidatorInterface */
    protected $payloadValidator;

    public function __construct(
        XmlTemplateRenderer $renderer,
        XmlValidationPipeline $validation,
        Signed $signer,
        PayloadValidatorInterface $payloadValidator
    ) {
        $this->renderer = $renderer;
        $this->validation = $validation;
        $this->signer = $signer;
        $this->payloadValidator = $payloadValidator;
    }

    /**
     * Genera XML UBL según tipo, firma, y valida (XSD + reglas de negocio).
     *
     * Flujo:
     *  0) Validar contrato del payload (claves requeridas por tipo)
     *  1) Render (Blade)
     *  2) Formatear (solo para legibilidad y line numbers estables)
     *  3) Firmar (inserta ds:Signature dentro de ext:ExtensionContent)
     *  4) Validar sobre el XML FINAL (firmado)
     */
    /**
     * Recibe el payload con campos en español (Greenter-style), lo traduce al
     * contrato interno y genera. Útil para exponer el paquete como API.
     */
    public function generateFromEs(
        string  $type,
        array   $payloadEs,
        ?string $certificateFile = null,
        ?string $certificatePassword = null
    ): GenerationResult
    {
        $payload = (new \ESolutions\Xml\Payload\EsPayloadMapper())->toInternal($payloadEs);

        return $this->generate($type, $payload, $certificateFile, $certificatePassword);
    }

    public function generate(
        string  $type,
        array   $payload,
        ?string $certificateFile = null,
        ?string $certificatePassword = null
    ): GenerationResult
    {
        // Normaliza type (invoice, credit_note, etc.)
        $normalizedType = DocTypeNormalizer::normalize($type);

        // 0) Contrato de entrada: si el payload no cumple el esquema del tipo,
        //    se retorna un resultado fallido con errores claros en lugar de
        //    reventar con "Undefined array key" dentro de la plantilla.
        $payloadValidation = $this->payloadValidator->validate($normalizedType, $payload);
        if (!$payloadValidation->ok) {
            $doc = (isset($payload['document']) && is_array($payload['document'])) ? $payload['document'] : [];
            return GenerationResult::failed($normalizedType, $payloadValidation, $doc);
        }

        // Vista blade a usar (configurable)
        $view = config('esolutions_xml.views.' . $normalizedType) ?: 'invoice';
        // 1) Render del XML (esto aún NO está firmado)
        $xml = $this->renderer->render($view, $payload);
        // 2) Formateo (solo ANTES de firmar)
        //    Importante: luego de firmar NO se debe reformatear porque cambia el XML firmado.
        if (class_exists(XmlFormatter::class)) {
            $xml = XmlFormatter::format($xml, true, true);
        }
        // Guardamos el unsigned para debugging/compare
        $unsigned = $xml;

        // 3) Firmado — metadata para actualizar cac:Signature (cbc:ID, cbc:Note, cbc:URI)
        $signatureMeta = [
            'signatureId' => $payload['document']['signature_note'] ?? config('esolutions_xml.signing.signature_note'),
            'signatureUri' => $payload['document']['signature_uri'] ?? config('esolutions_xml.signing.signature_uri'),
        ];

        // Si el template no trae ExtensionContent, la firma no puede insertarse
        // donde SUNAT la exige — error claro en vez de "Signature DOM element not found".
        if (strpos($xml, 'ext:ExtensionContent') === false) {
            throw new \RuntimeException(
                'El XML no contiene ext:ExtensionContent. Revisa que el template incluya UBLExtensions/UBLExtension/ExtensionContent.'
            );
        }

        // Firma con cert (si null => usa demo) + meta del payload
        $xml = $this->signer->xmlSigned($xml, $certificateFile, $certificatePassword, $signatureMeta);

        // 4) Validación XSD + reglas de negocio sobre el XML FINAL (firmado)
        $validation = $this->validation->validate($normalizedType, $payload, $xml);

        $doc = (isset($payload['document']) && is_array($payload['document'])) ? $payload['document'] : $payload;

        return new GenerationResult(
            $normalizedType,
            $doc,
            $xml,
            $validation,
            $unsigned,
            $this->signer->getLastCertificateInfo(),
            $this->signer->getLastSignatureMeta()
        );
    }
}
