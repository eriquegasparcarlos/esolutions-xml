<?php

namespace ESolutions\Xml\Payload;

/**
 * Traduce un payload en español (estilo Greenter, camelCase) al contrato
 * interno del generador. Permite exponer el paquete como API con nombres de
 * campo familiares para el ecosistema peruano, SIN tocar las plantillas ni el
 * validador (que siguen usando el contrato interno).
 *
 * Cubre factura/boleta y notas (07/08). Los campos no provistos toman defaults
 * seguros; los totales se toman de 'totales' o se derivan de las líneas.
 *
 * Ejemplo mínimo:
 *   [
 *     'tipoDoc' => '01', 'serie' => 'F001', 'correlativo' => '123',
 *     'fechaEmision' => '2026-07-15', 'horaEmision' => '10:30:00',
 *     'tipoMoneda' => 'PEN', 'formaPago' => 'Contado', 'tipoOperacion' => '0101',
 *     'company' => ['ruc'=>'20123456789','razonSocial'=>'MI EMPRESA SAC',
 *                   'address'=>['ubigeo'=>'150101','departamento'=>'LIMA',
 *                   'provincia'=>'Lima','distrito'=>'Lima','direccion'=>'AV. LIMA 123']],
 *     'client'  => ['tipoDoc'=>'6','numDoc'=>'20100070970','rznSocial'=>'CLIENTE SAC'],
 *     'details' => [['descripcion'=>'Servicio','cantidad'=>1,'unidad'=>'NIU',
 *                    'mtoValorUnitario'=>100,'tipAfeIgv'=>'10','porcentajeIgv'=>18]],
 *     'legends' => [['code'=>'1000','value'=>'SON CIEN…']],
 *   ]
 */
