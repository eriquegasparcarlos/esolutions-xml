<?php

namespace ESolutions\Xml\Validation;

use ESolutions\Xml\Results\ValidationResult;
use ESolutions\Xml\Validation\Rules\BusinessRulesValidator;
use ESolutions\Xml\Validation\Xsd\XsdValidator;

class XmlValidationPipeline
{
    /** @var XsdValidator */
    protected $xsd;

    /** @var BusinessRulesValidator */
    protected $rules;

    public function __construct(XsdValidator $xsd, BusinessRulesValidator $rules)
    {
        $this->xsd = $xsd;
        $this->rules = $rules;
    }

    /**
     * @param string $normalizedType
     * @param array  $payload  Payload completo (doc, supplier, customer, lines, etc.)
     * @param string $xml
     */
    public function validate(string $normalizedType, array $payload, string $xml): ValidationResult
    {
        $xsdResult = $this->xsd->validate($normalizedType, $xml);

        // Reglas reciben payload completo para validar doc + partes + líneas, etc.
        $rulesResult = $this->rules->validate($normalizedType, $payload);

        return $xsdResult->merge($rulesResult);
    }
}
