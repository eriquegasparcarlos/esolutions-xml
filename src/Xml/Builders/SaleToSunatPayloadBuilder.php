<?php

namespace App\ESolutions\Xml\Builders;

use App\ESolutions\Xml\Support\UblTextSanitizer;
use Illuminate\Support\Facades\Log;
use Modules\Document\Models\Document;
use Modules\Document\Models\DocumentItem;

class SaleToSunatPayloadBuilder
{
    public function build(Document $doc): array
    {
        $company = $doc->company;
        $customer = $doc->customer;
        $invoice = $doc->invoice;
        $currencyTypeId = $doc->currency_type_id;
        $operationTypeId = $invoice->operation_type_id;
        $legends = $doc->legends;
        $docId = $doc->series . '-' . $doc->number;
        $fee = $this->buildFee($doc);
        $operationType = $invoice->operationType;
        $currencyType = $doc->currencyType;
        $dateOfIssue = $doc->date_of_issue->format('Y-m-d');
        $dateOfDue = optional($invoice->date_of_due)->format('Y-m-d');

        Log::info($legends);
//        $codeLegend = 1000;
//        $newLegend = [
//            'code' => $codeLegend,
//            'value' => NumberToLetterHelper::convertToLetter($doc->total) . ' ' . $currencyType->description,
//        ];
//
//        $legendsByCode = [];
//        foreach ($legends as $l) {
//            if (isset($l['code'])) {
//                $legendsByCode[$l['code']] = $l;
//            }
//        }
//        $legendsByCode[$codeLegend] = $newLegend;
//        $legends = array_values($legendsByCode);

        return [
            'document' => [
                'id' => $docId,
                'company_id' => $doc->company_id,
                'establishment_id' => $doc->establishment_id,
                'soap_type_id' => $doc->company->soap_type_id,
                'signature_uri' => config('esolutions_xml.signing.signature_uri', 'SIGN'),
                'signature_note' => config('esolutions_xml.signing.signature_note', 'SIGN'),
                'operation_type_id' => $operationTypeId,
                'operation_type_is_exportation' => $operationType->is_exportation,
                'currency_type_id' => $currencyTypeId,
                'currency_type_name' => $currencyType->description,
                'currency_type_symbol' => $currencyType->symbol,
                'date_of_issue' => $dateOfIssue,
                'time_of_issue' => $doc->time_of_issue,
                'date_of_due' => $dateOfDue,
                'document_type_id' => $doc->document_type_id,
                'filename' => $doc->filename,
                'legends' => $legends,
                'purchase_order' => $doc->purchase_order,
                'guides' => [],
                'related' => [],
                'prepayments' => [],
                'company_name' => $company->name,
                'company_identity_document_type_id' => $company->identity_document_type_id,
                'company_number' => $company->number,
                'company_trade_name' => $company->trade_name,
                'establishment' => $this->buildEstablishment($doc),
                'customer_name' => $customer->name,
                'customer_identity_document_type_id' => $customer->identity_document_type_id,
                'customer_number' => $customer->number,
                'customer_address' => $this->buildCustomerAddress($customer),
                'payment_condition_id' => $doc->payment_condition_id,
                'fee' => $fee,
                'fee_total' => 0,
                'detraction' => $this->buildDetraction($doc),
                'perception' => $this->buildPerception($doc),
                'retention' => $this->buildRetention($doc),
                'charges' => $this->buildCharges($doc),
                'discounts' => $this->buildDiscounts($doc),
                'total_prepayment_taxed' => $doc->total_prepayment_taxed,
                'total_prepayment_exonerated' => $doc->total_prepayment_exonerated,
                'total_prepayment_unaffected' => $doc->total_prepayment_unaffected,
                'total_prepayment' => $doc->total_prepayment,
                'total_charge' => $doc->total_charge,
                'total_discount_base' => $doc->total_discount_base,
                'total_discount_no_base' => $doc->total_discount_no_base,
                'total_discount' => $doc->total_discount,
                'total_exportation_init' => $doc->total_exportation_init,
                'total_exportation' => $doc->total_exportation,
                'total_free' => $doc->total_free,
                'total_taxed_init' => $doc->total_taxed_init,
                'total_taxed' => $doc->total_taxed,
                'total_unaffected_init' => $doc->total_unaffected_init,
                'total_unaffected' => $doc->total_unaffected,
                'total_exonerated_init' => $doc->total_exonerated_init,
                'total_exonerated' => $doc->total_exonerated,
                'total_igv' => $doc->total_igv,
                'total_igv_free' => $doc->total_igv_free,
                'total_base_isc' => $doc->total_base_isc,
                'total_isc' => $doc->total_isc,
                'total_base_other_taxes' => $doc->total_base_other_taxes,
                'total_other_taxes' => $doc->total_other_taxes,
                'total_plastic_bag_taxes' => $doc->total_plastic_bag_taxes,
                'total_taxes' => $doc->total_taxes,
                'total_value' => $doc->total_value,
                'subtotal' => $doc->subtotal,
                'total' => $doc->total,
                'total_payable' => $doc->total,
                'items' => $this->buildLines($doc),
            ],
        ];
    }

