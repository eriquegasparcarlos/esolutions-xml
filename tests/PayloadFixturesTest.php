<?php

namespace ESolutions\Xml\Tests;

use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;
use PHPUnit\Framework\Attributes\DataProvider;

/**
 * Recorre TODOS los fixtures de tests/fixtures/payloads/**.json y, por cada uno:
 *   1) lo genera con el paquete y verifica que pase el XSD (isOk).
 *   2) lo corre por el motor de reglas SUNAT (nivel determinista) y exige 0 hallazgos.
 *
 * Los fixtures son los MISMOS JSON que sirven de ejemplo de payload por caso.
 * Agregar un caso nuevo = agregar un .json; el test lo recoge solo.
 *
 * La clave 'expect' del fixture define qué se espera:
 *
 *   'ok'            XSD + reglas SUNAT sin hallazgos (por defecto).
 *   'xsd'           solo XSD (tipos cuyas reglas aún no son fiables).
 *   'payload_error' generate() debe fallar antes de emitir XML; 'expect_message'
 *                   (opcional) es un texto que el error debe contener.
 *   'rules_error'   genera XML válido pero las reglas SUNAT deben rechazarlo;
 *                   'expect_codes' lista los códigos que deben aparecer.
 *
 * Los dos últimos fijan los rechazos conocidos: sin ellos, un caso negativo
 * "deja de fallar" en silencio y nadie se entera.
 */
class PayloadFixturesTest extends TestCase
{
    /** @return array<string, array{string}> */
    public static function fixtureProvider(): array
    {
        $out = [];
        foreach (glob(__DIR__ . '/fixtures/payloads/*/*.json') ?: [] as $file) {
            $out[basename($file, '.json')] = [$file];
        }
        return $out;
    }

    #[DataProvider('fixtureProvider')]
    public function test_fixture_generates_and_validates(string $file): void
    {
        $fixture = json_decode(file_get_contents($file), true);
        $this->assertIsArray($fixture, "Fixture inválido (JSON): $file");
        $this->assertArrayHasKey('type', $fixture);
        $this->assertArrayHasKey('payload', $fixture);

        /** @var XmlDocumentGeneratorContract $gen */
        $gen = $this->app->make(XmlDocumentGeneratorContract::class);
        $res = $gen->generate($fixture['type'], $fixture['payload']);
        $expect = $fixture['expect'] ?? 'ok';

        // Casos negativos: el payload no debe llegar siquiera a producir XML.
        if ($expect === 'payload_error') {
            $this->assertFalse(
                $res->isOk(),
                "'{$fixture['type']}' debía fallar en la validación de payload y generó XML"
            );
            if (isset($fixture['expect_message'])) {
                $this->assertStringContainsString(
                    $fixture['expect_message'],
                    (string) $res->validation?->firstMessage(),
                    "El error de '{$fixture['type']}' no menciona lo esperado"
                );
            }
            return;
        }

        // 1) XSD (siempre)
        $this->assertNotEmpty($res->xml, "No se generó XML para {$fixture['type']}");
        $this->assertTrue(
            $res->isOk(),
            "XSD falla ({$fixture['type']}): " . ($res->validation?->firstMessage() ?? '')
        );

        // Casos negativos: XML bien formado que SUNAT igual rechaza.
        if ($expect === 'rules_error') {
            $rules = (new SunatRulesValidator())->validate($res->xml, $fixture['type']);
            $codes = array_map(fn ($e) => $e->path, $rules->errors);
            $detail = implode(' | ', array_map(fn ($e) => "[{$e->path}] {$e->message}", $rules->errors));

            $this->assertNotSame([], $rules->errors, "'{$fixture['type']}' debía ser rechazado por las reglas y pasó");
            foreach ($fixture['expect_codes'] ?? [] as $code) {
                $this->assertContains($code, $codes, "Falta el código {$code} en '{$fixture['type']}' — obtenido: {$detail}");
            }
            return;
        }

        // 2) Reglas SUNAT cliente (determinista): 0 hallazgos.
        //    expect='xsd' => solo XSD (para casos cuyo tipo aún no tiene reglas
        //    fiables).
        if ($expect === 'ok') {
            $rules = (new SunatRulesValidator())->validate($res->xml, $fixture['type']);
            $found = array_map(fn ($e) => "[{$e->path}] {$e->message}", $rules->errors);
            $this->assertSame([], $found, "Reglas SUNAT ({$fixture['type']}): " . implode(' | ', $found));
        }
    }
}
