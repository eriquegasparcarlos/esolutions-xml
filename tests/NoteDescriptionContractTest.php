<?php

namespace ESolutions\Xml\Tests;

use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;
use PHPUnit\Framework\Attributes\DataProvider;

/**
 * Contrato de cac:DiscrepancyResponse/cbc:Description en NC/ND.
 *
 * Los fixtures de payloads son todos casos válidos, así que ninguno cubría el
 * sustento ausente: la plantilla lo rellenaba con '-' y SUNAT rechazaba la nota
 * con 2135 (regla ValidaExprRegNC-2.0.1.xsl, '^(?!\s*$)[^\s].{1,499}$', exige de
 * 2 a 500 caracteres). Estos casos negativos fijan que el paquete falle temprano
 * en vez de emitir un XML que SUNAT va a rechazar.
 */
class NoteDescriptionContractTest extends TestCase
{
    /** @return array<string, array{string, string}> */
    public static function noteProvider(): array
    {
        return [
            'credit note (07)' => ['07', __DIR__ . '/fixtures/payloads/credit-note/NC_01_anulacion.json'],
            'debit note (08)' => ['08', __DIR__ . '/fixtures/payloads/debit-note/ND_01_intereses.json'],
        ];
    }

    /** @return array<string, array{mixed}> */
    public static function emptyDescriptionProvider(): array
    {
        return [
            'null' => [null],
            'cadena vacía' => [''],
            'solo espacios' => ['   '],
        ];
    }

    #[DataProvider('noteProvider')]
    public function test_fixture_description_cumple_la_regla_sunat(string $type, string $file): void
    {
        $payload = json_decode(file_get_contents($file), true)['payload'];
        $description = $payload['document']['note_description'] ?? null;

        $this->assertIsString($description, "El fixture de '{$type}' debe traer note_description");
        $this->assertMatchesRegularExpression(
            '/^(?!\s*$)[^\s].{1,499}$/u',
            $description,
            "note_description del fixture de '{$type}' no cumple la regla SUNAT (2 a 500 caracteres)"
        );
    }

    #[DataProvider('noteProvider')]
    public function test_description_vacia_no_genera_xml(string $type, string $file): void
    {
        $base = json_decode(file_get_contents($file), true)['payload'];

        /** @var XmlDocumentGeneratorContract $gen */
        $gen = $this->app->make(XmlDocumentGeneratorContract::class);

        foreach (array_merge(self::emptyDescriptionProvider(), ['ausente' => ['__unset__']]) as $caso => [$valor]) {
            $payload = $base;
            if ($valor === '__unset__') {
                unset($payload['document']['note_description']);
            } else {
                $payload['document']['note_description'] = $valor;
            }

            $res = $gen->generate($type, $payload);

            $this->assertFalse(
                $res->isOk(),
                "'{$type}' con note_description {$caso} debería fallar en vez de generar XML inválido"
            );
            $this->assertStringContainsString(
                'note_description',
                (string) $res->validation?->firstMessage(),
                "El error de '{$type}' ({$caso}) debe nombrar la clave que falta"
            );
        }
    }

    /**
     * Fija el motivo del bug: el viejo fallback de un solo carácter sí producía
     * XML, pero SUNAT lo rechazaba con 2135 (la regla exige mínimo 2).
     */
    #[DataProvider('noteProvider')]
    public function test_description_de_un_caracter_es_rechazada_por_las_reglas(string $type, string $file): void
    {
        $payload = json_decode(file_get_contents($file), true)['payload'];
        $payload['document']['note_description'] = '-';

        /** @var XmlDocumentGeneratorContract $gen */
        $gen = $this->app->make(XmlDocumentGeneratorContract::class);
        $res = $gen->generate($type, $payload);

        $this->assertNotEmpty($res->xml, "Se esperaba XML para '{$type}' (el payload no está vacío)");

        $rules = (new SunatRulesValidator())->validate($res->xml, $type);
        // SunatRulesValidator expone el código SUNAT en 'path' y el nodo en 'message'.
        $codes = array_map(fn ($e) => $e->path, $rules->errors);

        $this->assertContains(
            '2135',
            $codes,
            "'{$type}': un Description de 1 carácter debe disparar 2135 — " .
            implode(' | ', array_map(fn ($e) => "[{$e->path}] {$e->message}", $rules->errors))
        );
    }
}
