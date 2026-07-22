<?php

namespace ESolutions\Xml\Tests;

use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;

/**
 * RA y RR comparten el root UBL VoidedDocuments, pero se validan con rulesets
 * distintos (SummaryVoided vs OtrosVoided). Cuando el llamador no pasa
 * documentTypeId, el validador debe discriminar por el prefijo del cbc:ID —
 * antes de este test TODO VoidedDocuments caía en un solo ruleset y el otro
 * quedaba muerto (los RA se validaban con reglas que exigían ID RR- y docs
 * 20/40).
 */
class VoidedRulesRoutingTest extends TestCase
{
    private function xmlFor(string $type, string $identifier, string $lineDocType, string $series): string
    {
        $gen = $this->app->make(XmlDocumentGeneratorContract::class);
        $res = $gen->generate($type, ['document' => [
            'identifier' => $identifier,
            'date_of_reference' => '2026-07-21',
            'date_of_issue' => '2026-07-22',
            'signature_uri' => 'signatureSUNAT',
            'signature_note' => 'QuiroSys',
            'company_number' => '10417844398',
            'company_name' => 'CLINICA QUIROSYS SAC',
            'documents' => [[
                'document_type_id' => $lineDocType,
                'series' => $series,
                'number' => '5',
                'description' => 'Prueba de ruteo de reglas',
            ]],
        ]]);

        $this->assertNotEmpty($res->xml, "No se generó XML para {$type}");

        return $res->xml;
    }

    public function test_ra_sin_document_type_id_usa_reglas_ra(): void
    {
        // Un RA válido (factura F001) debe pasar limpio aunque no se pase el
        // tipo: el cbc:ID RA- lo enruta al ruleset de bajas, no al de RR.
        $xml = $this->xmlFor('RA', 'RA-20260722-1', '01', 'F001');
        $rules = (new SunatRulesValidator())->validate($xml, null);
        $found = array_map(fn ($e) => "[{$e->path}] {$e->message}", $rules->errors);
        $this->assertSame([], $found, 'RA válido rechazado: ' . implode(' | ', $found));
    }

    public function test_rr_sin_document_type_id_usa_reglas_rr(): void
    {
        $xml = $this->xmlFor('RR', 'RR-20260722-1', '20', 'R001');
        $rules = (new SunatRulesValidator())->validate($xml, null);
        $found = array_map(fn ($e) => "[{$e->path}] {$e->message}", $rules->errors);
        $this->assertSame([], $found, 'RR válido rechazado: ' . implode(' | ', $found));
    }

    public function test_rr_con_factura_es_rechazado_sin_document_type_id(): void
    {
        // El ruteo por cbc:ID debe aplicar las reglas RR (docs 20/40): meter
        // una factura en una reversión es 2308.
        $xml = $this->xmlFor('RR', 'RR-20260722-2', '01', 'F001');
        $rules = (new SunatRulesValidator())->validate($xml, null);
        $codes = array_map(fn ($e) => $e->path, $rules->errors);
        $this->assertContains('2308', $codes, 'Se esperaba 2308; obtenido: ' . implode(',', $codes));
    }
}
