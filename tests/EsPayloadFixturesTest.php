<?php

namespace ESolutions\Xml\Tests;

use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;
use PHPUnit\Framework\Attributes\DataProvider;

/**
 * Verifica el API en español: recorre tests/fixtures/payloads-es/**.json (payload
 * camelCase) y por cada uno lo pasa por generateFromEs() -> EsPayloadMapper ->
 * generate(), exigiendo XSD + reglas SUNAT. Es el oráculo que prueba que el mapper
 * cubre todos los campos de cada caso (ver docs/spanish-api.md).
 */
class EsPayloadFixturesTest extends TestCase
{
    /** @return array<string, array{string}> */
    public static function esFixtureProvider(): array
    {
        $out = [];
        foreach (glob(__DIR__ . '/fixtures/payloads-es/*/*.json') ?: [] as $file) {
            $out[basename($file, '.json')] = [$file];
        }
        return $out;
    }

    #[DataProvider('esFixtureProvider')]
    public function test_es_fixture_generates_and_validates(string $file): void
    {
        $fixture = json_decode(file_get_contents($file), true);
        $this->assertIsArray($fixture, "Fixture ES inválido (JSON): $file");
        $this->assertArrayHasKey('type', $fixture);
        $this->assertArrayHasKey('payload', $fixture);

        /** @var XmlDocumentGeneratorContract $gen */
        $gen = $this->app->make(XmlDocumentGeneratorContract::class);
        $res = $gen->generateFromEs($fixture['type'], $fixture['payload']);

        $this->assertNotEmpty($res->xml, "No se generó XML (es) para {$fixture['type']}");
        $this->assertTrue(
            $res->isOk(),
            "XSD falla (es {$fixture['type']}): " . ($res->validation?->firstMessage() ?? '')
        );

        if (($fixture['expect'] ?? 'ok') === 'ok') {
            $rules = (new SunatRulesValidator())->validate($res->xml, $fixture['type']);
            $found = array_map(fn ($e) => "[{$e->path}] {$e->message}", $rules->errors);
            $this->assertSame([], $found, "Reglas SUNAT (es {$fixture['type']}): " . implode(' | ', $found));
        }
    }
}
