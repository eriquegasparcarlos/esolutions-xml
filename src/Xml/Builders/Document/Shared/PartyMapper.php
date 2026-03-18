<?php

namespace App\ESolutions\Xml\Builders\Document\Shared;

use Modules\Document\Models\Document;

class PartyMapper
{
    public function buildSupplier(Document $doc, array $estJson): array
    {
        $company = $doc->company ?? null;

        return [
            'documentType' => $company->identity_document_type_id ?? '6',
            'documentNumber' => $company->number ?? '',
            'legalName' => $company->name ?? '',
            'commercialName' => $company->trade_name ?? ($company->name ?? ''),
            'address' => $this->buildSupplierAddress($estJson),
        ];
    }

    public function buildSupplierAddress(array $estJson): array
    {
        return [
            'addressTypeCode' => '-',
            'urbanization' => '-',
            'province' => (string)($estJson['province']['description'] ?? '-'),
            'department' => (string)($estJson['department']['description'] ?? '-'),
            'district' => (string)($estJson['district']['description'] ?? '-'),
            'ubigeo' => (string)($estJson['district_id'] ?? ($estJson['district']['id'] ?? '-')),
            'line' => (string)($estJson['address'] ?? '-'),
            'countryCode' => (string)($estJson['country_id'] ?? 'PE'),
        ];
    }

    public function buildCustomer(Document $doc, array $custJson): array
    {
        $customer = $doc->customer ?? null;

        $documentType = $customer->identity_document_type_id ?? ($custJson['identity_document_type_id'] ?? '');
        $documentNumber = $customer->number ?? ($custJson['number'] ?? '');
        $legalName = $customer->name ?? ($custJson['name'] ?? '-');

        return [
            'documentType' => (string)$documentType,
            'documentNumber' => (string)$documentNumber,
            'legalName' => (string)$legalName,
            'address' => null, // si tu cliente tiene ubigeo/dirección, llena aquí
        ];
    }

    public function buildSignature(Document $doc): array
    {
        $company = $doc->company ?? null;

        // IMPORTANTE: esto debe venir del payload (no del config),
        // tu SignedXml debe leer estos campos y reemplazar los nodos del XML.
        return [
            'ruc' => $company->number ?? '',
            'socialReason' => $company->name ?? '',
            'facturerId' => 'SIGN',
            'signatureUri' => 'SIGN',  // en XML se convierte a "#SIGN"
        ];
    }
}
