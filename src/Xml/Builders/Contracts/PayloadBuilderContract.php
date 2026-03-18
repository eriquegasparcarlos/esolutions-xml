<?php

namespace App\ESolutions\Xml\Builders\Contracts;

use Modules\Document\Models\Document;

interface PayloadBuilderContract
{
    /**
     * Retorna el tipo normalizado que soporta este builder
     * (invoice, credit_note, debit_note, summary, voided, etc.)
     */
    public function supports(): string;

    /**
     * Construye el payload para el template XML.
     */
    public function build(Document $doc, string $type): array;
}
