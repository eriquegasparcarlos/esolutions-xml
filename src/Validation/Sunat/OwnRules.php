<?php

namespace ESolutions\Xml\Validation\Sunat;

use DOMDocument;
use DOMXPath;
use ESolutions\Xml\Results\ValidationError;

/**
 * Reglas PROPIAS de reconciliación server-side que el XSLT cliente del SFS NO
 * incluye (SUNAT las valida en su servidor). Se escriben a mano en PHP para
 * tener control numérico exacto, y se van AGREGANDO a partir de los rechazos
 * reales capturados (ver el bucle de feedback en el consumidor).
 *
 * Cada método privado check* evalúa una regla contra el XML y agrega un
 * ValidationError si falla, usando el código y mensaje oficial de SUNAT.
 */
class OwnRules
{
    private DOMXPath $xp;
    private ErrorCatalog $errors;

    private const NS = [
        'cbc' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2',
        'cac' => 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2',
    ];

    /**
     * Fechas de vigencia de reglas nuevas de SUNAT (ver docs/sunat-changes-2026-08.md).
     * Cada regla se aplica solo a documentos con fecha de emisión >= su vigencia
     * (SUNAT valida por fecha de emisión, no por fecha de envío).
     */
    private const EFFECTIVE_PRODUCT_CODE = '2026-08-01'; // #12 ERR-3496
    private const EFFECTIVE_ND13_INAFECTA = '2026-08-01'; // #23 ERR-3507

    private string $rootName = '';

    public function __construct(?ErrorCatalog $errors = null)
    {
        $this->errors = $errors ?? new ErrorCatalog();
    }

    /**
     * @return ValidationError[]
     */
    public function check(string $xml, ?string $documentTypeId = null): array
    {
        $dom = new DOMDocument();
        $prev = libxml_use_internal_errors(true);
        $ok = $dom->loadXML($xml);
        libxml_clear_errors();
        libxml_use_internal_errors($prev);
        if (!$ok) {
            return [];
        }

        $this->xp = new DOMXPath($dom);
        foreach (self::NS as $p => $u) {
            $this->xp->registerNamespace($p, $u);
        }

        $this->rootName = $dom->documentElement->localName;
        // Solo comprobantes con LegalMonetaryTotal (factura/boleta/NC/ND).
        $hasTotals = in_array($this->rootName, ['Invoice', 'CreditNote', 'DebitNote'], true);

        $errors = [];
        if ($hasTotals) {
            $this->checkTaxSum($errors);            // 3294
            $this->checkTaxInclusiveAmount($errors); // 3305
            $this->checkProductCodeMandatory($errors); // 3496 (date-gated 2026-08-01)
            $this->checkDebitNote13Inafecta($errors);  // 3507 (date-gated 2026-08-01)
        }
        return $errors;
    }

    /**
     * #23 (ERR-3507, vigencia 2026-08-01): la nota de débito tipo "13"
     * (Penalidades) solo se emite por operaciones INAFECTAS. Cada ítem debe tener
     * afectación al IGV en el rango inafecto (catálogo 07: 30-36).
     */
    private function checkDebitNote13Inafecta(array &$errors): void
    {
        if ($this->rootName !== 'DebitNote' || !$this->effectiveFrom(self::EFFECTIVE_ND13_INAFECTA)) {
            return;
        }
        $noteType = trim((string) $this->xp->evaluate('string(//cac:DiscrepancyResponse/cbc:ResponseCode)'));
        if ($noteType !== '13') {
            return;
        }
        $codes = $this->xp->query('//cac:DebitNoteLine//cac:TaxCategory/cbc:TaxExemptionReasonCode');
        if ($codes === false) {
            return;
        }
        foreach ($codes as $c) {
            $code = trim($c->textContent);
            if ($code !== '' && !preg_match('/^3[0-6]$/', $code)) {
                $errors[] = $this->err('3507', 'La nota de débito tipo 13 (Penalidades) solo debe emitirse por operaciones inafectas.');
                return;
            }
        }
    }

    /**
     * #12 (ERR-3496, vigencia 2026-08-01): el Código de producto SUNAT
     * (cac:CommodityClassification/cbc:ItemClassificationCode) es OBLIGATORIO en
     * cada línea de FAC/BOL/NC/ND. Antes de la vigencia era observación (OBS).
     * Solo se exige a documentos emitidos en/después de la fecha de vigencia.
     */
    private function checkProductCodeMandatory(array &$errors): void
    {
        if (!$this->effectiveFrom(self::EFFECTIVE_PRODUCT_CODE)) {
            return;
        }
        $lines = $this->xp->query('//cac:InvoiceLine | //cac:CreditNoteLine | //cac:DebitNoteLine');
        if ($lines === false) {
            return;
        }
        foreach ($lines as $line) {
            $code = $this->xp->evaluate('string(cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode)', $line);
            if (trim((string) $code) === '') {
                $errors[] = $this->err('3496', 'Debe consignar el Código de producto SUNAT en el detalle (obligatorio desde 2026-08-01).');
                return; // basta una línea sin código
            }
        }
    }

    /** Fecha de emisión del documento (YYYY-MM-DD), o null. */
    private function issueDate(): ?string
    {
        $d = trim((string) $this->xp->evaluate('string((//cbc:IssueDate)[1])'));
        return $d !== '' ? substr($d, 0, 10) : null;
    }

    /** ¿El documento se emitió en/después de $date (vigencia de una regla)? */
    private function effectiveFrom(string $date): bool
    {
        $issue = $this->issueDate();
        return $issue !== null && $issue >= $date; // ISO YYYY-MM-DD compara lexicográficamente
    }

    /**
     * 3294: la sumatoria de impuestos globales (los TaxSubtotal del TaxTotal
     * de cabecera) debe coincidir con el TaxAmount total.
     */
    private function checkTaxSum(array &$errors): void
    {
        // TaxTotal de cabecera = el que precede a LegalMonetaryTotal/RequestedMonetaryTotal.
        $taxAmount = $this->num('(//cac:TaxTotal/cbc:TaxAmount)[1]');
        $subtotalSum = $this->num('sum((//cac:TaxTotal)[1]/cac:TaxSubtotal/cbc:TaxAmount)');

        if ($taxAmount === null) {
            return;
        }
        if (abs($taxAmount - ($subtotalSum ?? 0)) > 0.01) {
            $errors[] = $this->err('3294');
        }
    }

    /**
     * 3305: debe consignarse el Total Precio de Venta (cbc:TaxInclusiveAmount)
     * en el total monetario.
     */
    private function checkTaxInclusiveAmount(array &$errors): void
    {
        $n = $this->xp->query('//cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount | //cac:RequestedMonetaryTotal/cbc:TaxInclusiveAmount');
        if ($n === false || $n->length === 0 || trim($n->item(0)->textContent) === '') {
            $errors[] = $this->err('3305');
        }
    }

    private function num(string $xpath): ?float
    {
        $r = @$this->xp->evaluate($xpath);
        if (is_float($r) || is_int($r)) {
            return (float) $r;
        }
        if (is_string($r) && $r !== '') {
            return (float) $r;
        }
        return null;
    }

    private function err(string $code, ?string $message = null): ValidationError
    {
        $msg = $message ?? $this->errors->message($code) ?? ('Regla SUNAT ' . $code);
        return new ValidationError($msg, 'SUNAT_OWN', $code);
    }
}
