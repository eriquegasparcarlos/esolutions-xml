<?php

namespace ESolutions\Xml\Feedback;

use ESolutions\Xml\Validation\Sunat\SunatRulesValidator;

/**
 * Analiza un rechazo de SUNAT/OSE: revalida el MISMO XML con nuestro validador
 * local y marca si lo habríamos atrapado (caughtLocally). Es la mitad genérica
 * del bucle de mejora de validaciones; la persistencia la decide el consumidor
 * vía un RejectionSink.
 *
 * Uso típico en el consumidor, tras un envío rechazado:
 *
 *   $report = (new RejectionAnalyzer())->analyze($xml, $result->getCode(), $docTypeId, [
 *       'message'     => $result->getMessage(),
 *       'series'      => $series,
 *       'number'      => $number,
 *       'filename'    => $filename,
 *       'environment' => 'production',
 *   ]);
 *   $sink->store($report); // JsonlSink, Eloquent propio, telemetría…
 */
class RejectionAnalyzer
{
    private SunatRulesValidator $validator;

    public function __construct(?SunatRulesValidator $validator = null)
    {
        $this->validator = $validator ?? new SunatRulesValidator();
    }

    /**
     * @param string  $xml            XML firmado que rechazó SUNAT/OSE
     * @param ?string $code           código del rechazo (p. ej. "3305")
     * @param ?string $documentTypeId 01/03/07/08/RC/RA…
     * @param array<string,mixed> $meta series, number, filename, provider, environment, message, notes
     */
    public function analyze(string $xml, ?string $code, ?string $documentTypeId, array $meta = []): RejectionReport
    {
        $caught = null;
        $findings = [];
        try {
            // expressions=true: incluye reconciliaciones para maximizar la
            // detección al comparar contra el código real de SUNAT.
            $local = $this->validator->validate($xml, $documentTypeId, true);
            $findings = array_map(
                fn ($e) => ['code' => $e->path, 'message' => $e->message],
                $local->errors
            );
            // ¿Nuestro validador flagueó el MISMO código que rechazó SUNAT?
            $caught = $code !== null && (bool) array_filter(
                $findings,
                fn ($f) => (string) $f['code'] === (string) $code
            );
        } catch (\Throwable $e) {
            // Nunca bloquear el flujo por el análisis del rechazo.
        }

        return new RejectionReport(
            code: $code,
            documentTypeId: $documentTypeId,
            caughtLocally: $caught,
            localFindings: $findings,
            message: $meta['message'] ?? null,
            series: $meta['series'] ?? null,
            number: $meta['number'] ?? null,
            filename: $meta['filename'] ?? null,
            provider: $meta['provider'] ?? 'sunat',
            environment: $meta['environment'] ?? 'demo',
            notes: $meta['notes'] ?? null,
        );
    }
}
