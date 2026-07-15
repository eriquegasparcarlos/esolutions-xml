<?php

namespace ESolutions\Xml\Validation\Sunat;

use ESolutions\Xml\Results\ValidationResult;

/**
 * Valida un XML de comprobante contra las reglas cliente de SUNAT extraídas del
 * Facturador SFS (nivel determinista: existencia, regex, catálogos, decimales,
 * series). Es una capa PRE-ENVÍO: caza errores de formato/catálogo/estructura
 * antes de mandar a SUNAT, reduciendo rechazos.
 *
 * Las reglas de reconciliación aritmética (isTrueExpresion) quedan opt-in
 * ($expressions) por ser frágiles de replicar; las clave (3294/3305) se cubren
 * con reglas propias en el generador.
 */
class SunatRulesValidator
{
    /** document_type_id → archivo de reglas */
    private const MAP = [
        '01' => 'factura',
        '03' => 'boleta',
        '07' => 'nota_credito',
        '08' => 'nota_debito',
        '09' => 'guia_remitente',
        '20' => 'retencion',
        '40' => 'percepcion',
        // Resúmenes/bajas se resuelven por localName del XML (ver resolveByRoot).
    ];

    /** localName de la raíz UBL → archivo de reglas (para resúmenes/bajas) */
    private const ROOT_MAP = [
        'SummaryDocuments' => 'resumen',
        'VoidedDocuments' => 'baja',
        'Invoice' => 'factura',
        'CreditNote' => 'nota_credito',
        'DebitNote' => 'nota_debito',
        'DespatchAdvice' => 'guia_remitente',
        'Retention' => 'retencion',
        'Perception' => 'percepcion',
    ];

    /**
     * Códigos suprimidos por defecto: reglas del XSLT cliente que son MÁS
     * estrictas que el servidor SUNAT para estructuras que SUNAT sí acepta.
     *   3033/3035: la regla de detracción se aplica a la PaymentTerms de
     *   "FormaPago" (Contado/Crédito) porque el XSLT no distingue por cbc:ID;
     *   SUNAT server acepta esa estructura (verificado: B001-31 aceptada).
     * Se puede sobreescribir con config('esolutions_xml.validation.sunat_suppress').
     *
     * @var array<int,string>
     */
    private array $suppress;

    public function __construct(
        private ?ErrorCatalog $errors = null,
        private ?SunatCatalog $catalogs = null,
        ?array $suppress = null,
    ) {
        $this->errors ??= new ErrorCatalog();
        $this->catalogs ??= new SunatCatalog();
        $this->suppress = $suppress
            ?? (array) (function_exists('config') ? config('esolutions_xml.validation.sunat_suppress', ['3033', '3035']) : ['3033', '3035']);
    }

    /**
     * @param string $xml XML firmado del comprobante
     * @param string|null $documentTypeId '01','03','07'… (si null, se infiere del XML)
     * @param bool $expressions incluir reglas de reconciliación (frágiles)
     */
    public function validate(string $xml, ?string $documentTypeId = null, bool $expressions = false): ValidationResult
    {
        $ruleFile = $this->resolveRuleFile($xml, $documentTypeId);
        if ($ruleFile === null || !is_file($ruleFile)) {
            return ValidationResult::ok(); // tipo sin reglas: no bloquea
        }

        $ruleset = require $ruleFile;
        $engine = new RuleEngine($this->errors, $this->catalogs, $expressions);

        $errors = $engine->run($xml, $ruleset);

        // Reglas propias (reconciliaciones server-side que el XSLT cliente no trae).
        $errors = array_merge($errors, (new OwnRules($this->errors))->check($xml, $documentTypeId));

        // Filtra códigos suprimidos (discrepancias cliente-vs-servidor conocidas).
        if ($this->suppress) {
            $errors = array_values(array_filter(
                $errors,
                fn ($e) => !in_array($e->path, $this->suppress, true)
            ));
        }

        return $errors ? ValidationResult::fail($errors) : ValidationResult::ok();
    }

    private function resolveRuleFile(string $xml, ?string $documentTypeId): ?string
    {
        $name = $documentTypeId !== null ? (self::MAP[$documentTypeId] ?? null) : null;

        if ($name === null) {
            $root = $this->rootLocalName($xml);
            $name = $root !== null ? (self::ROOT_MAP[$root] ?? null) : null;
        }

        return $name ? __DIR__ . '/Rules/' . $name . '.php' : null;
    }

    private function rootLocalName(string $xml): ?string
    {
        $dom = new \DOMDocument();
        $prev = libxml_use_internal_errors(true);
        $ok = $dom->loadXML($xml);
        libxml_clear_errors();
        libxml_use_internal_errors($prev);

        return ($ok && $dom->documentElement) ? $dom->documentElement->localName : null;
    }
}
