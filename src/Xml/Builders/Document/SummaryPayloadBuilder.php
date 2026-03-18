<?php

namespace App\ESolutions\Xml\Builders\Document;

use App\ESolutions\Xml\Builders\Contracts\PayloadBuilderContract;
use App\ESolutions\Xml\Builders\Document\Shared\PartyMapper;
use App\ESolutions\Xml\Builders\Support\AbstractPayloadBuilder;
use Modules\Document\Models\Document;

class SummaryPayloadBuilder extends AbstractPayloadBuilder implements PayloadBuilderContract
{
    protected PartyMapper $party;

    public function __construct(PartyMapper $party)
    {
        $this->party = $party;
    }

    public function supports(): string
    {
        return 'summary';
    }

    /**
     * RC normalmente NO se arma desde 1 Document, sino desde un set (varios docs del día).
     * Aquí dejamos un payload “base” para que tú lo uses como plantilla.
     */
    public function build(Document $doc, string $type): array
    {
        $estJson = $this->decodeJson($doc->establishment);
        $currency = $doc->currency_type_id ?: 'PEN';

        return [
            'ublExtensionsXml' => '',
            'currency' => $currency,

            'doc' => [
                'id' => 'RC-' . date('Ymd') . '-001',
                'issueDate' => date('Y-m-d'),
                'referenceDate' => optional($doc->date_of_issue)->format('Y-m-d') ?: (string)$doc->date_of_issue,
            ],

            'signature' => $this->party->buildSignature($doc),
            'supplier'  => $this->party->buildSupplier($doc, $estJson),

            /**
             * summaryLines: lista de documentos incluidos en el resumen
             * (boletas y/o notas según el caso).
             */
            'summaryLines' => [],
        ];
    }
}
