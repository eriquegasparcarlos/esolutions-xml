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
        $tipoDoc = strtolower((string) ($d['tipoDoc'] ?? $d['tipoDocumento'] ?? $d['tipo_documento'] ?? '01'));

        return match ($tipoDoc) {
            '04' => $this->mapPurchaseSettlement($d),
            '09' => $this->mapDespatch($d),
            '31' => $this->mapDespatchCarrier($d),
            'rc' => $this->mapSummary($d),
            'ra' => $this->mapVoided($d),
            // Reversión: baja de retenciones/percepciones. Mismo XML que RA,
            // solo cambia el default del tipo de doc por línea.
            'rr' => $this->mapVoided($d, '20'),
            '20' => $this->mapRetentionDoc($d),
            '40' => $this->mapPerceptionDoc($d),
            default => $this->mapInvoiceFamily($d),
        };
    }

    /**
     * Liquidación de compra (04, SelfBilledInvoice). La empresa (emisor, con
     * RUC) compra a un proveedor sin RUC. Español → contrato interno.
     */
    private function mapPurchaseSettlement(array $d): array
    {
        $moneda = $d['tipoMoneda'] ?? $d['moneda'] ?? 'PEN';
        $company = $d['company'] ?? $d['emisor'] ?? [];
        $supplier = $d['supplier'] ?? $d['proveedor'] ?? $d['vendedor'] ?? [];
        $cAddr = $company['address'] ?? $company['establecimiento'] ?? [];
        $sAddr = $supplier['address'] ?? $supplier['domicilio'] ?? [];
        $op = $d['operacion'] ?? $d['lugarOperacion'] ?? $d['operation'] ?? [];
        $items = $d['details'] ?? $d['items'] ?? [];

        $lines = array_map(fn ($it) => $this->mapLine($it, $moneda), $items);
        $totales = $d['totales'] ?? [];
        $sum = fn (string $k) => array_sum(array_map(fn ($l) => $l[$k], $lines));
        $sumAfect = fn (array $a) => array_sum(array_map(
            fn ($l) => in_array($l['affectation_igv_type_id'], $a, true) ? $l['total_value'] : 0,
            $lines
        ));

        $serie = $d['serie'] ?? '';
        $numero = $d['correlativo'] ?? $d['numero'] ?? '';

        $totalIgv = $totales['igv'] ?? $totales['mtoIGV'] ?? $sum('total_igv');
        $totalValue = $totales['valorVenta'] ?? $sum('total_value');
        $totalTaxed = $totales['gravado'] ?? $sumAfect(['10']);
        $totalExonerated = $totales['exonerado'] ?? $sumAfect(['20']);
        $totalUnaffected = $totales['inafecto'] ?? $sumAfect(['30']);
        $total = $totales['total'] ?? round($totalValue + $totalIgv, 2);

        return ['document' => [
            'id' => trim("$serie-$numero", '-'),
            'date_of_issue' => $d['fechaEmision'] ?? $d['fecha_emision'] ?? null,
            'time_of_issue' => $d['horaEmision'] ?? $d['hora_emision'] ?? '00:00:00',
            'operation_type_id' => (string) ($d['tipoOperacion'] ?? '0501'),
            'document_type_id' => '04',
            'currency_type_id' => $moneda,
            'payment_condition_id' => (strtolower((string) ($d['formaPago'] ?? 'contado')) === 'credito') ? '02' : '01',
            'signature_uri' => 'SIGN',
            'signature_note' => 'SIGN',

            // Emisor (comprador con RUC) → AccountingCustomerParty
            'company_identity_document_type_id' => '6',
            'company_number' => (string) ($company['ruc'] ?? ''),
            'company_name' => (string) ($company['razonSocial'] ?? $company['razon_social'] ?? ''),
            'company_trade_name' => $company['nombreComercial'] ?? null,
            'establishment' => [
                'location_id' => (string) ($cAddr['ubigeo'] ?? $cAddr['location_id'] ?? ''),
                'code' => (string) ($cAddr['codLocal'] ?? $cAddr['codigo'] ?? $cAddr['code'] ?? '0000'),
                'urbanization' => $cAddr['urbanizacion'] ?? null,
                'province' => (string) ($cAddr['provincia'] ?? ''),
                'department' => (string) ($cAddr['departamento'] ?? ''),
                'district' => (string) ($cAddr['distrito'] ?? ''),
                'address' => (string) ($cAddr['direccion'] ?? $cAddr['address'] ?? ''),
                'country_id' => (string) ($cAddr['codPais'] ?? 'PE'),
            ],

            // Proveedor (vendedor sin RUC) → AccountingSupplierParty
            'supplier_identity_document_type_id' => (string) ($supplier['tipoDoc'] ?? $supplier['tipoDocumento'] ?? '1'),
            'supplier_number' => (string) ($supplier['numDoc'] ?? $supplier['numero'] ?? ''),
            'supplier_name' => (string) ($supplier['razonSocial'] ?? $supplier['nombre'] ?? ''),
            'supplier_address' => [
                'location_id' => (string) ($sAddr['ubigeo'] ?? ''),
                'address_type_code' => (string) ($sAddr['tipoDomicilio'] ?? '01'),
                'province' => (string) ($sAddr['provincia'] ?? ''),
                'department' => (string) ($sAddr['departamento'] ?? ''),
                'district' => (string) ($sAddr['distrito'] ?? ''),
                'address' => (string) ($sAddr['direccion'] ?? ''),
                'country_id' => (string) ($sAddr['codPais'] ?? 'PE'),
            ],

            // Lugar de la operación → cac:DeliveryTerms
            'operation' => empty($op) ? null : [
                'location_type_code' => (string) ($op['tipoLugar'] ?? '01'),
                'location_id' => (string) ($op['ubigeo'] ?? ''),
                'province' => (string) ($op['provincia'] ?? ''),
                'department' => (string) ($op['departamento'] ?? ''),
                'district' => (string) ($op['distrito'] ?? ''),
                'address' => (string) ($op['direccion'] ?? ''),
                'country_id' => (string) ($op['codPais'] ?? 'PE'),
            ],

            'legends' => array_map(
                fn ($l) => ['code' => (string) ($l['code'] ?? $l['codigo']), 'value' => (string) ($l['value'] ?? $l['valor'])],
                $d['legends'] ?? $d['leyendas'] ?? []
            ),

            'total_taxes' => round($totalIgv, 2),
            'total_taxed' => round($totalTaxed, 2),
            'total_igv' => round($totalIgv, 2),
            'total_exonerated' => round($totalExonerated, 2),
            'total_unaffected' => round($totalUnaffected, 2),
            'total_value' => round($totalValue, 2),
            'total_payable' => round($total, 2),

            'items' => $lines,
        ]];
    }

    /** Factura/boleta (01/03) y notas (07/08). */
    private function mapInvoiceFamily(array $d): array
    {
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

    /** Guía de remisión remitente (09). */
    private function mapDespatch(array $d): array
    {
        $env = $d['envio'] ?? $d['traslado'] ?? $d;
        $cli = $d['destinatario'] ?? $d['client'] ?? $d['cliente'] ?? [];
        $company = $d['company'] ?? $d['emisor'] ?? [];
        $part = $env['puntoPartida'] ?? [];
        $lleg = $env['puntoLlegada'] ?? [];
        $trans = $env['transportista'] ?? [];
        $cond = $env['conductor'] ?? [];
        $modo = (string) ($env['modalidadTraslado'] ?? $env['modoTraslado'] ?? '02');

        return ['document' => [
            'id' => $this->serieNum($d),
            'date_of_issue' => $d['fechaEmision'] ?? null,
            'time_of_issue' => $d['horaEmision'] ?? '00:00:00',
            'document_type_id' => '09',
            'signature_uri' => 'SIGN', 'signature_note' => 'SIGN',
            'company_number' => (string) ($company['ruc'] ?? ''),
            'company_name' => (string) ($company['razonSocial'] ?? $company['razon_social'] ?? ''),
            'customer_identity_document_type_id' => (string) ($cli['tipoDoc'] ?? '6'),
            'customer_number' => (string) ($cli['numDoc'] ?? $cli['numero'] ?? ''),
            'customer_name' => (string) ($cli['rznSocial'] ?? $cli['nombre'] ?? ''),
            'transfer_reason_type_id' => (string) ($env['motivoTraslado'] ?? '01'),
            'transfer_reason_description' => $env['descripcionMotivo'] ?? $env['motivoDescripcion'] ?? null,
            'weight_unit_type_id' => (string) ($env['unidadPeso'] ?? 'KGM'),
            'total_weight' => (float) ($env['pesoTotal'] ?? 0),
            'transport_mode_type_id' => $modo,
            'date_of_shipping' => $env['fechaTraslado'] ?? $env['fechaInicioTraslado'] ?? null,
            'origin_location_id' => (string) ($part['ubigeo'] ?? ''),
            'origin_address' => (string) ($part['direccion'] ?? ''),
            'delivery_location_id' => (string) ($lleg['ubigeo'] ?? ''),
            'delivery_address' => (string) ($lleg['direccion'] ?? ''),
            'observations' => $d['observaciones'] ?? null,
            'is_transport_category_m1l' => (bool) ($env['vehiculoM1L'] ?? false),
            'is_total_dam_transfer' => (bool) ($env['trasladoTotalDam'] ?? false),
            'plate_number' => $env['placa'] ?? null,
            'carrier_identity_document_type_id' => $trans ? (string) ($trans['tipoDoc'] ?? '6') : null,
            'carrier_number' => $trans['numDoc'] ?? null,
            'carrier_name' => $trans['rznSocial'] ?? $trans['razonSocial'] ?? null,
            'carrier_mtc_number' => $trans['nroMtc'] ?? $trans['registroMtc'] ?? null,
            'driver_identity_document_type_id' => $cond ? (string) ($cond['tipoDoc'] ?? '1') : null,
            'driver_number' => $cond['numDoc'] ?? null,
            'driver_first_name' => $cond['nombres'] ?? null,
            'driver_family_name' => $cond['apellidos'] ?? null,
            'driver_license_number' => $cond['licencia'] ?? null,
            'origin_establishment_code' => $part['codLocal'] ?? null,
            'origin_establishment_ruc' => $part['ruc'] ?? null,
            'delivery_establishment_code' => $lleg['codLocal'] ?? null,
            'delivery_establishment_ruc' => $lleg['ruc'] ?? null,
            'items' => array_map(fn ($it) => $this->mapGuiaLine($it), $d['details'] ?? $d['items'] ?? []),
        ]];
    }

    /** Guía de remisión transportista (31). */
    private function mapDespatchCarrier(array $d): array
    {
        $env = $d['envio'] ?? $d['traslado'] ?? $d;
        $trans = $d['transportista'] ?? $d['company'] ?? [];
        $rem = $d['remitente'] ?? [];
        $cli = $d['destinatario'] ?? $d['client'] ?? [];
        $part = $env['puntoPartida'] ?? [];
        $lleg = $env['puntoLlegada'] ?? [];
        $veh = $env['vehiculoPrincipal'] ?? [];
        $cond = $env['conductorPrincipal'] ?? [];

        return ['document' => [
            'id' => $this->serieNum($d),
            'date_of_issue' => $d['fechaEmision'] ?? null,
            'time_of_issue' => $d['horaEmision'] ?? '00:00:00',
            'document_type_id' => '31',
            'signature_uri' => 'SIGN', 'signature_note' => 'SIGN',
            'carrier_number' => (string) ($trans['ruc'] ?? $trans['numDoc'] ?? ''),
            'carrier_name' => (string) ($trans['razonSocial'] ?? $trans['rznSocial'] ?? ''),
            'carrier_mtc_number' => $trans['nroMtc'] ?? $trans['registroMtc'] ?? null,
            'sender_identity_document_type_id' => (string) ($rem['tipoDoc'] ?? '6'),
            'sender_number' => (string) ($rem['numDoc'] ?? ''),
            'sender_name' => (string) ($rem['rznSocial'] ?? $rem['razonSocial'] ?? ''),
            'customer_identity_document_type_id' => (string) ($cli['tipoDoc'] ?? '6'),
            'customer_number' => (string) ($cli['numDoc'] ?? ''),
            'customer_name' => (string) ($cli['rznSocial'] ?? $cli['nombre'] ?? ''),
            'weight_unit_type_id' => (string) ($env['unidadPeso'] ?? 'KGM'),
            'total_weight' => (float) ($env['pesoTotal'] ?? 0),
            'packages_number' => $env['bultos'] ?? $env['nroBultos'] ?? null,
            'transport_mode_type_id' => (string) ($env['modalidadTraslado'] ?? '01'),
            'date_of_shipping' => $env['fechaTraslado'] ?? null,
            'main_plate_number' => (string) ($veh['placa'] ?? ''),
            'main_vehicle_tuc' => (string) ($veh['tuc'] ?? ''),
            'driver_identity_document_type_id' => (string) ($cond['tipoDoc'] ?? '1'),
            'driver_number' => (string) ($cond['numDoc'] ?? ''),
            'driver_first_name' => (string) ($cond['nombres'] ?? ''),
            'driver_family_name' => (string) ($cond['apellidos'] ?? ''),
            'driver_license_number' => (string) ($cond['licencia'] ?? ''),
            'secondary_vehicles' => array_map(fn ($v) => [
                'plate_number' => (string) ($v['placa'] ?? ''), 'tuc' => (string) ($v['tuc'] ?? ''),
            ], $env['vehiculosSecundarios'] ?? []),
            'secondary_drivers' => array_map(fn ($c) => [
                'identity_document_type_id' => (string) ($c['tipoDoc'] ?? '1'), 'number' => (string) ($c['numDoc'] ?? ''),
                'first_name' => (string) ($c['nombres'] ?? ''), 'family_name' => (string) ($c['apellidos'] ?? ''),
                'license_number' => (string) ($c['licencia'] ?? ''),
            ], $env['conductoresSecundarios'] ?? []),
            'origin_location_id' => (string) ($part['ubigeo'] ?? ''),
            'origin_address' => (string) ($part['direccion'] ?? ''),
            'delivery_location_id' => (string) ($lleg['ubigeo'] ?? ''),
            'delivery_address' => (string) ($lleg['direccion'] ?? ''),
            'observations' => $d['observaciones'] ?? null,
            'container_number' => $env['contenedor'] ?? null,
            'port_code' => $env['puerto'] ?? null,
            'items' => array_map(fn ($it) => $this->mapGuiaLine($it), $d['details'] ?? $d['items'] ?? []),
        ]];
    }

    /** Resumen diario de boletas (RC). */
    private function mapSummary(array $d): array
    {
        $company = $d['company'] ?? $d['emisor'] ?? [];
        return ['document' => [
            'identifier' => (string) ($d['correlativo'] ?? $d['identificador'] ?? ''),
            'date_of_reference' => $d['fechaReferencia'] ?? null,
            'date_of_issue' => $d['fechaEmision'] ?? null,
            'signature_uri' => 'SIGN', 'signature_note' => 'SIGN',
            'company_number' => (string) ($company['ruc'] ?? ''),
            'company_name' => (string) ($company['razonSocial'] ?? ''),
            'documents' => array_map(function ($r) {
                $cli = $r['cliente'] ?? [];
                $t = $r['totales'] ?? $r;
                return [
                    'document_type_id' => (string) ($r['tipoDoc'] ?? '03'),
                    'id' => (string) ($r['id'] ?? trim(($r['serie'] ?? '') . '-' . ($r['correlativo'] ?? ''), '-')),
                    'customer_number' => (string) ($cli['numDoc'] ?? ''),
                    'customer_identity_document_type_id' => (string) ($cli['tipoDoc'] ?? '1'),
                    'customer_name' => $cli['rznSocial'] ?? $cli['nombre'] ?? null, // #29 (>= 2026-08-01)
                    'igv_percent' => $r['tasaIgv'] ?? ($r['totales']['tasaIgv'] ?? null), // #27 (>= 2026-08-01)
                    'status_id' => (string) ($r['estado'] ?? '1'),
                    'currency_type_id' => (string) ($r['moneda'] ?? 'PEN'),
                    'total' => (float) ($t['total'] ?? 0),
                    'total_taxed' => (float) ($t['gravado'] ?? 0),
                    'total_exonerated' => (float) ($t['exonerado'] ?? 0),
                    'total_unaffected' => (float) ($t['inafecto'] ?? 0),
                    'total_exportation' => (float) ($t['exportacion'] ?? 0),
                    'total_free' => (float) ($t['gratuito'] ?? 0),
                    'total_charge' => (float) ($t['cargos'] ?? 0),
                    'total_igv' => (float) ($t['igv'] ?? 0),
                    'total_isc' => (float) ($t['isc'] ?? 0),
                    'total_other_taxes' => (float) ($t['otrosTributos'] ?? 0),
                    'total_plastic_bag_taxes' => (float) ($t['icbper'] ?? 0),
                    'affected_document' => $r['documentoAfectado'] ?? null,
                ];
            }, $d['documentos'] ?? $d['documents'] ?? []),
        ]];
    }

    /** Comunicación de baja (RA). */
    private function mapVoided(array $d, string $defaultLineDocType = '01'): array
    {
        $company = $d['company'] ?? $d['emisor'] ?? [];
        return ['document' => [
            'identifier' => (string) ($d['correlativo'] ?? $d['identificador'] ?? ''),
            'date_of_reference' => $d['fechaReferencia'] ?? null,
            'date_of_issue' => $d['fechaEmision'] ?? null,
            'signature_uri' => 'SIGN', 'signature_note' => 'SIGN',
            'company_number' => (string) ($company['ruc'] ?? ''),
            'company_name' => (string) ($company['razonSocial'] ?? ''),
            'documents' => array_map(fn ($r) => [
                'document_type_id' => (string) ($r['tipoDoc'] ?? $defaultLineDocType),
                'series' => (string) ($r['serie'] ?? ''),
                'number' => (string) ($r['numero'] ?? $r['correlativo'] ?? ''),
                'description' => (string) ($r['motivo'] ?? $r['descripcion'] ?? ''),
            ], $d['documentos'] ?? $d['documents'] ?? []),
        ]];
    }

    /** Comprobante de retención (20). */
    private function mapRetentionDoc(array $d): array
    {
        $company = $d['company'] ?? $d['emisor'] ?? [];
        $prov = $d['proveedor'] ?? [];
        $reg = $d['regimen'] ?? $d;
        return ['document' => [
            'id' => $this->serieNum($d),
            'date_of_issue' => $d['fechaEmision'] ?? null,
            'time_of_issue' => $d['horaEmision'] ?? '00:00:00',
            'signature_uri' => 'SIGN', 'signature_note' => 'SIGN',
            'company_number' => (string) ($company['ruc'] ?? ''),
            'company_name' => (string) ($company['razonSocial'] ?? ''),
            'company_trade_name' => $company['nombreComercial'] ?? null,
            'supplier_identity_document_type_id' => (string) ($prov['tipoDoc'] ?? '6'),
            'supplier_number' => (string) ($prov['numDoc'] ?? ''),
            'supplier_name' => (string) ($prov['rznSocial'] ?? $prov['razonSocial'] ?? ''),
            'retention_type_id' => (string) ($reg['tipo'] ?? $reg['codRegimen'] ?? '01'),
            'retention_percentage' => (float) ($reg['tasa'] ?? $reg['porcentaje'] ?? 3),
            'total_retention' => (float) ($d['totalRetenido'] ?? 0),
            'total_paid' => (float) ($d['totalPagado'] ?? 0),
            'observations' => $d['observaciones'] ?? null,
            'documents' => array_map(fn ($r) => [
                'document_type_id' => (string) ($r['tipoDoc'] ?? '01'),
                'id' => (string) ($r['id'] ?? ''),
                'date_of_issue' => $r['fechaEmision'] ?? null,
                'currency_type_id' => (string) ($r['moneda'] ?? 'PEN'),
                'total' => (float) ($r['importeTotal'] ?? $r['total'] ?? 0),
                'retention_amount' => (float) ($r['importeRetenido'] ?? 0),
                'retention_date' => $r['fechaRetencion'] ?? null,
                'net_total_paid' => (float) ($r['importeNetoPagado'] ?? 0),
                'payments' => $this->mapPayments($r['pagos'] ?? []),
                'exchange_rate' => $r['tipoCambio'] ?? null,
            ], $d['documentos'] ?? $d['documents'] ?? []),
        ]];
    }

    /** Comprobante de percepción (40). */
    private function mapPerceptionDoc(array $d): array
    {
        $company = $d['company'] ?? $d['emisor'] ?? [];
        $cli = $d['cliente'] ?? $d['client'] ?? [];
        $reg = $d['regimen'] ?? $d;
        return ['document' => [
            'id' => $this->serieNum($d),
            'date_of_issue' => $d['fechaEmision'] ?? null,
            'time_of_issue' => $d['horaEmision'] ?? '00:00:00',
            'signature_uri' => 'SIGN', 'signature_note' => 'SIGN',
            'company_number' => (string) ($company['ruc'] ?? ''),
            'company_name' => (string) ($company['razonSocial'] ?? ''),
            'company_trade_name' => $company['nombreComercial'] ?? null,
            'customer_identity_document_type_id' => (string) ($cli['tipoDoc'] ?? '6'),
            'customer_number' => (string) ($cli['numDoc'] ?? ''),
            'customer_name' => (string) ($cli['rznSocial'] ?? $cli['nombre'] ?? ''),
            'perception_type_id' => (string) ($reg['tipo'] ?? $reg['codRegimen'] ?? '01'),
            'perception_percentage' => (float) ($reg['tasa'] ?? $reg['porcentaje'] ?? 2),
            'total_perception' => (float) ($d['totalPercibido'] ?? 0),
            'total_cashed' => (float) ($d['totalCobrado'] ?? 0),
            'observations' => $d['observaciones'] ?? null,
            'documents' => array_map(fn ($r) => [
                'document_type_id' => (string) ($r['tipoDoc'] ?? '01'),
                'id' => (string) ($r['id'] ?? ''),
                'date_of_issue' => $r['fechaEmision'] ?? null,
                'currency_type_id' => (string) ($r['moneda'] ?? 'PEN'),
                'total' => (float) ($r['importeTotal'] ?? $r['total'] ?? 0),
                'perception_amount' => (float) ($r['importePercibido'] ?? 0),
                'perception_date' => $r['fechaPercepcion'] ?? null,
                'net_total_cashed' => (float) ($r['importeNetoCobrado'] ?? 0),
                'payments' => $this->mapPayments($r['pagos'] ?? []),
                'exchange_rate' => $r['tipoCambio'] ?? null,
            ], $d['documentos'] ?? $d['documents'] ?? []),
        ]];
    }

    /** pagos español → payments interno (número de pago/cobro en retención/percepción). */
    private function mapPayments(array $ps): array
    {
        return array_map(fn ($p) => [
            'currency_type_id' => (string) ($p['moneda'] ?? 'PEN'),
            'total' => (float) ($p['monto'] ?? 0),
            'date_of_payment' => $p['fecha'] ?? $p['fechaPago'] ?? null,
        ], $ps);
    }

    /** serie-correlativo desde campos español. */
    private function serieNum(array $d): string
    {
        return trim(((string) ($d['serie'] ?? '')) . '-' . ((string) ($d['correlativo'] ?? $d['numero'] ?? '')), '-');
    }

    /** Línea de guía (solo cantidad/descripción/unidad). */
    private function mapGuiaLine(array $it): array
    {
        return [
            'quantity' => (float) ($it['cantidad'] ?? 1),
            'unit_type_id' => (string) ($it['unidad'] ?? 'NIU'),
            'name_parts' => is_array($it['descripcion'] ?? null) ? $it['descripcion'] : [(string) ($it['descripcion'] ?? '')],
            'internal_id' => $it['codProducto'] ?? $it['codigo'] ?? null,
            'item_code' => $it['codProductoSunat'] ?? null,
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