class EsPayloadMapper
{
    public function toInternal(array $es): array
    {
        // Acepta tanto la raíz plana como envuelta en 'comprobante'/'documento'.
        $d = $es['comprobante'] ?? $es['documento'] ?? $es;

        $moneda = $d['tipoMoneda'] ?? $d['moneda'] ?? 'PEN';
        $company = $d['company'] ?? $d['emisor'] ?? [];
        $client = $d['client'] ?? $d['cliente'] ?? [];
        $cAddr = $company['address'] ?? $company['establecimiento'] ?? [];
        $items = $d['details'] ?? $d['items'] ?? [];

        $lines = array_map(fn ($it) => $this->mapLine($it, $moneda), $items);
        $totales = $d['totales'] ?? [];

        $tipoDoc = (string) ($d['tipoDoc'] ?? $d['tipoDocumento'] ?? $d['tipo_documento'] ?? '01');
        $serie = $d['serie'] ?? '';
        $numero = $d['correlativo'] ?? $d['numero'] ?? '';
        $formaPago = strtolower((string) ($d['formaPago'] ?? $d['formaPagoTipo'] ?? 'contado'));

        // Suma por afectación para los totales (si no vienen en 'totales').
        $sumAfect = fn (array $a) => array_sum(array_map(
            fn ($l) => in_array($l['affectation_igv_type_id'], $a, true) ? $l['total_value'] : 0,
            $lines
        ));
        $sum = fn (string $k) => array_sum(array_map(fn ($l) => $l[$k], $lines));

        $totalIgv = $totales['igv'] ?? $totales['mtoIGV'] ?? $sum('total_igv');
        $totalIsc = $totales['isc'] ?? $sum('total_isc');
        $totalIcbper = $totales['icbper'] ?? $sum('total_plastic_bag_taxes');
        $totalValue = $totales['valorVenta'] ?? $sum('total_value');
        $totalTaxes = round($totalIgv + $totalIsc + $totalIcbper, 2);

        $doc = [
            'id' => trim("$serie-$numero", '-'),
            'date_of_issue' => $d['fechaEmision'] ?? $d['fecha_emision'] ?? null,
            'time_of_issue' => $d['horaEmision'] ?? $d['hora_emision'] ?? '00:00:00',
            'date_of_due' => $d['fechaVencimiento'] ?? null,
            'operation_type_id' => (string) ($d['tipoOperacion'] ?? '0101'),
            'operation_type_is_exportation' => (bool) ($d['esExportacion'] ?? false),
            'document_type_id' => $tipoDoc,
            'currency_type_id' => $moneda,
            'purchase_order' => $d['ordenCompra'] ?? null,
            'payment_condition_id' => ($formaPago === 'credito') ? '02' : '01',
            'signature_uri' => 'SIGN',
            'signature_note' => 'SIGN',

            'company_identity_document_type_id' => '6',
            'company_number' => (string) ($company['ruc'] ?? ''),
            'company_name' => (string) ($company['razonSocial'] ?? $company['razon_social'] ?? ''),
            'company_trade_name' => $company['nombreComercial'] ?? null,
            'establishment' => [
                'code' => (string) ($cAddr['codLocal'] ?? $cAddr['code'] ?? '0000'),
                'location_id' => (string) ($cAddr['ubigeo'] ?? $cAddr['ubigueo'] ?? ''),
                'urbanization' => $cAddr['urbanizacion'] ?? null,
                'province' => $cAddr['provincia'] ?? '-',
                'department' => $cAddr['departamento'] ?? '-',
                'district' => $cAddr['distrito'] ?? '-',
                'address' => $cAddr['direccion'] ?? null,
                'country_id' => $cAddr['codigoPais'] ?? 'PE',
            ],

            'customer_identity_document_type_id' => (string) ($client['tipoDoc'] ?? $client['tipoDocumento'] ?? '6'),
            'customer_number' => (string) ($client['numDoc'] ?? $client['numero'] ?? ''),
            'customer_name' => (string) ($client['rznSocial'] ?? $client['nombre'] ?? ''),
            'customer_address' => [
                'location_id' => $client['address']['ubigeo'] ?? null,
                'address' => $client['address']['direccion'] ?? null,
                'country_id' => $client['address']['codigoPais'] ?? 'PE',
            ],

            'legends' => array_map(
                fn ($l) => ['code' => (string) ($l['code'] ?? $l['codigo']), 'value' => (string) ($l['value'] ?? $l['valor'])],
                $d['legends'] ?? $d['leyendas'] ?? []
            ),
            'guides' => [], 'related' => [],
            'prepayments' => $this->mapPrepayments($d['anticipos'] ?? []),
            'charges' => $this->mapCharges($d['cargos'] ?? []),
            'discounts' => $this->mapDiscounts($d['descuentos'] ?? []),
            'fee' => $this->mapFee($d['cuotas'] ?? [], $moneda),
            'fee_total' => (float) array_sum(array_map(fn ($c) => (float) ($c['monto'] ?? 0), $d['cuotas'] ?? [])),
            'detraction' => $this->mapDetraction($d['detraccion'] ?? null),
            'retention' => $this->mapRetention($d['retencion'] ?? null),
            'perception' => $this->mapPerception($d['percepcion'] ?? null),

            'total_taxes' => $totalTaxes,
            'total_isc' => (float) $totalIsc,
            'total_base_isc' => (float) $sum('total_base_isc'),
            'total_taxed' => (float) ($totales['gravado'] ?? $sumAfect(['10'])),
            'total_igv' => (float) $totalIgv,
            'total_unaffected_init' => (float) ($totales['inafecto'] ?? $sumAfect(['30'])),
            'total_prepayment_unaffected' => 0.0,
            'total_exonerated_init' => (float) ($totales['exonerado'] ?? $sumAfect(['20'])),
            'total_prepayment_exonerated' => 0.0,
            'total_free' => (float) ($totales['gratuito'] ?? 0),
            'total_igv_free' => 0.0,
            'total_exportation_init' => (float) ($totales['exportacion'] ?? $sumAfect(['40'])),
            'total_other_taxes' => (float) $sum('total_other_taxes'),
            'total_base_other_taxes' => 0.0,
            'total_plastic_bag_taxes' => (float) $totalIcbper,
            'total_value' => (float) $totalValue,
            'total_discount_no_base' => (float) ($totales['descuentos'] ?? 0),
            'total_charge' => (float) ($totales['cargos'] ?? array_sum(array_map(fn ($c) => (float) ($c['monto'] ?? 0), $d['cargos'] ?? []))),
            'total_prepayment' => (float) ($totales['anticipos'] ?? array_sum(array_map(fn ($a) => (float) ($a['montoBase'] ?? $a['base'] ?? 0), $d['anticipos'] ?? []))),
            'total_payable' => (float) ($totales['total'] ?? $totales['mtoImpVenta'] ?? round($totalValue + $totalTaxes, 2)),

            'items' => $lines,
        ];

        // Notas de crédito / débito
        if (in_array($tipoDoc, ['07', '08'], true)) {
            $af = $d['documentoAfectado'] ?? $d['docAfectado'] ?? [];
            $doc['affected_document'] = [
                'id' => (string) ($af['id'] ?? ''),
                'document_type_id' => (string) ($af['tipoDoc'] ?? '01'),
                'date_of_issue' => $af['fechaEmision'] ?? null,
            ];
            $doc['note_type_id'] = (string) ($d['codMotivo'] ?? $d['tipoNota'] ?? '01');
            $doc['note_description'] = $d['desMotivo'] ?? $d['motivo'] ?? null;
        }

        return ['document' => $doc];
    }