    private function buildEstablishment(Document $doc): array
    {
        $establishment = $doc->establishment;
        return [
            'code' => $establishment->code,
            'location_id' => $establishment->district_id,
            'urbanization' => $establishment->urbanization,
            'province' => $establishment->province->description,
            'department' => $establishment->department->description,
            'district' => $establishment->district->description,
            'address' => $establishment->address,
            'country_id' => $establishment->country_id,
        ];
    }

    private function buildCustomerAddress($customer): array
    {
        return [
            'location_id' => $customer->district_id,
            'address' => $customer->address,
            'country_id' => $customer->country_id,
        ];
    }

    private function buildDetraction(Document $doc): ?array
    {
        $det = $this->decodeJson($doc->detraction);
        if (count($det) === 0) return null;
        return [
            'bank_account' => $det['bank_account'],
            'payment_method_type_id' => $det['payment_method_type_id'],
            'detraction_type_id' => $det['detraction_type_id'],
            'percentage' => $det['percentage'],
            'amount_pen' => $det['amount_pen'],
            'amount_usd' => $det['amount_usd'],
        ];
    }

    private function buildPerception(Document $doc): ?array
    {
        $per = $this->decodeJson($doc->perception);
        if (count($per) === 0) return null;
        return [
            'code' => $per['code'],
            'percentage' => $per['percentage'],
            'amount' => $per['amount'],
            'base' => $per['base'],
        ];
    }

    private function buildRetention(Document $doc): ?array
    {
        $ret = $this->decodeJson($doc->retention);
        if (count($ret) === 0) return null;
        return [
            'code' => $ret['code'],
            'percentage' => $ret['percentage'],
            'amount' => $ret['amount'],
            'base' => $ret['base'],
        ];
    }

    private function buildCharges(Document $doc): ?array
    {
        $charges = [];
        $chs = $this->decodeJson($doc->charges);
        foreach ($chs as $ch) {
            $charges[] = [
                'charge_type_id' => $ch['charge_type_id'],
                'factor' => $ch['factor'],
                'amount' => $ch['amount'],
                'base' => $ch['base'],
            ];
        }

        return $charges;
    }

    private function buildDiscounts(Document $doc): ?array
    {
        $discounts = [];
        $ds = $this->decodeJson($doc->discounts);
        foreach ($ds as $d) {
            $discounts[] = [
                'discount_type_id' => $d['discount_type_id'],
                'factor' => $d['factor'],
                'amount' => $d['amount'],
                'base' => $d['base'],
            ];
        }

        return $discounts;
    }

    private function buildFee(Document $doc): array
    {
        $out = [];
        foreach ($doc->fee as $p) {
            $out[] = [
                'amount' => $p->amount,
                'currency_type_id' => $doc->currency_type_id,
                'date_of_due' => $p->date,
            ];
        }
        return $out;
    }

