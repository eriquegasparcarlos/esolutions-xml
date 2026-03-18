<?php

namespace App\ESolutions\Xml\Builders\Document;

use App\ESolutions\Xml\Builders\Contracts\PayloadBuilderContract;
use App\ESolutions\Xml\Builders\Document\Shared\PartyMapper;
use App\ESolutions\Xml\Builders\Support\AbstractPayloadBuilder;
use Modules\Document\Models\Document;

class VoidedPayloadBuilder extends AbstractPayloadBuilder implements PayloadBuilderContract
{
    protected PartyMapper $party;

    public function __construct(PartyMapper $party)
    {
        $this->party = $party;
    }

    public function supports(): string
    {
        return 'voided';
    }

    /**
     * RA normalmente se arma con varios docs a anular.
     * Aquí dejamos un payload “base”.
     */
    public function build(Document $doc, string $type): array
    {
        $estJson = $this->decodeJson($doc->establishment);

        return [
            'ublExtensionsXml' => '',

            'doc' => [
                'id' => 'RA-' . date('Ymd') . '-001',
                'issueDate' => date('Y-m-d'),
                'referenceDate' => optional($doc->date_of_issue)->format('Y-m-d') ?: (string)$doc->date_of_issue,
            ],

            'signature' => $this->party->buildSignature($doc),
            'supplier'  => $this->party->buildSupplier($doc, $estJson),

            /**
             * voidedLines: lista de docs a dar de baja
             */
            'voidedLines' => [],
        ];
    }
}
