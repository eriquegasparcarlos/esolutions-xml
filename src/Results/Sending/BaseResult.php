<?php

namespace ESolutions\Xml\Results\Sending;

/**
 * Envuelve el array uniforme que producen los parsers CDR
 * (success/connection/sunat_success/state_label/message/code/...) con
 * accessors tipados. toArray() devuelve el array original intacto.
 */
class BaseResult
{
    public function __construct(protected array $data = [])
    {
    }

    public static function fromArray(array $data): static
    {
        return new static($data);
    }

    /** Éxito técnico: la respuesta se recibió y se pudo interpretar. */
    public function isSuccess(): bool
    {
        return (bool) ($this->data['success'] ?? false);
    }

    /** Hubo comunicación con SUNAT/OSE (aunque respondiera Fault). */
    public function hasConnection(): bool
    {
        return (bool) ($this->data['connection'] ?? false);
    }

    /** Veredicto de negocio SUNAT: true aceptado/observado, false rechazado, null sin dictamen. */
    public function sunatSuccess(): ?bool
    {
        return $this->data['sunat_success'] ?? null;
    }

    /** aceptado | observado | rechazado | en_proceso | pendiente | indeterminado */
    public function stateLabel(): ?string
    {
        return $this->data['state_label'] ?? null;
    }

    public function isAccepted(): bool
    {
        return in_array($this->stateLabel(), ['aceptado', 'observado'], true);
    }

    public function isRejected(): bool
    {
        return $this->stateLabel() === 'rechazado';
    }

    public function isPending(): bool
    {
        return in_array($this->stateLabel(), ['en_proceso', 'pendiente'], true);
    }

    public function getCode(): ?string
    {
        $code = $this->data['code'] ?? null;

        return $code === null ? null : (string) $code;
    }

    public function getMessage(): ?string
    {
        return $this->data['message'] ?? null;
    }

    /** @return array<int, string>|null */
    public function getErrors(): ?array
    {
        return $this->data['errors'] ?? null;
    }

    /** Segundos que tomó la llamada SOAP (si el sender lo midió). */
    public function getTime(): ?float
    {
        return isset($this->data['time']) ? (float) $this->data['time'] : null;
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
