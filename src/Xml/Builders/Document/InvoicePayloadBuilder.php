<?php

namespace App\ESolutions\Xml\Builders\Document;

use App\ESolutions\Xml\Builders\Contracts\PayloadBuilderContract;
use App\ESolutions\Xml\Builders\Document\Shared\PartyMapper;
use App\ESolutions\Xml\Builders\Support\AbstractPayloadBuilder;
use App\ESolutions\Xml\Support\DocTypeNormalizer;
use Modules\Document\Models\Document;

class InvoicePayloadBuilder extends AbstractPayloadBuilder implements PayloadBuilderContract
{
    protected PartyMapper $party;

    public function __construct(PartyMapper $party)
    {
        $this->party = $party;
    }

    public function supports(): string
    {
        return 'invoice';
    }

    public function build(Document $doc, string $type): array
    {
        $normalized = DocTypeNormalizer::normalize($type);

        // Para boleta usamos este mismo builder (misma estructura)
        // Tu resolver debe mapear "boleta" -> invoice o registrar otro builder; abajo lo hacemos vía resolver.
        $estJson  = $this->decodeJson($doc->establishment);
        $custJson = $this->decodeJson($doc->customer);

        $currency = $doc->currency_type_id ?: 'PEN';

        $notes = $this->buildNotesFromLegends($doc);
        $docId = trim(($doc->series ?: '') . '-' . ($doc->number ?: ''));

        $payload = [
            'ublExtensionsXml' => '',

            'currency' => $currency,

            'doc' => [
                'id' => $docId,
                'series' => (string)($doc->series ?: ''),
                'number' => (string)($doc->number ?: ''),

                'issueDate' => optional($doc->date_of_issue)->format('Y-m-d') ?: (string)$doc->date_of_issue,
                'issueTime' => (string)($doc->time_of_issue ?: '00:00:00'),
                'dueDate' => '-',

                // Catálogo 01: 01 factura / 03 boleta
                'invoiceTypeCode' => (string)($doc->document_type_id ?: ''),

                // Catálogo 51: tipo operación (si no hay, default 0101)
                'operationTypeId' => (string)(
                $this->arrGet($doc->additional_data, 'operation_type_id')
                    ?: $this->arrGet($this->decodeJson($doc->data_json), 'operation_type_id')
                    ?: config('esolutions_xml.defaults.operation_type_id', '0101')
                ),

                'retentionEnabled' => (string)($this->arrGet($this->decodeJson($doc->retention), 'enabled', '0')),
            ],

            'notes' => $notes,

            'relatedDocuments' => $this->buildRelatedDocuments($doc),

            'signature' => $this->party->buildSignature($doc),
            'supplier'  => $this->party->buildSupplier($doc, $estJson),
            'customer'  => $this->party->buildCustomer($doc, $custJson),

            'delivery' => null,
            'detraction' => $this->buildDetraction($doc, $currency),
            'paymentTerms' => $this->buildPaymentTerms($doc, $currency),
            'installments' => $this->buildInstallments($doc, $currency),
            'retention' => $this->buildRetention($doc, $currency),

            'prepaidPayments' => [],
            'globalAllowances' => [],

            'taxTotal' => $this->buildHeaderTaxTotal($doc, $currency),
            'monetaryTotal' => $this->buildMonetaryTotal($doc, $currency),
            'lines' => $this->buildLines($doc, $currency),

            // útil para rules (si quieres)
            'meta' => [
                'normalizedType' => $normalized,
            ],
        ];

        return $payload;
    }

    protected function buildNotesFromLegends(Document $doc): array
    {
        $legends = $this->decodeJson($doc->legends);
        $notes = [];

        foreach ($legends as $l) {
            $code = (string)($l['code'] ?? '');
            $text = (string)($l['value'] ?? '');
            if ($code !== '' && $text !== '') {
                $notes[] = ['code' => $code, 'text' => $text];
            }
        }

        return $notes;
    }

    protected function buildRelatedDocuments(Document $doc): array
    {
        // Si luego mapeas guides/related, aquí:
        // - guides -> ind=1
        // - order -> ind=3
        // - additional -> ind=99
        // - prepayments -> ind=2 con docType 02/03
        return [];
    }

