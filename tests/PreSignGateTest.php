<?php

namespace ESolutions\Xml\Tests;

use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;
use ESolutions\Xml\Results\ValidationError;
use ESolutions\Xml\Results\ValidationResult;
use ESolutions\Xml\Validation\PreSignGate;
use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;

/**
 * Gate de reglas SUNAT ANTES de firmar (opt-in). Se prueba la LÓGICA de decisión
 * con un validador inyectado (para no depender de reglas frágiles) y, en integración,
 * que un comprobante válido no dispare falsos positivos.
 */
class PreSignGateTest extends TestCase
{
    /** Un validador SUNAT que devuelve un resultado predefinido. */
    private function fakeValidator(ValidationResult $result): SunatRulesValidator
    {
        return new class($result) extends SunatRulesValidator {
            public function __construct(private ValidationResult $canned)
            {
                parent::__construct(null, null, []);
            }

            public function validate(string $xml, ?string $documentTypeId = null, bool $expressions = false): ValidationResult
            {
                return $this->canned;
            }
        };
    }

    public function test_blocks_on_error(): void
    {
        $result = ValidationResult::fail([new ValidationError('detracción no corresponde', 'SUNAT', '3128')]);
        $decision = (new PreSignGate($this->fakeValidator($result)))->check('<xml/>', '03');

        $this->assertTrue($decision['blocked']);
        $this->assertNotEmpty($decision['errors']);
    }

    public function test_passes_when_ok(): void
    {
        $decision = (new PreSignGate($this->fakeValidator(ValidationResult::ok())))->check('<xml/>', '03');

        $this->assertFalse($decision['blocked']);
        $this->assertSame([], $decision['errors']);
        $this->assertSame([], $decision['warnings']);
    }

    public function test_observations_pass_and_are_reported_as_warnings_when_configured(): void
    {
        config()->set('esolutions_xml.validation.pre_sign.block_on_observations', false);

        $result = ValidationResult::fail([new ValidationError('IGV incorrecto', 'SUNAT_OBS', '4290')]);
        $decision = (new PreSignGate($this->fakeValidator($result)))->check('<xml/>', '03');

        $this->assertFalse($decision['blocked'], 'Con block_on_observations=false, una observación no bloquea.');
        $this->assertNotEmpty($decision['warnings'], 'La observación debe reportarse como advertencia.');
    }

    public function test_observations_block_when_configured(): void
    {
        config()->set('esolutions_xml.validation.pre_sign.block_on_observations', true);

        $result = ValidationResult::fail([new ValidationError('IGV incorrecto', 'SUNAT_OBS', '4290')]);
        $decision = (new PreSignGate($this->fakeValidator($result)))->check('<xml/>', '03');

        $this->assertTrue($decision['blocked'], 'Con block_on_observations=true, una observación bloquea.');
    }

    /** Con el gate ON (default: reglas deterministas), un comprobante válido pasa. */
    public function test_valid_generated_document_passes(): void
    {
        config()->set('esolutions_xml.validation.pre_sign.enabled', true);

        $fixture = json_decode(
            file_get_contents(__DIR__ . '/fixtures/payloads-es/boleta/ES_BOL_01_gravada_DNI.json'),
            true
        );

        /** @var XmlDocumentGeneratorContract $gen */
        $gen = $this->app->make(XmlDocumentGeneratorContract::class);
        $res = $gen->generateFromEs($fixture['type'], $fixture['payload']);

        $this->assertTrue($res->isOk(), 'Un comprobante válido no debe bloquearse con el gate on.');
        $this->assertNotEmpty($res->xml);
        $this->assertSame([], $res->warnings);
    }

    public function test_gate_disabled_by_default(): void
    {
        config()->set('esolutions_xml.validation.pre_sign.enabled', false);
        $this->assertFalse((new PreSignGate())->enabled());
    }
}
