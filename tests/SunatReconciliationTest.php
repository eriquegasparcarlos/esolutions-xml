<?php

namespace ESolutions\Xml\Tests;

use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;

/**
 * Reconciliación de totales y fiabilidad de las reglas de reconciliación:
 *  - 3084: el total del valor de venta debe ser la suma de las líneas.
 *  - Las reglas que dependen de variables-indicador NULL ya NO producen falsos
 *    positivos (antes marcaban 4290/4310/3128 en comprobantes válidos).
 */
class SunatReconciliationTest extends TestCase
{
    /** 3084: LegalMonetaryTotal/LineExtensionAmount != suma de las líneas. */
    public function test_detects_line_extension_total_mismatch(): void
    {
        $xml = <<<'XML'
<?xml version="1.0" encoding="utf-8"?>
<Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2"
         xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2"
         xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2">
  <cbc:ID>B001-1</cbc:ID>
  <cbc:InvoiceTypeCode listID="0101">03</cbc:InvoiceTypeCode>
  <cac:LegalMonetaryTotal>
    <cbc:LineExtensionAmount currencyID="PEN">130.00</cbc:LineExtensionAmount>
    <cbc:TaxInclusiveAmount currencyID="PEN">130.00</cbc:TaxInclusiveAmount>
    <cbc:PayableAmount currencyID="PEN">130.00</cbc:PayableAmount>
  </cac:LegalMonetaryTotal>
  <cac:InvoiceLine>
    <cbc:ID>1</cbc:ID>
    <cbc:LineExtensionAmount currencyID="PEN">100.00</cbc:LineExtensionAmount>
  </cac:InvoiceLine>
</Invoice>
XML;

        $result = (new SunatRulesValidator())->validate($xml, '03');
        $codes = array_map(fn ($e) => $e->path, $result->errors);

        $this->assertContains('3084', $codes, 'Debe detectar el descuadre del total del valor de venta (130 vs 100).');
    }

    /** El mismo documento con totales correctos NO dispara 3084. */
    public function test_matching_totals_do_not_trigger_3084(): void
    {
        $xml = <<<'XML'
<?xml version="1.0" encoding="utf-8"?>
<Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2"
         xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2"
         xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2">
  <cbc:ID>B001-1</cbc:ID>
  <cbc:InvoiceTypeCode listID="0101">03</cbc:InvoiceTypeCode>
  <cac:LegalMonetaryTotal>
    <cbc:LineExtensionAmount currencyID="PEN">100.00</cbc:LineExtensionAmount>
  </cac:LegalMonetaryTotal>
  <cac:InvoiceLine>
    <cbc:ID>1</cbc:ID>
    <cbc:LineExtensionAmount currencyID="PEN">100.00</cbc:LineExtensionAmount>
  </cac:InvoiceLine>
</Invoice>
XML;

        $result = (new SunatRulesValidator())->validate($xml, '03');
        $codes = array_map(fn ($e) => $e->path, $result->errors);

        $this->assertNotContains('3084', $codes);
    }

    /**
     * Un comprobante válido generado por el paquete NO produce falsos positivos
     * de reconciliación, ni siquiera con las reglas de expressions activadas
     * (antes marcaba 4290/4310/3128 por variables-indicador NULL).
     */
    public function test_valid_document_has_no_false_positives_with_expressions(): void
    {
        $fixture = json_decode(
            file_get_contents(__DIR__ . '/fixtures/payloads-es/boleta/ES_BOL_01_gravada_DNI.json'),
            true
        );

        /** @var XmlDocumentGeneratorContract $gen */
        $gen = $this->app->make(XmlDocumentGeneratorContract::class);
        $res = $gen->generateFromEs($fixture['type'], $fixture['payload']);

        $result = (new SunatRulesValidator())->validate($res->xml, '03', true); // expressions ON
        $found = array_map(fn ($e) => $e->path . ':' . $e->message, $result->errors);

        $this->assertSame([], $found, 'Un comprobante válido no debe tener observaciones (ni con expressions).');
    }
}
