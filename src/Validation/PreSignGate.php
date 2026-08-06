<?php

namespace ESolutions\Xml\Validation;

use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;

/**
 * Gate de reglas SUNAT (SFS) ANTES de firmar — opt-in por config.
 *
 * Corre {@see SunatRulesValidator} sobre el XML SIN firmar y decide si la
 * generación debe BLOQUEARSE. Los ERRORES (códigos < 4000) siempre bloquean;
 * las OBSERVACIONES (>= 4000, code 'SUNAT_OBS') bloquean o pasan según
 * `esolutions_xml.validation.pre_sign.block_on_observations`. Cuando pasan, se
 * devuelven como `warnings` para mostrarlas/solventarlas.
 */
class PreSignGate
{
    private SunatRulesValidator $validator;

    public function __construct(?SunatRulesValidator $validator = null)
    {
        $this->validator = $validator ?? new SunatRulesValidator();
    }

    public function enabled(): bool
    {
        return (bool) (function_exists('config')
            ? config('esolutions_xml.validation.pre_sign.enabled', false)
            : false);
    }

    /**
     * @return array{blocked: bool, errors: array, warnings: array}
     */
    public function check(string $unsignedXml, ?string $documentTypeId = null): array
    {
        // El gate usa su propio flag de expressions (default off): las reglas de
        // reconciliación sobre-disparan hoy, así que por defecto solo se corren
        // las deterministas (catálogos/regex/estructura), que son confiables.
        $expressions = (bool) (function_exists('config')
            ? config('esolutions_xml.validation.pre_sign.expressions', false)
            : false);

        $result = $this->validator->validate($unsignedXml, $documentTypeId, $expressions);

        if ($result->ok) {
            return ['blocked' => false, 'errors' => [], 'warnings' => []];
        }

        $isObservation = fn ($e) => ($e->code ?? '') === 'SUNAT_OBS';
        $observations = array_values(array_filter($result->errors, $isObservation));
        $errors = array_values(array_filter($result->errors, fn ($e) => ! $isObservation($e)));

        $blockObservations = (bool) (function_exists('config')
            ? config('esolutions_xml.validation.pre_sign.block_on_observations', true)
            : true);

        $blocking = $blockObservations ? $result->errors : $errors;

        return [
            'blocked'  => ! empty($blocking),
            'errors'   => $blocking,                                   // motivo del bloqueo (para ValidationResult::fail)
            'warnings' => $blockObservations ? [] : $observations,    // observaciones que se dejaron pasar
        ];
    }
}
