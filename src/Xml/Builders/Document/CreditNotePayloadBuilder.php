<?php

namespace App\ESolutions\Xml\Builders\Document;

use App\ESolutions\Xml\Builders\Contracts\PayloadBuilderContract;
use App\ESolutions\Xml\Builders\Document\Shared\PartyMapper;
use App\ESolutions\Xml\Builders\Support\AbstractPayloadBuilder;
use Modules\Document\Models\Document;

class CreditNotePayloadBuilder extends AbstractPayloadBuilder implements PayloadBuilderContract
{
    protected PartyMapper $party;

    public function __construct(PartyMapper $party)
    {
        $this->party = $party;
    }

    public function supports(): string
    {
        return 'credit_note';
    }

    public function build(Document $doc, string $type): array
    {
        $estJson  = $this->decodeJson($doc->establishment);
        $custJson = $this->decodeJson($doc->customer);

        $currency = $doc->currency_type_id ?: 'PEN';
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

                // Catálogo 01 para NC suele ser "07" (pero depende de tu model)
                'noteTypeCode' => (string)($doc->document_type_id ?: '07'),
            ],

            'notes' => $this->buildNotesFromLegends($doc),

            /**
             * NC/ND: aquí debes enviar SIEMPRE el doc relacionado (según tu regla findRelatedDocType).
             * Ajusta buildAffectedDocument() según tu estructura real (doc->related, doc->guides, etc).
             */
            'affectedDocument' => $this->buildAffectedDocument($doc),

            'signature' => $this->party->buildSignature($doc),
            'supplier'  => $this->party->buildSupplier($doc, $estJson),
            'customer'  => $this->party->buildCustomer($doc, $custJson),

            'taxTotal' => $this->buildHeaderTaxTotal($doc, $currency),
            'monetaryTotal' => $this->buildMonetaryTotal($doc, $currency),
            'lines' => $this->buildLines($doc, $currency),
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

    protected function buildAffectedDocument(Document $doc): array
    {
        // Aquí debes mapear tu "doc relacionado" real
        // Ejemplo genérico:
        $related = $this->decodeJson($doc->related);
        $first = $related[0] ?? [];

        return [
            'docType' => (string)($first['doc_type'] ?? $first['document_type_id'] ?? ''), // 01/03
            'docNumber' => (string)($first['number'] ?? $first['docNumber'] ?? ''),       // F001-123
            'reasonCode' => (string)($first['reason_code'] ?? ''),                        // catálogo 09
            'reason' => (string)($first['description'] ?? ''),
        ];
    }

    protected function buildLines(Document $doc, string $currency): array
    {
        // igual a invoice, si tu template NC usa mismo formato de líneas
        return (new InvoicePayloadBuilder($this->party))->build($doc, 'invoice')['lines'] ?? [];
    }

    protected function buildHeaderTaxTotal(Document $doc, string $currency): array
    {
        return (new InvoicePayloadBuilder($this->party))->build($doc, 'invoice')['taxTotal'] ?? [
            'currency' => $currency,
            'taxAmount' => '0.00',
            'subtotals' => [],
        ];
    }

    protected function buildMonetaryTotal(Document $doc, string $currency): array
    {
        return (new InvoicePayloadBuilder($this->party))->build($doc, 'invoice')['monetaryTotal'] ?? [
            'currency' => $currency,
            'lineExtensionAmount' => '0.00',
            'taxInclusiveAmount' => '0.00',
            'allowanceTotalAmount' => '0.00',
            'chargeTotalAmount' => '0.00',
            'prepaidAmount' => '0.00',
            'payableAmount' => '0.00',
        ];
    }
}
