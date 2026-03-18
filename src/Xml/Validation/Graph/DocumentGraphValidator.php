<?php

namespace App\ESolutions\Xml\Validation\Graph;

use App\ESolutions\Xml\Errors\ValidationError;
use Illuminate\Support\Str;
use Modules\Document\Models\Document;

class DocumentGraphValidator
{
    /**
     * Retorna lista de ValidationError (no lanza excepción).
     * Úsalo antes de construir payload.
     *
     * @return ValidationError[]
     */
    public function validate(Document $doc): array
    {
        $errors = [];

        // --- Básicos ---
        if (empty($doc->document_type_id)) {
            $errors[] = new ValidationError('Falta document_type_id en documents.', 'DOC_TYPE_MISSING');
        }

        if (empty($doc->series) || empty($doc->number)) {
            $errors[] = new ValidationError('Falta series/number en documents.', 'SERIES_NUMBER_MISSING');
        }

        // Cliente: en tu registro existe relation "person"
        // y además documents.customer (json). Aceptamos cualquiera,
        // pero debe existir número + tipo doc.
        $customerData = $this->decodeJson($doc->customer_data);
        $customer = $doc->customer ?? null;

        $custDocType = $customer->identity_document_type_id ?? ($customerData['identity_document_type_id'] ?? null);
        $custNumber  = $customer->number ?? ($customerData['number'] ?? null);

        if (empty($custDocType) || empty($custNumber)) {
            $errors[] = new ValidationError('Cliente inválido: falta tipo/número de documento (customer o documents.customer_data).', 'CUSTOMER_INVALID');
        }

        // Items
        if (!$doc->relationLoaded('items') || $doc->items->count() === 0) {
            $errors[] = new ValidationError('Documento sin items (document_items).', 'ITEMS_EMPTY');
        }

        // --- Serie por tipo ---
        // document_type_id: 01 factura, 03 boleta, 07 NC, 08 ND
        $docType = (string) $doc->document_type_id;
        $series  = (string) $doc->series;

        // Serie debe ser 4 chars (ej F001 / B001 / FC01 etc según tu regla)
        if (strlen($series) !== 4) {
            $errors[] = new ValidationError('La serie debe tener 4 caracteres (ej: F001).', 'BR_SERIES_LEN');
        }

        // Reglas para Factura/Boleta
        if ($docType === '01' && !Str::startsWith($series, 'F')) {
            $errors[] = new ValidationError('Factura (01) requiere serie que empiece con F.', 'BR_SERIES_FACTURA');
        }
        if ($docType === '03' && !Str::startsWith($series, 'B')) {
            $errors[] = new ValidationError('Boleta (03) requiere serie que empiece con B.', 'BR_SERIES_BOLETA');
        }

        // --- NC/ND deben tener documento afectado (notes table) ---
        if (in_array($docType, ['07', '08'], true)) {
            // Suponiendo relación $doc->note (notes.document_id)
            $note = $doc->note ?? null;

            if (!$note) {
                $errors[] = new ValidationError('NC/ND requiere registro en notes (relación note).', 'NOTE_MISSING');
            } else {
                if (empty($note->affected_document_id) && empty($note->data_affected_document)) {
                    $errors[] = new ValidationError('NC/ND requiere affected_document_id o data_affected_document.', 'AFFECTED_DOC_MISSING');
                }

                // Determinar tipo de doc afectado para validar serie de NC/ND
                $affected = null;

                if (!empty($note->data_affected_document)) {
                    $affected = $this->decodeJson($note->data_affected_document);
                }

                $affectedDocType = $affected['document_type_id'] ?? null; // o 'document_type_id' según tu JSON
                // fallback si existe relación affectedDocument:
                if (!$affectedDocType && isset($note->affectedDocument) && $note->affectedDocument) {
                    $affectedDocType = (string) $note->affectedDocument->document_type_id;
                }

                if ($affectedDocType === '01' && !Str::startsWith($series, 'F')) {
                    $errors[] = new ValidationError('NC/ND de factura debe tener serie que empiece con F.', 'BR_SERIES_NOTE_FROM_FACTURA');
                }
                if ($affectedDocType === '03' && !Str::startsWith($series, 'B')) {
                    $errors[] = new ValidationError('NC/ND de boleta debe tener serie que empiece con B.', 'BR_SERIES_NOTE_FROM_BOLETA');
                }
            }
        }

        return $errors;
    }

    private function decodeJson($value): array
    {
        if (is_array($value)) return $value;
        if (!is_string($value) || trim($value) === '') return [];

        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : [];
    }
}
