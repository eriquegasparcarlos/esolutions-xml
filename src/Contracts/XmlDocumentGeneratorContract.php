<?php

namespace ESolutions\Xml\Contracts;

use ESolutions\Xml\Results\GenerationResult;

interface XmlDocumentGeneratorContract
{
    /**
     * Genera XML (Blade), opcionalmente firma y valida.
     *
     * $type soporta: invoice, credit_note, debit_note, summary, voided
     * (y alias: 01/03/07/08, rc/ra, etc. según DocTypeNormalizer)
     *
     * @param string $type
     * @param array  $payload Estructura ya construida (doc, supplier, customer, lines, etc.)
     * @param string|null $certificateFile Path a PEM/PFX/P12 (opcional)
     * @param string|null $certificatePassword Password si aplica (PFX/P12)
     */
    public function generate(
        string $type,
        array $payload,
        ?string $certificateFile = null,
        ?string $certificatePassword = null
    ): GenerationResult;

    /**
     * Igual que generate(), pero recibe el payload con campos en español
     * (estilo Greenter/camelCase). Lo traduce al contrato interno con
     * EsPayloadMapper y genera. Pensado para exponer el paquete como API.
     */
    public function generateFromEs(
        string $type,
        array $payloadEs,
        ?string $certificateFile = null,
        ?string $certificatePassword = null
    ): GenerationResult;
}