    private function mapLine(array $it, string $moneda): array
    {
        $afect = (string) ($it['tipAfeIgv'] ?? $it['afectacionIgv'] ?? $it['afectacion_igv'] ?? '10');
        $qty = (float) ($it['cantidad'] ?? 1);
        $unitValue = (float) ($it['mtoValorUnitario'] ?? $it['valorUnitario'] ?? $it['valor_unitario'] ?? 0);
        $valor = round($unitValue * $qty, 2);
        $pctIgv = (float) ($it['porcentajeIgv'] ?? ($afect === '10' ? 18 : 0));
        $igv = isset($it['igv']) ? (float) $it['igv'] : ($afect === '10' ? round($valor * $pctIgv / 100, 2) : 0.0);
        $gratuito = ($afect === '21' || ($it['gratuito'] ?? false));
        $icbper = (float) ($it['icbper'] ?? 0);
        $isc = (float) ($it['isc'] ?? 0);

        return [
            'unit_type_id' => (string) ($it['unidad'] ?? 'NIU'),
            'quantity' => $qty,
            'total_value' => $gratuito ? 0.0 : $valor,
            'price_type_id' => $gratuito ? '02' : '01',
            'price_amount_01' => $gratuito ? 0.0 : ($afect === '10' ? round($unitValue * (1 + $pctIgv / 100), 6) : $unitValue),
            'price_amount_02' => $unitValue,
            'unit_value' => $unitValue,
            'charges' => [], 'discounts' => [],
            'total_taxes' => round($igv + $isc + $icbper, 2),
            'total_isc' => $isc, 'total_base_isc' => $isc > 0 ? $valor : 0,
            'percentage_isc' => (float) ($it['porcentajeIsc'] ?? 0), 'system_isc_type_id' => $it['tipoSistemaIsc'] ?? null,
            'total_base_igv' => $valor, 'total_igv' => $igv, 'percentage_igv' => $pctIgv,
            'affectation_igv_type_id' => $afect,
            'total_other_taxes' => 0, 'total_base_other_taxes' => 0, 'percentage_other_taxes' => 0,
            'total_plastic_bag_taxes' => $icbper, 'amount_plastic_bag_taxes' => (float) ($it['factorIcbper'] ?? ($icbper > 0 ? 0.5 : 0)),
            'name_parts' => is_array($it['descripcion'] ?? null) ? $it['descripcion'] : [(string) ($it['descripcion'] ?? '')],
            'internal_id' => $it['codProducto'] ?? $it['codigo'] ?? null,
            'item_code' => $it['codProductoSunat'] ?? null,
            'accommodation_attributes' => [], 'attributes' => [],
        ];
    }

    /** anticipos español → prepayments interno (AdditionalDocumentReference cat. 12). */
    private function mapPrepayments(array $as): array
    {
        return array_map(fn ($a) => [
            'number' => (string) ($a['nroDocumento'] ?? $a['numero'] ?? trim(($a['serie'] ?? '') . '-' . ($a['correlativo'] ?? ''), '-')),
            'document_type_id' => (string) ($a['tipoDoc'] ?? $a['tipoDocumento'] ?? '02'),
            'total' => (float) ($a['monto'] ?? $a['total'] ?? 0),
        ], $as);
    }

    /** cargos español → charges interno. */
    private function mapCharges(array $cs): array
    {
        return array_map(fn ($x) => [
            'charge_type_id' => (string) ($x['codTipo'] ?? $x['tipo'] ?? '50'),
            'factor' => (float) ($x['factor'] ?? 0),
            'amount' => (float) ($x['monto'] ?? 0),
            'base' => (float) ($x['montoBase'] ?? $x['base'] ?? 0),
        ], $cs);
    }

    /** percepción a nivel comprobante español → perception interno. */
    private function mapPerception(?array $p): ?array
    {
        if (!$p) return null;
        return [
            'code' => (string) ($p['codTipo'] ?? $p['codigo'] ?? '51'),
            'percentage' => (float) ($p['porcentaje'] ?? 0),
            'amount' => (float) ($p['monto'] ?? 0),
            'base' => (float) ($p['montoBase'] ?? $p['base'] ?? 0),
        ];
    }

    private function mapDiscounts(array $ds): array
    {
        return array_map(fn ($x) => [
            'discount_type_id' => (string) ($x['codTipo'] ?? $x['tipo'] ?? '02'),
            'factor' => (float) ($x['factor'] ?? 0),
            'amount' => (float) ($x['monto'] ?? 0),
            'base' => (float) ($x['montoBase'] ?? $x['base'] ?? 0),
        ], $ds);
    }

    private function mapFee(array $cuotas, string $moneda): array
    {
        return array_map(fn ($c) => [
            'currency_type_id' => $moneda,
            'amount' => (float) ($c['monto'] ?? 0),
            'date_of_due' => $c['fechaPago'] ?? $c['fechaVencimiento'] ?? null,
        ], $cuotas);
    }

    private function mapDetraction(?array $d): ?array
    {
        if (!$d) return null;
        return [
            'payment_method_type_id' => (string) ($d['codMedioPago'] ?? '001'),
            'bank_account' => $d['cuentaBanco'] ?? null,
            'detraction_type_id' => (string) ($d['codBienDetraccion'] ?? $d['codigo'] ?? ''),
            'percentage' => (float) ($d['porcentaje'] ?? 0),
            'amount_pen' => (float) ($d['monto'] ?? 0),
        ];
    }

    private function mapRetention(?array $r): ?array
    {
        if (!$r) return null;
        return [
            'code' => (string) ($r['codigo'] ?? ''),
            'percentage' => (float) ($r['porcentaje'] ?? 0),
            'amount' => (float) ($r['monto'] ?? 0),
            'base' => (float) ($r['base'] ?? 0),
        ];
    }
}
