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

        // 1) XSD (siempre)
        $this->assertNotEmpty($res->xml, "No se generó XML para {$fixture['type']}");
        $this->assertTrue(
            $res->isOk(),
            "XSD falla ({$fixture['type']}): " . ($res->validation?->firstMessage() ?? '')
        );

        // 2) Reglas SUNAT cliente (determinista): 0 hallazgos.
        //    expect='xsd' => solo XSD (para casos cuyo tipo aún no tiene reglas
        //    fiables). Hoy todos los fixtures son 'ok' (XSD + reglas).
        if (($fixture['expect'] ?? 'ok') === 'ok') {
            $rules = (new SunatRulesValidator())->validate($res->xml, $fixture['type']);
            $found = array_map(fn ($e) => "[{$e->path}] {$e->message}", $rules->errors);
            $this->assertSame([], $found, "Reglas SUNAT ({$fixture['type']}): " . implode(' | ', $found));
        }
    }
}
