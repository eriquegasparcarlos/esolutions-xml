<?php

namespace ESolutions\Xml\Results;

class GenerationResult
{
    /** @var string */
    public $type;

    /** @var array */
    public $doc;

    /** @var string */
    public $xml;

    /** @var ValidationResult */
    public $validation;

    /** @var string|null */
    public $unsignedXml;

    /** @var array|null */
    public $certificate;

    /** @var array|null  Ej: ['digest_value' => '...', 'signature_value' => '...'] */
    public $signatureMeta;

    public function __construct(
        string $type,
        array $doc,
        string $xml,
        ValidationResult $validation,
        ?string $unsignedXml = null,
        ?array $certificate = null,
        ?array $signatureMeta = null
    ) {
        $this->type = $type;
        $this->doc = $doc;
        $this->xml = $xml;
        $this->validation = $validation;
        $this->unsignedXml = $unsignedXml;
        $this->certificate = $certificate;
        $this->signatureMeta = $signatureMeta;
    }

    public function isOk(): bool
    {
        return (bool) $this->validation->ok;
    }

    public function getHash(): ?string
    {
        return $this->signatureMeta['digest_value'] ?? null;
    }
}
