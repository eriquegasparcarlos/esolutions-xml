<?php

namespace ESolutions\Xml\Sending;

/**
 * Configuración de envío independiente del proyecto consumidor.
 * En apps multi-tenant se arma una instancia por empresa/tenant
 * (credenciales SOL propias) con fromArray(); fromConfig() lee los
 * defaults globales de config('esolutions_xml.sending').
 */
final class SenderConfig
{
    public function __construct(
        public readonly string $provider = 'sunat',       // 'sunat' | 'nubefact'
        public readonly string $environment = 'demo',     // 'demo' | 'production'
        public readonly string $username = '',
        public readonly string $password = '',
        public readonly ?string $endpoint = null,         // override total (URL de OSE/PSE); null => endpoints SUNAT por defecto
        public readonly ?string $documentTypeId = null,   // '20'/'40'/'RR' usan el endpoint de retenciones
    ) {
        if (!in_array($this->environment, ['demo', 'production'], true)) {
            throw new \InvalidArgumentException("environment debe ser 'demo' o 'production', se recibió '{$this->environment}'.");
        }
    }

    /**
     * @param array{provider?: string, environment?: string, username?: string,
     *               password?: string, endpoint?: string|null, document_type_id?: string|null} $config
     */
    public static function fromArray(array $config): self
    {
        return new self(
            strtolower((string) ($config['provider'] ?? 'sunat')),
            strtolower((string) ($config['environment'] ?? 'demo')),
            (string) ($config['username'] ?? ''),
            (string) ($config['password'] ?? ''),
            $config['endpoint'] ?? null,
            $config['document_type_id'] ?? null,
        );
    }

    /**
     * Defaults globales desde config('esolutions_xml.sending').
     */
    public static function fromConfig(array $overrides = []): self
    {
        return self::fromArray(array_merge((array) config('esolutions_xml.sending', []), $overrides));
    }

    public function isDemo(): bool
    {
        return $this->environment === 'demo';
    }

    public function withDocumentType(?string $documentTypeId): self
    {
        return new self(
            $this->provider,
            $this->environment,
            $this->username,
            $this->password,
            $this->endpoint,
            $documentTypeId,
        );
    }
}