    private function buildLines(Document $doc): array
    {
        $lines = [];
        foreach ($doc->items as $it) {
            $nameParts = [];
            if ($it->item->is_item_free) {
                $nameParts[] = $it->name;
            } else {
                if (is_null($it->name)) {
                    $name = $it->item->name;
                } else {
                    $name = $it->name;
                }
                $descHtml = $it->description ?? '';
                $plain = UblTextSanitizer::htmlToPlain($descHtml);
                $combined = trim($name) !== '' ? ($name . ' — ' . $plain) : $plain;
                $nameParts = UblTextSanitizer::chunkByLen($combined, 230);
            }

            $lines[] = [
                'id' => $it->id,
                'internal_id' => $it->item->internal_id,
                'item_code' => $it->item->item_code,
                'unit_type_id' => $it->unit_type_id,
                'quantity' => $it->quantity,
                'quantity_factor' => $it->quantity_factor,
                'name' => $it->name,
                'description' => $it->description,
                'name_parts' => $nameParts,
                'has_igv' => $it->has_igv,
                'affectation_igv_type_id' => $it->affectation_igv_type_id,
                'unit_value_init' => $it->unit_value_init,
                'unit_value' => $it->unit_value,
                'price_type_id' => $it->price_type_id,
                'price_amount_01' => 0,
                'price_amount_02' => 0,
                'unit_price_init' => $it->unit_price_init,
                'unit_price' => $it->unit_price,

                'total_base_igv' => $it->total_base_igv,
                'percentage_igv' => $it->percentage_igv,
                'total_igv' => $it->total_igv,

                'system_isc_type_id' => $it->system_isc_type_id,
                'total_base_isc' => $it->total_base_isc,
                'percentage_isc' => $it->percentage_isc,
                'total_isc' => $it->total_isc,

                'total_base_other_taxes' => $it->total_base_other_taxes,
                'percentage_other_taxes' => $it->percentage_other_taxes,
                'total_other_taxes' => $it->total_other_taxes,

                'total_plastic_bag_taxes' => $it->total_plastic_bag_taxes,

                'total_taxes' => $it->total_taxes,
                'total_value' => $it->total_value,
                'total_charge' => $it->total_charge,
                'total_discount' => $it->total_discount,
                'total' => $it->total,

                'charges' => $this->buildItemCharges($it),
                'discounts' => $this->buildItemDiscounts($it),
                'attributes' => $this->buildItemAttributes($it),
                'accommodation_attributes' => $this->buildItemAccommodationAttributes($it),
            ];
        }

        return $lines;
    }

    private function buildItemCharges(DocumentItem $it): ?array
    {
        $charges = [];
        $chs = $this->decodeJson($it->charges);
        foreach ($chs as $ch) {
            $charges[] = [
                'charge_type_id' => $ch['charge_type_id'],
                'factor' => $ch['factor'],
                'amount' => $ch['amount'],
                'base' => $ch['base'],
            ];
        }

        return $charges;
    }

    private function buildItemDiscounts(DocumentItem $it): ?array
    {
        $discounts = [];
        $ds = $this->decodeJson($it->discounts);
        foreach ($ds as $d) {
            $discounts[] = [
                'discount_type_id' => $d['discount_type_id'],
                'factor' => $d['factor'],
                'amount' => $d['amount'],
                'base' => $d['base'],
            ];
        }

        return $discounts;
    }

    private function buildItemAttributes(DocumentItem $it): ?array
    {
        $newAttrs = [];
        $attrs = $this->decodeJson($it->attributes);
        foreach ($attrs as $attr) {
            $newAttrs[] = [
                'attribute_type_id' => $attr['attribute_type_id'],
                'name' => $attr['name'],
                'value' => $attr['value'],
                'value_qualifier' => $this->arrGet($attr, 'value_qualifier'),
                'value_quantity' => $this->arrGet($attr, 'value_quantity'),
                'period' => [
                    'start_date' => $attr['start_date'],
                    'start_time' => $attr['start_time'],
                    'end_date' => $attr['end_date'],
                    'duration_days' => $attr['duration_days'],
                ],
            ];
        }

        return $newAttrs;
    }

    private function buildItemAccommodationAttributes(DocumentItem $it): ?array
    {
        $newAttrs = [];
        $attrs = $this->decodeJson($it->accommodation_attributes);
        foreach ($attrs as $attr) {
            $newAttrs[] = [
                'attribute_type_id' => $attr['attribute_type_id'],
                'name' => $attr['name'],
                'value' => $attr['value'],
                'period' => [
                    'start_date' => $attr['start_date'],
                    'end_date' => $attr['end_date'],
                    'duration_days' => $attr['duration_days'],
                ],
            ];
        }

        return $newAttrs;
    }

    private function decodeJson($value): array
    {
        if (is_array($value)) return $value;
        if (!is_string($value) || trim($value) === '') return [];
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : [];
    }

    private function arrGet($arr, string $key, $default = null)
    {
        if (!is_array($arr)) return $default;
        return array_key_exists($key, $arr) ? $arr[$key] : $default;
    }
}