    protected function buildLines(Document $doc, string $currency): array
    {
        $lines = [];
        $i = 1;

        foreach (($doc->items ?? []) as $it) {
            $itemJson = $this->decodeJson($it->item);

            $qty = (string)($it->quantity ?? '0');
            $unitCode = (string)($it->unit_type_id ?? '');
            $lineExt = (string)($it->total_value ?? '0.00');
            $unitValue = (string)($it->unit_value ?? '0.00');
            $unitPrice = (string)($it->unit_price ?? '0.00');

            $taxSubtotals = [];
            if ((int)($it->has_igv ?? 0) === 1 && (string)$it->total_igv !== '0.00') {
                $taxSubtotals[] = [
                    'schemeId' => '1000',
                    'schemeName' => 'IGV',
                    'taxTypeCode' => 'VAT',
                    'taxableAmount' => (string)($it->total_base_igv ?? $lineExt),
                    'taxAmount' => (string)($it->total_igv ?? '0.00'),
                    'percent' => (string)($it->percentage_igv ?? '18.00'),
                    'exemptionReasonCode' => (string)($it->affectation_igv_type_id ?? '10'),
                ];
            }

            $lines[] = [
                'id' => (string)$i,
                'unitCode' => $unitCode,
                'quantity' => $qty,
                'currency' => (string)($it->currency_type_id_init ?? $currency),
                'lineExtensionAmount' => $lineExt,

                /**
                 * MUY IMPORTANTE (XSD):
                 * PricingReference debe ser UNO con N AlternativeConditionPrice,
                 * NO dos PricingReference separados.
                 *
                 * En tu blade, imprime 1 <cac:PricingReference> y adentro foreach.
                 */
                'pricingReference' => [
                    ['priceTypeCode' => '01', 'priceAmount' => $unitPrice],
                    // si gratuito, agrega ['priceTypeCode'=>'02', 'priceAmount'=>...]
                ],

                'allowances' => [],
                'taxTotal' => [
                    'currency' => (string)($it->currency_type_id_init ?? $currency),
                    'taxAmount' => (string)($it->total_taxes ?? $it->total_igv ?? '0.00'),
                    'subtotals' => $taxSubtotals,
                ],

                'item' => [
                    'description' => (string)($it->description ?? ($itemJson['description'] ?? $it->name ?? '')),
                    'sellersItemId' => (string)($itemJson['internal_id'] ?? ''),
                    'commodityCode' => (string)($itemJson['item_code'] ?? ''),
                    'properties' => [],
                ],

                'price' => [
                    'priceAmount' => $unitValue,
                ],
            ];

            $i++;
        }

        return $lines;
    }

    protected function buildHeaderTaxTotal(Document $doc, string $currency): array
    {
        $subtotals = [];

        if ((float)$doc->total_igv > 0) {
            $subtotals[] = [
                'schemeId' => '1000',
                'schemeName' => 'IGV',
                'taxTypeCode' => 'VAT',
                'taxableAmount' => (string)($doc->total_taxed ?? '0.00'),
                'taxAmount' => (string)($doc->total_igv ?? '0.00'),
            ];
        }

        return [
            'currency' => $currency,
            'taxAmount' => (string)($doc->total_taxes ?? $doc->total_igv ?? '0.00'),
            'subtotals' => $subtotals,
        ];
    }

    protected function buildMonetaryTotal(Document $doc, string $currency): array
    {
        return [
            'currency' => $currency,
            'lineExtensionAmount' => (string)($doc->subtotal ?? $doc->total_taxed ?? '0.00'),
            'taxInclusiveAmount' => (string)($doc->total ?? '0.00'),
            'allowanceTotalAmount' => (string)($doc->total_discount ?? '0.00'),
            'chargeTotalAmount' => (string)($doc->total_charge ?? '0.00'),
            'prepaidAmount' => (string)($doc->total_prepayment ?? '0.00'),
            'payableAmount' => (string)($doc->total ?? '0.00'),
        ];
    }

    protected function buildDetraction(Document $doc, string $currency): ?array
    {
        $det = $this->decodeJson($doc->detraction);
        if (empty($det)) return null;

        $bankAccount = (string)($det['bank_account'] ?? $det['bankAccount'] ?? '-');
        if ($bankAccount === '-' || $bankAccount === '') return null;

        return [
            'bankAccount' => $bankAccount,
            'paymentMeansCode' => (string)($det['paymentMeansCode'] ?? ''),
            'detractionCode' => (string)($det['detractionCode'] ?? ''),
            'percent' => (string)($det['percent'] ?? '0'),
            'amount' => (string)($det['amount'] ?? '0.00'),
            'currency' => (string)($det['currency'] ?? $currency),
        ];
    }

    protected function buildPaymentTerms(Document $doc, string $currency): ?array
    {
        if ((string)$doc->payment_condition_id === '01') {
            return [
                'id' => 'FormaPago',
                'paymentMeansId' => 'Contado',
            ];
        }

        return [
            'id' => 'FormaPago',
            'paymentMeansId' => 'Credito',
            'amount' => (string)($doc->total ?? '0.00'),
            'currency' => $currency,
        ];
    }

    protected function buildInstallments(Document $doc, string $currency): array
    {
        $out = [];

        foreach (($doc->payments ?? []) as $p) {
            $out[] = [
                'id' => 'FormaPago',
                'paymentMeansId' => 'Cuota',
                'amount' => (string)($p->payment ?? '0.00'),
                'currency' => (string)($p->currency_type_id ?? $currency),
                'dueDate' => (string)($p->date_of_payment ?? null),
            ];
        }

        return $out;
    }

    protected function buildRetention(Document $doc, string $currency): ?array
    {
        $ret = $this->decodeJson($doc->retention);
        if (empty($ret)) return null;

        if (empty($ret['amount']) || (float)$ret['amount'] <= 0) return null;

        return [
            'chargeIndicator' => false,
            'reasonCode' => (string)($ret['reasonCode'] ?? '62'),
            'multiplierFactorNumeric' => (string)($ret['percent'] ?? '0'),
            'amount' => (string)($ret['amount'] ?? '0.00'),
            'baseAmount' => (string)($ret['baseAmount'] ?? $doc->total ?? '0.00'),
            'currency' => (string)($ret['currency'] ?? $currency),
        ];
    }
}
