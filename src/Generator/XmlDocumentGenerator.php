<?php

namespace ESolutions\Xml\Generator;

use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Results\GenerationResult;
use ESolutions\Xml\Rendering\XmlTemplateRenderer;
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

    public function __construct(XmlTemplateRenderer $renderer, XmlValidationPipeline $validation, Signed $signer)
    {
        $this->renderer = $renderer;
        $this->validation = $validation;
        $this->signer = $signer;
    }

    /**
     * Genera XML UBL según tipo, opcionalmente firma, y valida (XSD + reglas de negocio).
     *
     * Flujo:
     *  1) Render (Blade)
     *  2) Formatear (solo para legibilidad y line numbers estables)
     *  3) Firmar (inserta ds:Signature dentro de ext:ExtensionContent)
     *  4) Validar sobre el XML FINAL (firmado)
     */
    public function generate(
        string  $type,
        array   $payload,
        ?string $certificateFile = null,
        ?string $certificatePassword = null
    ): GenerationResult
    {
        // Normaliza type (invoice, credit_note, etc.)
        $normalizedType = DocTypeNormalizer::normalize($type);
        // Vista blade a usar (configurable)
        $view = config('esolutions_xml.views.' . $normalizedType) ?: 'invoice';
        // 1) Render del XML (esto aún NO está firmado)
        $xml = $this->renderer->render($view, $payload);
        // 2) Formateo (solo ANTES de firmar)
        //    Importante: luego de firmar NO debes “reformatear” porque cambia el XML firmado.
        if (class_exists(XmlFormatter::class)) {
            $xml = XmlFormatter::format($xml, true, true);
        }
        // Guardamos el unsigned para debugging/compare
        $unsigned = $xml;
        // 3) Firmado

        // Metadata para actualizar cac:Signature (cbc:ID, cbc:Note, cbc:URI)

        $signatureMeta = [
            'signatureId' => $payload['document']['signature_note'],
            'signatureUri' => $payload['document']['signature_uri'],
        ];

        // (Opcional recomendado) si el template no trae ExtensionContent, el firmado no podrá insertarse en el lugar correcto.
        // Esto te da un error más claro que "Signature DOM element not found".
        if (strpos($xml, 'ext:ExtensionContent') === false) {
            // Si prefieres no lanzar, puedes dejar que firme sobre documentElement,
            // pero para SUNAT debería ir en ExtensionContent.
            throw new \RuntimeException(
                'El XML no contiene ext:ExtensionContent. Revisa que el template incluya UBLExtensions/UBLExtension/ExtensionContent.'
            );
        }

        // Firma con cert (si null => usa demo) + meta del payload
        $xml = $this->signer->xmlSigned($xml, $certificateFile, $certificatePassword, $signatureMeta);

        // 4) Validación XSD + reglas de negocio sobre el XML FINAL (firmado)
        //    NOTA: para reglas, pasamos payload completo (doc + supplier + customer + etc.)
        $validation = $this->validation->validate($normalizedType, $payload, $xml);

        // Para compatibilidad con tu GenerationResult: doc principal
        $doc = (isset($payload['document']) && is_array($payload['document'])) ? $payload['document'] : $payload;

        // Retorno con unsigned + info del cert usado
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
