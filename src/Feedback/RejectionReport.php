<?php

namespace ESolutions\Xml\Feedback;

/**
 * Rechazo/observación de SUNAT/OSE ya analizado: incluye si nuestro validador
 * local lo habría atrapado (caughtLocally) y qué reglas dispararon
 * (localFindings). Value object plano, sin dependencias de framework, para que
 * cualquier consumidor lo persista como quiera (DB, JSONL, telemetría…).
 */
class RejectionReport
{
    /**
     * @param array<int,array{code:?string,message:?string}> $localFindings
     * @param array<int,mixed>|null $notes
     */
    public function __construct(
        public readonly ?string $code,
        public readonly ?string $documentTypeId,
        public readonly ?bool $caughtLocally,
        public readonly array $localFindings = [],
        public readonly ?string $message = null,
        public readonly ?string $series = null,
        public readonly ?string $number = null,
        public readonly ?string $filename = null,
        public readonly string $provider = 'sunat',
        public readonly string $environment = 'demo',
        public readonly ?array $notes = null,
    ) {
    }

    /** Un hueco = rechazo que nuestro validador local NO atrapó. */
    public function isGap(): bool
    {
        return $this->caughtLocally === false;
    }

    /** @return array<string,mixed> */
    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'document_type_id' => $this->documentTypeId,
            'caught_locally' => $this->caughtLocally,
            'local_findings' => $this->localFindings,
            'description' => $this->message,
            'series' => $this->series,
            'number' => $this->number,
            'filename' => $this->filename,
            'provider' => $this->provider,
            'environment' => $this->environment,
            'notes' => $this->notes,
        ];
    }
}
