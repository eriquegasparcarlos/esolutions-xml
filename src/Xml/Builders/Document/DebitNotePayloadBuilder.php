<?php

namespace App\ESolutions\Xml\Builders\Document;

use App\ESolutions\Xml\Builders\Contracts\PayloadBuilderContract;
use App\ESolutions\Xml\Builders\Document\Shared\PartyMapper;
use App\ESolutions\Xml\Builders\Support\AbstractPayloadBuilder;
use Modules\Document\Models\Document;

class DebitNotePayloadBuilder extends AbstractPayloadBuilder implements PayloadBuilderContract
{
    protected PartyMapper $party;

    public function __construct(PartyMapper $party)
    {
        $this->party = $party;
    }

    public function supports(): string
    {
        return 'debit_note';
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

                // Catálogo 01 para ND suele ser "08" (depende de tu model)
                'noteTypeCode' => (string)($doc->document_type_id ?: '08'),
            ],

            'notes' => $this->buildNotesFromLegends($doc),
            'affectedDocument' => $this->buildAffectedDocument($doc),

            'signature' => $this->party->buildSignature($doc),
            'supplier'  => $this->party->buildSupplier($doc, $estJson),
            'customer'  => $this->party->buildCustomer($doc, $custJson),

            'taxTotal' => (new InvoicePayloadBuilder($this->party))->build($doc, 'invoice')['taxTotal'] ?? [],
            'monetaryTotal' => (new InvoicePayloadBuilder($this->party))->build($doc, 'invoice')['monetaryTotal'] ?? [],
            'lines' => (new InvoicePayloadBuilder($this->party))->build($doc, 'invoice')['lines'] ?? [],
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
        $related = $this->decodeJson($doc->related);
        $first = $related[0] ?? [];

        return [
            'docType' => (string)($first['doc_type'] ?? $first['document_type_id'] ?? ''),
            'docNumber' => (string)($first['number'] ?? $first['docNumber'] ?? ''),
            'reasonCode' => (string)($first['reason_code'] ?? ''),
            'reason' => (string)($first['description'] ?? ''),
        ];
    }
}
