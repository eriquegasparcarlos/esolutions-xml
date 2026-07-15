<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegFactura-2.0.1.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegFactura-2.0.1.xsl',
  'globals' => 
  array (
  ),
  'rules' => 
  array (
    0 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'1034\'',
        'node' => 'cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => '$numeroRuc != cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    1 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'1035\'',
        'node' => 'cbc:ID',
        'expresion' => '$numeroSerie != substring(cbc:ID, 1, 4)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    2 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'1036\'',
        'node' => 'cbc:ID',
        'expresion' => '$numeroComprobante != substring(cbc:ID, 6)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    3 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2075\'',
        'errorCodeValidate' => '\'2074\'',
        'node' => 'cbc:UBLVersionID',
        'regexp' => '\'^(2.1)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    4 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2073\'',
        'errorCodeValidate' => '\'2072\'',
        'node' => 'cbc:CustomizationID',
        'regexp' => '\'^(2.0)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    5 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cbc:CustomizationID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    6 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'1001\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^([F][A-Z0-9]{3}|[0-9]{4})-[0-9]{1,8}?$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    7 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'1004\'',
        'errorCodeValidate' => '\'1003\'',
        'node' => 'cbc:InvoiceTypeCode',
        'regexp' => '\'^01$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    8 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:InvoiceTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    9 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:InvoiceTypeCode/@listName',
        'regexp' => '\'^(Tipo de Documento)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    10 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:InvoiceTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    11 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2070\'',
        'node' => 'cbc:DocumentCurrencyCode',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    12 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3088\'',
        'idCatalogo' => 'cbc:DocumentCurrencyCode',
        'catalogo' => '\'02\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    13 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'descendant::*[@currencyID != $monedaComprobante and not(ancestor-or-self::cac:AllowanceCharge[cbc:AllowanceChargeReasonCode = \'51\' or cbc:AllowanceChargeReasonCode = \'52\' or cbc:AllowanceChargeReasonCode = \'53\']) and not(ancestor-or-self::cac:PaymentTerms/cbc:Amount) and not(ancestor-or-self::cac:DeliveryTerms/cbc:Amount) and not(ancestor-or-self::cbc:DeclaredForCarriageValueAmount)]/@currencyID',
        'expresion' => 'descendant::*[@currencyID != $monedaComprobante and not(ancestor-or-self::cac:AllowanceCharge[cbc:AllowanceChargeReasonCode = \'51\' or cbc:AllowanceChargeReasonCode = \'52\' or cbc:AllowanceChargeReasonCode = \'53\']) and not (ancestor-or-self::cac:PaymentTerms/cbc:Amount) and not(ancestor-or-self::cac:DeliveryTerms/cbc:Amount) and not(ancestor-or-self::cbc:DeclaredForCarriageValueAmount)]',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    14 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4254\'',
        'node' => 'cbc:DocumentCurrencyCode/@listID',
        'regexp' => '\'^(ISO 4217 Alpha)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    15 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DocumentCurrencyCode/@listName',
        'regexp' => '\'^(Currency)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    16 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DocumentCurrencyCode/@listAgencyName',
        'regexp' => '\'^(United Nations Economic Commission for Europe)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    17 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3181\'',
        'node' => 'cac:InvoiceLine/cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode[text() != \'84121901\' and text() != \'80131501\']',
        'expresion' => 'count(cac:InvoiceLine/cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode[text() = \'84121901\' or text() = \'80131501\']) = 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0112\' ',
      ),
    ),
    18 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3241\'',
        'node' => 'cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'0000\']',
        'expresion' => 'count(cac:InvoiceLine[count(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7004\' or text() = \'7005\' or text() = \'7012\']) = 3]) < 1',
        'descripcion' => 'concat(\' cac:AdditionalItemProperty/cbc:NameCode \', cac:AdditionalItemProperty/cbc:NameCode)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'2100\' or $tipoOperacion = \'2101\' or $tipoOperacion = \'2102\'',
      ),
    ),
    19 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3242\'',
        'node' => 'cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'0000\']',
        'expresion' => 'count(cac:InvoiceLine[count(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7015\']) = 1]) < 1',
        'descripcion' => 'concat(\' cac:AdditionalItemProperty/cbc:NameCode \', cac:AdditionalItemProperty/cbc:NameCode)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'2104\'',
      ),
    ),
    20 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2065\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:AllowanceTotalAmount',
        'isGreaterCero' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    21 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2064\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:ChargeTotalAmount',
        'isGreaterCero' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    22 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2062\'',
        'errorCodeValidate' => '\'2062\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:PayableAmount',
        'isGreaterCero' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    23 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4212\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:LineExtensionAmount',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    24 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2031\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:LineExtensionAmount',
        'isGreaterCero' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    25 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3019\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount',
        'isGreaterCero' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    26 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4314\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:PayableRoundingAmount',
        'expresion' => 'cac:LegalMonetaryTotal/cbc:PayableRoundingAmount > 1 or cac:LegalMonetaryTotal/cbc:PayableRoundingAmount < -1',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    27 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:PayableRoundingAmount/@currencyID',
        'expresion' => 'cac:LegalMonetaryTotal/cbc:PayableRoundingAmount/@currencyID != $monedaComprobante',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    28 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2956\'',
        'node' => 'cac:TaxTotal',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    29 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3024\'',
        'node' => 'cac:TaxTotal/cbc:TaxAmount',
        'expresion' => 'count(cac:TaxTotal) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    30 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3093\'',
        'node' => 'cac:AllowanceCharge/cbc:AllowanceChargeReasonCode[text() =\'51\' or text() = \'52\' or text() = \'53\']',
        'expresion' => 'not(cac:AllowanceCharge/cbc:AllowanceChargeReasonCode[text() =\'51\' or text()=\'52\' or text()=\'53\'])',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion =\'2001\'',
      ),
    ),
    31 => 
    array (
      'primitive' => 'isTrueExpresionEmptyNode',
      'params' => 
      array (
        'errorCodeValidate' => '\'3462\'',
        'expresion' => '(($igv10 > 0) and ($igv18 > 0)) or (($igv10 = 0) and ($igv18 = 0)) or ($igvX > 0)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($sumatoriaIndicador1 > 0) or ($sumatoriaIndicador2 > 0)',
      ),
    ),
    32 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4321\'',
        'node' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'7152\']]/cbc:TaxAmount',
        'expresion' => '$MontoBaseICBPER != $MontoBaseICBPERLinea',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'7152\']]',
      ),
    ),
    33 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3291\'',
        'node' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]/cbc:TaxAmount',
        'expresion' => 'not($indicadorError18 > 0 and $indicadorError10 = 0) and not($indicadorError18 = 0 and $indicadorError10 > 0) and not($indicadorError18 = 0 and $indicadorError10 = 0)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]',
      ),
    ),
    34 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3291\'',
        'node' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]/cbc:TaxAmount',
        'expresion' => '($SumatoriaIGV + 1 ) < $sumatoriaFinal or ($SumatoriaIGV - 1) > $sumatoriaFinal',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]',
      ),
    ),
    35 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4302\'',
        'node' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1016\']]/cbc:TaxAmount',
        'expresion' => '($SumatoriaIVAP + 1 ) < $SumatoriaIVAPCalculado or ($SumatoriaIVAP - 1) > $SumatoriaIVAPCalculado',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1016\']]',
      ),
    ),
    36 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4307\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:AllowanceTotalAmount',
        'expresion' => '($totalDescuentos + 1 ) < $totalDescuentosCalculado or ($totalDescuentos - 1) > $totalDescuentosCalculado',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    37 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4308\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:ChargeTotalAmount',
        'expresion' => '($totalCargos + 1 ) < $totalCargosCalculado or ($totalCargos - 1) > $totalCargosCalculado',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    38 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4312\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:PayableAmount',
        'expresion' => 'cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount and (($totalImporte + 1 ) < $totalImporteCalculado or ($totalImporte - 1) > $totalImporteCalculado)',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    39 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4309\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:LineExtensionAmount',
        'expresion' => '($totalValorVenta + 1 ) < $totalValorVentaCalculado or ($totalValorVenta - 1) > $totalValorVentaCalculado',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    40 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3279\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount',
        'expresion' => '($totalPrecioVenta + 1 ) < $totalPrecioVentaCalculadoIVAP or ($totalPrecioVenta - 1) > $totalPrecioVentaCalculadoIVAP',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount',
        1 => '$MontoBaseIVAPLinea > 0',
      ),
    ),
    41 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3279\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount',
        'expresion' => '($totalPrecioVenta + 1 ) < $totalPrecioVentaCalculadoIGV or ($totalPrecioVenta - 1) > $totalPrecioVentaCalculadoIGV',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount',
      ),
    ),
    42 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2509\'',
        'node' => 'cac:PrepaidPayment/cbc:PaidAmount',
        'expresion' => 'cac:LegalMonetaryTotal/cbc:PrepaidAmount > 0 and (round(sum(cac:PrepaidPayment/cbc:PaidAmount)* 100) div 100)  != number(cac:LegalMonetaryTotal/cbc:PrepaidAmount)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    43 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4264\'',
        'node' => 'cbc:Note[@languageLocaleID=\'2007\']',
        'expresion' => 'cac:InvoiceLine/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cbc:TaxExemptionReasonCode=\'17\']/cbc:TaxableAmount > 0 and not(cbc:Note[@languageLocaleID=\'2007\'])',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    44 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4266\'',
        'node' => 'cbc:Note[@languageLocaleID=\'2005\']',
        'expresion' => 'cac:Delivery/cac:DeliveryLocation/cac:Address/cac:AddressLine/cbc:Line  and not(cbc:Note[@languageLocaleID=\'2005\'])',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    45 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4265\'',
        'node' => 'cbc:Note[@languageLocaleID=\'2006\']',
        'expresion' => 'not(cbc:Note[@languageLocaleID=\'2006\'])',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion =\'1001\' or $tipoOperacion =\'1002\' or $tipoOperacion =\'1003\' or $tipoOperacion =\'1004\'',
      ),
    ),
    46 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3014\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(cbc:Note[@languageLocaleID=\'1000\']) > 1 or             count(cbc:Note[@languageLocaleID=\'1002\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2000\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2001\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2002\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2003\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2004\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2005\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2006\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2007\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2008\']) > 1 or             count(cbc:Note[@languageLocaleID=\'2009\']) > 1 ',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    47 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3205\'',
        'node' => '$tipoOperacion',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    48 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4260\'',
        'node' => 'cbc:InvoiceTypeCode/@name',
        'regexp' => '\'^(Tipo de Operacion)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    49 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4261\'',
        'node' => 'cbc:InvoiceTypeCode/@listSchemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo51)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    50 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4233\'',
        'node' => 'cac:OrderReference/cbc:ID',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:Line \', cbc:Line)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OrderReference/cbc:ID and (string-length(cac:OrderReference/cbc:ID) > 20)',
      ),
    ),
    51 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4233\'',
        'node' => 'cac:OrderReference/cbc:ID',
        'regexp' => '\'^[0-9a-zA-Z]{1,}$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    52 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3180\'',
        'node' => 'cbc:DueDate',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0303\'',
      ),
    ),
    53 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3244\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count(cac:PaymentTerms/cbc:ID[text() = \'FormaPago\']) < 1',
        'isError' => 'boolean(number(0))',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    54 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3247\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count(cac:PaymentTerms[cbc:ID[text() = \'FormaPago\'] and cbc:PaymentMeansID[text() = \'Contado\']]) > 0 and                                                   count(cac:PaymentTerms[cbc:ID[text() = \'FormaPago\'] and cbc:PaymentMeansID[text() = \'Credito\']]) > 0',
        'isError' => 'boolean(number(0))',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:PaymentTerms/cbc:ID/text() = \'FormaPago\'',
      ),
    ),
    55 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3127\'',
        'node' => 'cac:PaymentTerms/cbc:PaymentMeansID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion =\'1001\' or $tipoOperacion =\'1002\' or $tipoOperacion =\'1003\' or $tipoOperacion =\'1004\'',
      ),
    ),
    56 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3173\'',
        'node' => 'cac:PaymentMeans/cbc:PaymentMeansCode',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    57 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3027\'',
        'idCatalogo' => '@languageLocaleID',
        'catalogo' => '\'52\'',
      ),
      'context' => 'cbc:Note',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '@languageLocaleID',
      ),
    ),
    58 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3006\'',
        'errorCodeValidate' => '\'3006\'',
        'node' => 'text()',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,199}$\'',
        'descripcion' => 'concat(\'Leyenda : \', @languageLocaleID)',
      ),
      'context' => 'cbc:Note',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    59 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3089\'',
        'node' => 'cac:Party/cac:PartyIdentification',
        'expresion' => 'count(cac:Party/cac:PartyIdentification) > 1',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    60 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'1008\'',
        'errorCodeValidate' => '\'1007\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    61 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    62 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    63 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    64 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4092\'',
        'node' => 'cac:Party/cac:PartyName/cbc:Name',
        'expresion' => 'string-length(cac:Party/cac:PartyName/cbc:Name) > 1500',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    65 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4092\'',
        'node' => 'cac:Party/cac:PartyName/cbc:Name',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    66 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'1037\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    67 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4338\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    68 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4338\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'string-length(cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) > 1500 or string-length(cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) < 2 ',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:RegistrationName \', cbc:RegistrationName)',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    69 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4094\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:AddressLine/cbc:Line',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:Line \', cbc:Line)',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:AddressLine/cbc:Line and (string-length(cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:AddressLine/cbc:Line) > 200)',
      ),
    ),
    70 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4094\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:AddressLine/cbc:Line',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    71 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4095\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CitySubdivisionName',
        'regexp' => '\'^(?!\\s*$)[^\\n]{0,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    72 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4095\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CitySubdivisionName',
        'expresion' => 'string-length(cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CitySubdivisionName) > 25',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:CitySubdivisionName \', cbc:CitySubdivisionName)',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    73 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4096\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CityName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:CityName \', cbc:CityName)',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string-length(cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CityName) > 30)',
      ),
    ),
    74 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4096\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CityName',
        'expresion' => 'string-length(cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CityName) > 30',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:CityName \', cbc:CityName)',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    75 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4093\'',
        'idCatalogo' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:ID',
        'catalogo' => '\'13\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    76 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    77 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    78 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4097\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CountrySubentity',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    79 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4097\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CountrySubentity',
        'expresion' => 'string-length(cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CountrySubentity) > 30',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:CountrySubentity \', cbc:CountrySubentity)',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    80 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4098\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:District',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    81 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4098\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:District',
        'expresion' => 'string-length(cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:District) > 30',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:District \', cbc:District)',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    82 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4041\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:Country/cbc:IdentificationCode',
        'regexp' => '\'^(PE)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    83 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4254\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:Country/cbc:IdentificationCode/@listID',
        'regexp' => '\'^(ISO 3166-1)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    84 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:Country/cbc:IdentificationCode/@listAgencyName',
        'regexp' => '\'^(United Nations Economic Commission for Europe)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    85 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:Country/cbc:IdentificationCode/@listName',
        'regexp' => '\'^(Country)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    86 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4198\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring($root/cbc:ID, 1, 1) = \'0\' or substring($root/cbc:ID, 1, 1) = \'1\' or substring($root/cbc:ID, 1, 1) = \'2\' or substring($root/cbc:ID, 1, 1) = \'3\' or substring($root/cbc:ID, 1, 1) = \'4\' or substring($root/cbc:ID, 1, 1) = \'5\' or substring($root/cbc:ID, 1, 1) = \'6\' or substring($root/cbc:ID, 1, 1) = \'7\' or substring($root/cbc:ID, 1, 1) = \'8\' or substring($root/cbc:ID, 1, 1) = \'9\'',
      ),
    ),
    87 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4199\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode',
        'regexp' => '\'^[0-9]{1,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring($root/cbc:ID, 1, 1) = \'0\' or substring($root/cbc:ID, 1, 1) = \'1\' or substring($root/cbc:ID, 1, 1) = \'2\' or substring($root/cbc:ID, 1, 1) = \'3\' or substring($root/cbc:ID, 1, 1) = \'4\' or substring($root/cbc:ID, 1, 1) = \'5\' or substring($root/cbc:ID, 1, 1) = \'6\' or substring($root/cbc:ID, 1, 1) = \'7\' or substring($root/cbc:ID, 1, 1) = \'8\' or substring($root/cbc:ID, 1, 1) = \'9\'',
        1 => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode != \'\'',
      ),
    ),
    88 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3030\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    89 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3239\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode',
        'regexp' => '\'^[0-9]{1,}$\'',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    90 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4242\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode',
        'regexp' => '\'^[0-9]{4}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    91 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    92 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode/@listName',
        'regexp' => '\'^(Establecimientos anexos)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    93 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3156\'',
        'node' => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    94 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3157\'',
        'errorCodeValidate' => '\'3158\'',
        'node' => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID',
      ),
    ),
    95 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID',
      ),
    ),
    96 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID',
      ),
    ),
    97 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:AgentParty/cac:PartyIdentification/cbc:ID',
      ),
    ),
    98 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4236\'',
        'node' => 'cac:AddressLine/cbc:Line',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:AddressLine/cbc:Line) > 200 or string-length(cac:AddressLine/cbc:Line) < 3 ',
      ),
    ),
    99 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4236\'',
        'node' => 'cac:AddressLine/cbc:Line',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    100 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4238\'',
        'node' => 'cbc:CitySubdivisionName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cbc:CitySubdivisionName) > 25 or string-length(cbc:CitySubdivisionName) < 1 ',
      ),
    ),
    101 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4238\'',
        'node' => 'cbc:CitySubdivisionName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    102 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4239\'',
        'node' => 'cbc:CityName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:CityName and (string-length(cbc:CityName) > 30 or string-length(cbc:CityName) < 1 )',
      ),
    ),
    103 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4239\'',
        'node' => 'cbc:CityName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    104 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4231\'',
        'idCatalogo' => 'cbc:ID',
        'catalogo' => '\'13\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID',
      ),
    ),
    105 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    106 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Nodo padre:\', cac:Delivery/cac:DeliveryLocation/cac:Address)',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    107 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4240\'',
        'node' => 'cbc:CountrySubentity',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cbc:CountrySubentity) > 30 or string-length(cbc:CountrySubentity) < 1 ',
      ),
    ),
    108 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4240\'',
        'node' => 'cbc:CountrySubentity',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    109 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4241\'',
        'node' => 'cbc:District',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cbc:District) > 30 or string-length(cbc:District) < 1 ',
      ),
    ),
    110 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4241\'',
        'node' => 'cbc:District',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    111 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3098\'',
        'node' => 'cac:Country/cbc:IdentificationCode',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion =\'0201\' or $tipoOperacion =\'0208\'',
      ),
    ),
    112 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3099\'',
        'idCatalogo' => 'cac:Country/cbc:IdentificationCode',
        'catalogo' => '\'04\'',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion =\'0201\' or $tipoOperacion =\'0208\'',
      ),
    ),
    113 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3099\'',
        'node' => 'cac:Country/cbc:IdentificationCode',
        'expresion' => 'cac:Country/cbc:IdentificationCode = \'PE\'',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion =\'0201\' or $tipoOperacion =\'0208\'',
      ),
    ),
    114 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4041\'',
        'node' => 'cac:Country/cbc:IdentificationCode',
        'regexp' => '\'^(PE)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    115 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4254\'',
        'node' => 'cac:Country/cbc:IdentificationCode/@listID',
        'regexp' => '\'^(ISO 3166-1)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    116 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Country/cbc:IdentificationCode/@listAgencyName',
        'regexp' => '\'^(United Nations Economic Commission for Europe)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    117 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Country/cbc:IdentificationCode/@listName',
        'regexp' => '\'^(Country)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:DeliveryLocation/cac:Address',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    118 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3090\'',
        'node' => 'cac:Party/cac:PartyIdentification',
        'expresion' => 'count(cac:Party/cac:PartyIdentification) > 1',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    119 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2014\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    120 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2017\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[\\d]{11}$\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID != \'-\'',
        1 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID =\'6\'',
      ),
    ),
    121 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2801\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[\\d]{8}$\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID != \'-\'',
        1 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID =\'1\'',
      ),
    ),
    122 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2802\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^(?!\\s*$)[^\\s]{1,15}$\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID != \'-\'',
      ),
    ),
    123 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2015\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    124 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2800\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0200\' or $tipoOperacion = \'0201\' or $tipoOperacion = \'0203\' or $tipoOperacion = \'0204\' or $tipoOperacion = \'0205\' or $tipoOperacion = \'0206\' or $tipoOperacion = \'0207\' or $tipoOperacion = \'0208\'',
      ),
    ),
    125 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2800\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'1\' and cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'6\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0112\'',
      ),
    ),
    126 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'2800\'',
        'idCatalogo' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\' or $tipoOperacion = \'0401\'',
        1 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'-\'',
      ),
    ),
    127 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2800\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'6\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    128 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    129 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    130 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    131 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2021\'',
        'errorCodeValidate' => '\'2022\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,1499}$\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    132 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2364\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-document-despatch-reference\', concat(cbc:DocumentTypeCode,\' \',cbc:ID))) > 1',
        'descripcion' => 'concat(\'Guia Relacionada : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    133 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4006\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([TV][A-Z0-9]{3}-[0-9]{1,8})|([0-9]{4}-[0-9]{1,8})|([E][G][0][1-4,7]{1}-[0-9]{1,8})|([G][0-9]{3}-[0-9]{1,8}))$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Guia Relacionada : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    134 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4005\'',
        'errorCodeValidate' => '\'4005\'',
        'node' => 'cbc:DocumentTypeCode',
        'regexp' => '\'^(31)|(09)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Guia Relacionada : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    135 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DocumentTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Guia Relacionada : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    136 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DocumentTypeCode/@listName',
        'regexp' => '\'^(Tipo de Documento)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Guia Relacionada : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    137 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:DocumentTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Guia Relacionada : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    138 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3216\'',
        'node' => 'cbc:DocumentStatusCode',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'02\' or cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    139 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3214\'',
        'node' => 'cbc:DocumentStatusCode',
        'expresion' => 'count(key(\'by-idprepaid-in-root\', cbc:DocumentStatusCode)) < 1',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'02\' or cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    140 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3215\'',
        'node' => 'cbc:DocumentStatusCode',
        'expresion' => 'count(key(\'by-document-additional-anticipo\', cbc:DocumentStatusCode)) > 1',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'02\' or cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    141 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DocumentStatusCode/@listName',
        'regexp' => '\'^(Anticipo)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'02\' or cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    142 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DocumentStatusCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'02\' or cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    143 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2521\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([F][0-9A-Z]{3}-[0-9]{1,8})|([0-9]{1,4}-[0-9]{1,8})|([E][0][0][1]-[0-9]{1,8}))$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'02\' or cbc:DocumentTypeCode = \'03\'',
        1 => 'cbc:DocumentTypeCode = \'02\'',
      ),
    ),
    144 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2521\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([B][0-9A-Z]{3}-[0-9]{1,8})|([0-9]{1,4}-[0-9]{1,8})|([E][B][0][1]-[0-9]{1,8}))$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'02\' or cbc:DocumentTypeCode = \'03\'',
        1 => 'cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    145 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4010\'',
        'errorCodeValidate' => '\'4010\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!\\s*$)[^\\s]{1,30}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode != \'02\' and cbc:DocumentTypeCode != \'03\'',
      ),
    ),
    146 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4009\'',
        'errorCodeValidate' => '\'4009\'',
        'node' => 'cbc:DocumentTypeCode',
        'regexp' => '\'^(0[145]|99)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode != \'02\' and cbc:DocumentTypeCode != \'03\'',
      ),
    ),
    147 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeValidate' => '\'2505\'',
        'node' => 'cbc:DocumentTypeCode',
        'regexp' => '\'^(02|03)$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentStatusCode',
      ),
    ),
    148 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3217\'',
        'errorCodeValidate' => '\'3217\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[\\d]{11}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentStatusCode',
      ),
    ),
    149 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2520\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentStatusCode',
      ),
    ),
    150 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentStatusCode',
      ),
    ),
    151 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentStatusCode',
      ),
    ),
    152 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentStatusCode',
      ),
    ),
    153 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2365\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-document-additional-reference\', concat(cbc:DocumentTypeCode,\' \',cbc:ID))) > 1',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    154 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DocumentTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    155 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DocumentTypeCode/@listName',
        'regexp' => '\'^(Documento Relacionado)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    156 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:DocumentTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo12)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    157 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2023\'',
        'errorCodeValidate' => '\'2023\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!0*$)\\d{1,3}$\'',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    158 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2752\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-invoiceLine-id\', number(cbc:ID))) > 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    159 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2883\'',
        'node' => 'cbc:InvoicedQuantity/@unitCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:InvoicedQuantity',
      ),
    ),
    160 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4258\'',
        'node' => 'cbc:InvoicedQuantity/@unitCodeListID',
        'regexp' => '\'^(UN/ECE rec 20)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    161 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4259\'',
        'node' => 'cbc:InvoicedQuantity/@unitCodeListAgencyName',
        'regexp' => '\'^(United Nations Economic Commission for Europe)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    162 => 
    array (
      'primitive' => 'existAndValidateValueTenDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2024\'',
        'errorCodeValidate' => '\'2025\'',
        'node' => 'cbc:InvoicedQuantity',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    163 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2024\'',
        'node' => 'cbc:InvoicedQuantity',
        'expresion' => 'cbc:InvoicedQuantity = 0',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    164 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4269\'',
        'node' => 'cac:Item/cac:SellersItemIdentification/cbc:ID',
        'regexp' => '\'^((?!\\s*$)[\\s\\S]{0,29})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    165 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4332\'',
        'idCatalogo' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode',
        'catalogo' => '\'25\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    166 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4337\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode',
        'expresion' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode and substring(cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode, 3, 6) = \'000000\' or cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode and substring(cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode, 5, 4) = \'0000\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode and string-length(cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode) = 8',
      ),
    ),
    167 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3181\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode',
        'expresion' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode != \'84121901\' and cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode != \'80131501\'',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0112\' ',
      ),
    ),
    168 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4254\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode/@listID',
        'regexp' => '\'^(UNSPSC)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    169 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode/@listAgencyName',
        'regexp' => '\'^(GS1 US)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    170 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode/@listName',
        'regexp' => '\'^(Item Classification)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    171 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4334\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID',
        'regexp' => '\'^((?!\\s*$)[\\s\\S]{8})$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Formato \', cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID )',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-8\'',
      ),
    ),
    172 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4334\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID',
        'regexp' => '\'^((?!\\s*$)[\\s\\S]{12})$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Formato \', cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID )',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-12\'',
      ),
    ),
    173 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4334\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID',
        'regexp' => '\'^((?!\\s*$)[\\s\\S]{13})$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Formato \', cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID )',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-13\'',
      ),
    ),
    174 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4334\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID',
        'regexp' => '\'^((?!\\s*$)[\\s\\S]{14})$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Formato \', cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID )',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-14\'',
      ),
    ),
    175 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4335\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(GTIN-8|GTIN-12|GTIN-13|GTIN-14)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    176 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4333\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID',
      ),
    ),
    177 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2026\'',
        'node' => 'cac:Item/cbc:Description',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    178 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'expresion' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3058 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3050\']',
        1 => 'string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) > 20 or string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) < 1 ',
      ),
    ),
    179 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3050 \', cbc:Value)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3050\']',
      ),
    ),
    180 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3051 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3051\']',
        1 => 'string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) > 20 or string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) < 3 ',
      ),
    ),
    181 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{3,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3051 \', cbc:Value)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3051\']',
      ),
    ),
    182 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3052 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3052\']',
        1 => 'string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) > 15 or string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) < 3 ',
      ),
    ),
    183 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3052 \', cbc:Value)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3052\']',
      ),
    ),
    184 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3054 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3054\']',
        1 => 'string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) > 200 or string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) < 3 ',
      ),
    ),
    185 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\n]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3054 \', cbc:Value)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3054\']',
      ),
    ),
    186 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3055 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3055\']',
      ),
    ),
    187 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3056 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3056\']',
        1 => 'string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) > 200 or string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) < 3 ',
      ),
    ),
    188 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\n]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3056 \', cbc:Value)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3056\']',
      ),
    ),
    189 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3057 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3057\']',
      ),
    ),
    190 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3058 \', cbc:Value)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3058\']',
        1 => 'string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) > 200 or string-length(cac:Item/cac:AdditionalItemProperty/cbc:Value) < 3 ',
      ),
    ),
    191 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto 3058 \', cbc:Value)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3058\']',
      ),
    ),
    192 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2027\'',
        'node' => 'cac:Item/cbc:Description',
        'expresion' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:Item/cbc:Description) > 500',
      ),
    ),
    193 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2027\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => '\'^(?!\\s*$)[\\s\\S].{0,}\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    194 => 
    array (
      'primitive' => 'existAndValidateValueTenDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2068\'',
        'errorCodeValidate' => '\'2369\'',
        'node' => 'cac:Price/cbc:PriceAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    195 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2640\'',
        'node' => 'cac:Price/cbc:PriceAmount',
        'expresion' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount > 0 and cac:Price/cbc:PriceAmount > 0',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    196 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2028\'',
        'node' => 'cac:PricingReference/cac:AlternativeConditionPrice/cbc:PriceAmount',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    197 => 
    array (
      'primitive' => 'existAndValidateValueTenDecimal',
      'params' => 
      array (
        'errorCodeValidate' => '\'2367\'',
        'node' => 'cbc:PriceAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    198 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2410\'',
        'node' => 'cbc:PriceTypeCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    199 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'16\'',
        'idCatalogo' => 'cbc:PriceTypeCode',
        'errorCodeValidate' => '\'2410\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    200 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2409\'',
        'node' => 'cbc:PriceTypeCode',
        'expresion' => 'count(cbc:PriceTypeCode) > 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    201 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:PriceTypeCode/@listName',
        'regexp' => '\'^(Tipo de Precio)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    202 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:PriceTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    203 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:PriceTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo16)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    204 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2409\'',
        'node' => 'cac:PricingReference/cac:AlternativeConditionPrice/cbc:PriceTypeCode',
        'expresion' => 'count(cac:PricingReference/cac:AlternativeConditionPrice/cbc:PriceTypeCode) > 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    205 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3224\'',
        'node' => 'cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode = \'02\']/cbc:PriceAmount',
        'expresion' => 'cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode =\'02\']/cbc:PriceAmount > 0 and not(cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\'] and cbc:TaxableAmount > 0])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    206 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3234\'',
        'node' => 'cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode != \'02\']/cbc:PriceAmount',
        'expresion' => 'cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode !=\'02\']/cbc:PriceAmount > 0 and cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\'] and cbc:TaxableAmount > 0]',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    207 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3195\'',
        'node' => 'cac:TaxTotal',
        'expresion' => 'not(cac:TaxTotal)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    208 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3026\'',
        'node' => 'cac:TaxTotal/cbc:TaxAmount',
        'expresion' => 'count(cac:TaxTotal) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    209 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2370\'',
        'errorCodeValidate' => '\'2370\'',
        'node' => 'cbc:LineExtensionAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    210 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4287\'',
        'node' => 'cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode = \'01\']/cbc:PriceAmount',
        'expresion' => 'not(cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount > 0) and ($PrecioUnitarioxItem + 1 ) < $PrecioUnitarioCalculado or ($PrecioUnitarioxItem - 1) > $PrecioUnitarioCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    211 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4288\'',
        'node' => 'cbc:LineExtensionAmount',
        'expresion' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount > 0 and (($ValorVentaxItem + 1 ) < $ValorVentaReferencialxItemCalculado or ($ValorVentaxItem - 1) > $ValorVentaReferencialxItemCalculado)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    212 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4288\'',
        'node' => 'cbc:LineExtensionAmount',
        'expresion' => 'not(cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount > 0) and (($ValorVentaxItem + 1 ) < $ValorVentaxItemCalculado or ($ValorVentaxItem - 1) > $ValorVentaxItemCalculado)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    213 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3063\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3001\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 3001\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoProducto = \'004\'',
      ),
    ),
    214 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3130\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3002\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 3002\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoProducto = \'004\'',
      ),
    ),
    215 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3131\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3003\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 3003\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoProducto = \'004\'',
      ),
    ),
    216 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3132\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3004\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 3004\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoProducto = \'004\'',
      ),
    ),
    217 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3134\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3005\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 3005\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoProducto = \'004\'',
      ),
    ),
    218 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3133\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'3006\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 3006\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoProducto = \'004\'',
      ),
    ),
    219 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3136\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4009\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4009\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    220 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3137\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4008\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4008\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    221 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3138\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4000\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4000\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    222 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3139\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4007\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4007\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    223 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3140\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4001\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4001\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    224 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3141\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4002\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4002\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    225 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3142\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4003\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4003\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    226 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3143\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4004\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4004\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    227 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3144\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4006\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4006\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    228 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3145\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4005\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4005\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0202\'',
      ),
    ),
    229 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3138\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4000\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4000\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0205\'',
      ),
    ),
    230 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3139\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4007\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4007\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0205\'',
      ),
    ),
    231 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3137\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4008\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4008\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0205\'',
      ),
    ),
    232 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3136\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4009\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4009\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0205\'',
      ),
    ),
    233 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3168\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4030\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4030\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4030\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0301\'',
      ),
    ),
    234 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3169\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4031\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4031\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4031\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0301\'',
      ),
    ),
    235 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3170\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4032\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4032\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4032\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0301\'',
      ),
    ),
    236 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3171\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4033\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4033\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4033\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0301\'',
      ),
    ),
    237 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3159\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4040\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4040\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4040\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    238 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3160\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4041\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4041\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4041\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    239 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3161\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4042\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4042\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4042\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    240 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3162\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4043\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4043\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4043\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    241 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3163\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4044\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4044\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4044\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    242 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3164\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4045\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4045\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4045\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    243 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3165\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4046\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4046\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4046\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    244 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3166\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4047\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4047\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4047\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    245 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3167\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4048\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4048\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4048\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    246 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3204\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4049\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4049\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4049\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0302\'',
      ),
    ),
    247 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3176\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4060\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4060\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4060\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0303\'',
      ),
    ),
    248 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3177\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4061\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4061\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4061\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0303\'',
      ),
    ),
    249 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3178\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4062\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4062\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4062\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0303\'',
      ),
    ),
    250 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3179\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4063\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'4063\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 4063\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0303\'',
      ),
    ),
    251 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3146\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5000\']',
        'expresion' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5001\' or text() = \'5002\' or text() = \'5003\'] and not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5000\'])',
        'descripcion' => 'concat(\'Error: en la linea: \', $nroLinea, \' Concepto: 5000\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    252 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3147\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5001\']',
        'expresion' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5000\' or text() = \'5002\' or text() = \'5003\'] and not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5001\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 5001\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    253 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3148\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5002\']',
        'expresion' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5000\' or text() = \'5001\' or text() = \'5003\'] and not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5002\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 5002\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    254 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3149\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5003\']',
        'expresion' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5000\' or text() = \'5001\' or text() = \'5002\'] and not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'5003\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 5003\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    255 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3150\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7001\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7001\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    256 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3151\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7003\']) and $indPrimeraVivienda = \'3\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7003\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    257 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3152\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7004\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7004\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    258 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3153\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7005\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7005\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    259 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3154\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7006\']) and $indPrimeraVivienda = \'3\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7006\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    260 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3155\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7007\']) and $indPrimeraVivienda = \'3\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7007\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    261 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2898\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7013\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7013\']) and ($tipoSeguro = \'1\' or $tipoSeguro = \'2\')',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7013\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'2104\'',
        1 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7015\']',
      ),
    ),
    262 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2898\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7014\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7014\']) and ($tipoSeguro = \'1\' or $tipoSeguro = \'2\')',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7014\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'2104\'',
        1 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7015\']',
      ),
    ),
    263 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2898\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7016\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7016\']) and ($tipoSeguro = \'1\' or $tipoSeguro = \'2\')',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7016\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'2104\'',
        1 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7015\']',
      ),
    ),
    264 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2899\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7013\']) and $tipoSeguro = \'3\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7013\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'2104\'',
        1 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7015\']',
      ),
    ),
    265 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3116\'',
        'node' => 'cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    266 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3117\'',
        'node' => 'cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    267 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3118\'',
        'node' => 'cac:Delivery/cac:DeliveryLocation/cac:Address/cbc:ID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    268 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3119\'',
        'node' => 'cac:Delivery/cac:DeliveryLocation/cac:Address/cac:AddressLine/cbc:Line',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    269 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3120\'',
        'node' => 'cac:Delivery/cac:Despatch/cbc:Instructions',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    270 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3124\'',
        'node' => 'cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'01\']',
        'expresion' => 'not(cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'01\']) or count(cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'01\']) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    271 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3125\'',
        'node' => 'cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'02\']',
        'expresion' => 'not(cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'02\']) or count(cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'02\']) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    272 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3126\'',
        'node' => 'cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'03\']',
        'expresion' => 'not(cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'03\']) or count(cac:Delivery/cac:DeliveryTerms/cbc:ID[text() = \'03\']) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    273 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3122\'',
        'node' => 'cac:Delivery/cac:DeliveryTerms[cbc:ID[text() = \'01\']]/cbc:Amount',
        'expresion' => 'not(cac:Delivery/cac:DeliveryTerms[cbc:ID[text() = \'01\']]/cbc:Amount)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ValorReferencial: 01\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    274 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3122\'',
        'node' => 'cac:Delivery/cac:DeliveryTerms[cbc:ID[text() = \'02\']]/cbc:Amount',
        'expresion' => 'not(cac:Delivery/cac:DeliveryTerms[cbc:ID[text() = \'02\']]/cbc:Amount)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ValorReferencial: 02\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    275 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3122\'',
        'node' => 'cac:Delivery/cac:DeliveryTerms[cbc:ID[text() = \'03\']]/cbc:Amount',
        'expresion' => 'not(cac:Delivery/cac:DeliveryTerms[cbc:ID[text() = \'03\']]/cbc:Amount)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ValorReferencial: 03\')',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    276 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeValidate' => '\'3123\'',
        'node' => 'cac:Delivery/cac:DeliveryTerms[cbc:ID[text() = \'01\' or text() = \'02\' or text() = \'03\']]/cbc:Amount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    277 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:PlannedPickupTransportEvent/cac:Location/cbc:ID',
        'errorCodeValidate' => '\'4200\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    278 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:PlannedDeliveryTransportEvent/cac:Location/cbc:ID',
        'errorCodeValidate' => '\'4200\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    279 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4271\'',
        'node' => 'cac:Delivery/cac:Shipment/cac:Consignment/cbc:CarrierServiceInstructions',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,99}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    280 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4272\'',
        'errorCodeValidate' => '\'4272\'',
        'node' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:DeliveryTerms/cbc:Amount',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
        1 => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:DeliveryTerms/cbc:Amount',
      ),
    ),
    281 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4273\'',
        'node' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:SizeTypeCode',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,14}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    282 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4274\'',
        'node' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:MeasurementDimension/cbc:AttributeID',
        'expresion' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:MeasurementDimension/cbc:AttributeID and cac:Delivery/cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:MeasurementDimension/cbc:AttributeID[text() != \'01\' and text() != \'02\']',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    283 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4278\'',
        'errorCodeValidate' => '\'4278\'',
        'node' => 'cac:Delivery/cac:Shipment/cac:Consignment/cbc:DeclaredForCarriageValueAmount',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:InvoiceLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
        1 => 'cac:Delivery/cac:Shipment/cac:Consignment/cbc:DeclaredForCarriageValueAmount',
      ),
    ),
    284 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cac:Despatch/cac:DespatchAddress/cbc:ID',
        'errorCodeValidate' => '\'4200\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    285 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Despatch/cac:DespatchAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    286 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Despatch/cac:DespatchAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    287 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4236\'',
        'node' => 'cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \', Nodo padre: cac:Delivery/cac:Despatch/cac:DespatchAddress\')',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'string-length(cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line) > 200 or string-length(cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line) < 3 ',
      ),
    ),
    288 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4236\'',
        'node' => 'cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \', Nodo padre: cac:Delivery/cac:Despatch/cac:DespatchAddress\')',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    289 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cac:DeliveryLocation/cac:Address/cbc:ID',
        'errorCodeValidate' => '\'4200\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    290 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:DeliveryLocation/cac:Address/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    291 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:DeliveryLocation/cac:Address/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    292 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4236\'',
        'node' => 'cac:DeliveryLocation/cac:Address/cac:AddressLine/cbc:Line',
        'expresion' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \', Nodo padre: cac:Delivery/cac:DeliveryLocation/cac:Address\')',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'string-length(cac:DeliveryLocation/cac:Address/cac:AddressLine/cbc:Line) > 200 or string-length(cac:DeliveryLocation/cac:Address/cac:AddressLine/cbc:Line) < 3 ',
      ),
    ),
    293 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4236\'',
        'node' => 'cac:DeliveryLocation/cac:Address/cac:AddressLine/cbc:Line',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \', Nodo padre: cac:Delivery/cac:DeliveryLocation/cac:Address\')',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    294 => 
    array (
      'primitive' => 'isTrueExpresionIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4270\'',
        'node' => 'cac:Despatch/cbc:Instructions',
        'expresion' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'string-length(cac:Despatch/cbc:Instructions) > 500 or string-length(cac:Despatch/cbc:Instructions) < 3 ',
      ),
    ),
    295 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4270\'',
        'node' => 'cac:Despatch/cbc:Instructions',
        'regexp' => '\'^(?!\\s*$)[^\\r\\n]+$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    296 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:PlannedPickupTransportEvent/cac:Location/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    297 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:PlannedPickupTransportEvent/cac:Location/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    298 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:PlannedDeliveryTransportEvent/cac:Location/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    299 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:PlannedDeliveryTransportEvent/cac:Location/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    300 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3208\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:DeliveryTerms/cbc:Amount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    301 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:SizeTypeCode/@listName',
        'regexp' => '\'^(Configuracion Veh�cular)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    302 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:SizeTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:MTC)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    303 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3208\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:Delivery/cac:DeliveryTerms/cbc:Amount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    304 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3208\'',
        'node' => 'cac:Shipment/cac:Consignment/cbc:DeclaredForCarriageValueAmount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Delivery',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    305 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4275\'',
        'errorCodeValidate' => '\'4276\'',
        'node' => 'cbc:Measure',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' TipoCarga: \', cbc:AttributeID)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:MeasurementDimension',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:AttributeID = \'01\' or cbc:AttributeID = \'02\'',
      ),
    ),
    306 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4277\'',
        'node' => 'cbc:Measure/@unitCode',
        'regexp' => '\'^(TNE)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' TipoCarga: \', cbc:AttributeID)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment/cac:Consignment/cac:TransportHandlingUnit/cac:MeasurementDimension',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:AttributeID = \'01\' or cbc:AttributeID = \'02\'',
      ),
    ),
    307 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3122\'',
        'errorCodeValidate' => '\'3123\'',
        'node' => 'cbc:Amount',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DeliveryTerms',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    308 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3208\'',
        'node' => 'cbc:Amount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DeliveryTerms',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    309 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'cac:TaxAmount',
        'expresion' => '$monedaDocumento != $monedaBolsa',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    310 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4318\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '(round($CantidadBolsa*$PrecioBolsa * 100) div 100)!=$MontoBolsa',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
        1 => '$CantidadBolsa > 0',
      ),
    ),
    311 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3237\'',
        'node' => 'cbc:BaseUnitMeasure',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    312 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2892\'',
        'errorCodeValidate' => '\'2892\'',
        'node' => 'cbc:BaseUnitMeasure',
        'regexp' => '\'^([0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    313 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4320\'',
        'node' => 'cbc:BaseUnitMeasure',
        'expresion' => 'cbc:BaseUnitMeasure/@unitCode != \'NIU\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    314 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3236\'',
        'node' => 'cbc:BaseUnitMeasure',
        'expresion' => '$CantidadBolsa!=$CantProducto',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
        1 => '$CantidadBolsa > 0',
      ),
    ),
    315 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2892\'',
        'node' => 'cac:TaxCategory/cbc:PerUnitAmount',
        'regexp' => '\'^(?!(0)[0-9]+$)[0-9]{1,3}(\\.[0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    316 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3238\'',
        'node' => 'cac:TaxCategory/cbc:PerUnitAmount',
        'expresion' => '(round(cac:TaxCategory/cbc:PerUnitAmount * 100000) div 100000) = 0 ',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo,\' Tasa::\',(round(cac:TaxCategory/cbc:PerUnitAmount * 100) div 100))',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
        1 => 'cbc:BaseUnitMeasure > 0',
      ),
    ),
    317 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3031\'',
        'errorCodeValidate' => '\'3031\'',
        'node' => 'cbc:TaxableAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
      ),
    ),
    318 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2037\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    319 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'05\'',
        'idCatalogo' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'errorCodeValidate' => '\'2036\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    320 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3103\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '($MontoTributo + 1 ) < $MontoTributoCalculado or ($MontoTributo - 1) > $MontoTributoCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo, \', MontoTributoCalculado: \', $MontoTributoCalculado, \', MontoTributo: \', $MontoTributo, \', BaseImponible: \', $BaseImponible, \', Tasa: \', $Tasa)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'10\' or text() = \'11\' or text() = \'12\' or text() = \'13\' or text() = \'14\' or text = \'15\' or text() = \'16\' or text() = \'17\']',
      ),
    ),
    321 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2033\'',
        'errorCodeValidate' => '\'2033\'',
        'node' => 'cbc:TaxAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    322 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3110\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxAmount != 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9995\' or $codigoTributo = \'9997\' or $codigoTributo = \'9998\'',
      ),
    ),
    323 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3111\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'11\' or text() = \'12\' or text() = \'13\' or text() = \'14\' or text() = \'15\' or text() = \'16\' or text() = \'17\'] and cbc:TaxAmount = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9996\'',
      ),
    ),
    324 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3110\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'21\' or text() = \'31\' or text() = \'32\' or text() = \'33\' or text() = \'34\' or text() = \'35\' or text() = \'36\' or text() = \'37\' or text() = \'40\'] and cbc:TaxAmount != 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9996\'',
      ),
    ),
    325 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3111\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxableAmount > 0 and cbc:TaxAmount = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'1000\' or $codigoTributo = \'1016\'',
      ),
    ),
    326 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3102\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'regexp' => '\'^(?!(0)[0-9]+$)[0-9]{1,3}(\\.[0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    327 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2993\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'11\' or text() = \'12\' or text() = \'13\' or text() = \'14\' or text = \'15\' or text() = \'16\' or text() = \'17\'] and cac:TaxCategory/cbc:Percent = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9996\'',
      ),
    ),
    328 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3104\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:Percent = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\'',
      ),
    ),
    329 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2993\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:Percent = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'1000\' or $codigoTributo = \'1016\'',
      ),
    ),
    330 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3108\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '($MontoTributo + 1 ) < $MontoTributoCalculado or ($MontoTributo - 1) > $MontoTributoCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\'',
      ),
    ),
    331 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3109\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '($MontoTributo + 1 ) < $MontoTributoCalculado or ($MontoTributo - 1) > $MontoTributoCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9999\'',
      ),
    ),
    332 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2371\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
        1 => '$codigoTributo != \'2000\' and $codigoTributo != \'9999\'',
      ),
    ),
    333 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3050\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'expresion' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
      ),
    ),
    334 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2642\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:TaxExemptionReasonCode != \'40\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$tipoOperacion=\'0200\' or $tipoOperacion=\'0201\' or $tipoOperacion=\'0202\' or $tipoOperacion=\'0203\' or $tipoOperacion=\'0204\' or $tipoOperacion=\'0205\' or $tipoOperacion=\'0206\' or $tipoOperacion=\'0207\' or $tipoOperacion=\'0208\'',
      ),
    ),
    335 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    336 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode/@listName',
        'regexp' => '\'^(Afectacion del IGV)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    337 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo07)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    338 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2373\'',
        'node' => 'cac:TaxCategory/cbc:TierRange',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\'',
      ),
    ),
    339 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'08\'',
        'idCatalogo' => 'cac:TaxCategory/cbc:TierRange',
        'errorCodeValidate' => '\'2041\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\'',
      ),
    ),
    340 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3210\'',
        'node' => 'cac:TaxCategory/cbc:TierRange',
        'expresion' => 'cac:TaxCategory/cbc:TierRange',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'2000\'',
      ),
    ),
    341 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2992\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
      ),
    ),
    342 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3067\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'count(key(\'by-tributos-in-line\', concat(cac:TaxCategory/cac:TaxScheme/cbc:ID,\'-\', $nroLinea))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    343 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeName',
        'regexp' => '\'^(Codigo de tributos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    344 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    345 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo05)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    346 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2996\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:Name',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    347 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3021\'',
        'errorCodeValidate' => '\'3021\'',
        'node' => 'cbc:TaxAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    348 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2644\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory[cbc:TaxExemptionReasonCode!=\'17\']/cbc:TaxExemptionReasonCode',
        'expresion' => 'cac:TaxSubtotal[cac:TaxCategory/cbc:TaxExemptionReasonCode=\'17\']/cbc:TaxableAmount > 0 and $root/cac:InvoiceLine/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cbc:TaxExemptionReasonCode!=\'17\']/cbc:TaxableAmount > 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    349 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4293\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '(round(($totalImpuestosxLinea + 1 )*100) div 100) < $SumatoriaImpuestosxLinea or (round(($totalImpuestosxLinea - 1 )*100) div 100) > $SumatoriaImpuestosxLinea',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\' or text() = \'7152\' or text() = \'1016\' or text() = \'2000\' or text() = \'9999\']',
      ),
    ),
    350 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4294\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\' or text() = \'1016\']]/cbc:TaxableAmount',
        'expresion' => '$TributoISCxLinea > 0 and (($BaseIGVIVAPxLinea + 1 ) < $BaseIGVIVAPxLineaCalculado or ($BaseIGVIVAPxLinea - 1) > $BaseIGVIVAPxLineaCalculado)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$BaseIGVIVAPxLinea',
      ),
    ),
    351 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4294\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\' or text() = \'1016\']]/cbc:TaxableAmount',
        'expresion' => '$TributoISCxLinea = 0 and $BaseIGVIVAPxLinea != $BaseIGVIVAPxLineaCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$BaseIGVIVAPxLinea',
      ),
    ),
    352 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3105\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'count(cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\' or text() = \'1016\' or text() = \'9995\' or text() = \'9996\' or text() = \'7152\' or text() = \'9997\' or text() = \'9998\']) < 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    353 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3223\'',
        'node' => 'cac:TaxSubtotal[cbc:TaxableAmount > 0]/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'not((cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'1000\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                            (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'1000\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                            (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'1000\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 3) or                            (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'1016\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                            (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9995\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                            (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9996\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9996\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 3) or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9996\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9997\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9997\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 3) or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9997\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2) or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9998\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2)or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9998\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 3) or                             (cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9998\' and cbc:TaxableAmount > 0] and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID = \'9999\' and cbc:TaxableAmount > 0] and count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) = 2))',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'count(cac:TaxSubtotal[cbc:TaxableAmount > 0]) > 1',
      ),
    ),
    354 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3114\'',
        'node' => 'cbc:ChargeIndicator',
        'expresion' => 'cbc:ChargeIndicator/text() = \'false\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'47\' or $codigoCargoDescuento = \'48\'',
      ),
    ),
    355 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3114\'',
        'node' => 'cbc:ChargeIndicator',
        'expresion' => 'cbc:ChargeIndicator/text() = \'true\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'00\' or $codigoCargoDescuento = \'01\'',
      ),
    ),
    356 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3073\'',
        'node' => 'cbc:AllowanceChargeReasonCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    357 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'53\'',
        'idCatalogo' => 'cbc:AllowanceChargeReasonCode',
        'errorCodeValidate' => '\'2954\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    358 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4268\'',
        'node' => 'cbc:AllowanceChargeReasonCode',
        'regexp' => '\'^(00|01|47|48)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    359 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:AllowanceChargeReasonCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    360 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:AllowanceChargeReasonCode/@listName',
        'regexp' => '\'^(Cargo/descuento)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    361 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:AllowanceChargeReasonCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo53)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    362 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3052\'',
        'node' => 'cbc:MultiplierFactorNumeric',
        'regexp' => '\'^(?!(0)[0-9]+$)[0-9]{1,3}(\\.[0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    363 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2955\'',
        'node' => 'cbc:Amount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    364 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4289\'',
        'node' => 'cbc:Amount',
        'expresion' => 'cbc:MultiplierFactorNumeric > 0 and (($Monto + 1 ) < $MontoCalculado or ($Monto - 1) > $MontoCalculado)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
        'isError' => 'false()',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    365 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3053\'',
        'node' => 'cbc:BaseAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Cargo/Descuento: \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    366 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4235\'',
        'node' => 'cbc:Name',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    367 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:NameCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    368 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:NameCode/@listName',
        'regexp' => '\'^(Propiedad del item)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    369 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:NameCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo55)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    370 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3001\'',
      ),
    ),
    371 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3001\'',
        1 => 'string-length(cbc:Value) > 15 or string-length(cbc:Value) < 1 ',
      ),
    ),
    372 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3001\'',
      ),
    ),
    373 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3002\'',
      ),
    ),
    374 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3002\'',
        1 => 'string-length(cbc:Value) > 100 or string-length(cbc:Value) < 1 ',
      ),
    ),
    375 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3002\'',
      ),
    ),
    376 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3003\'',
      ),
    ),
    377 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3003\'',
        1 => 'string-length(cbc:Value) > 150 or string-length(cbc:Value) < 1 ',
      ),
    ),
    378 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3003\'',
      ),
    ),
    379 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3004\'',
      ),
    ),
    380 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3004\'',
        1 => 'string-length(cbc:Value) > 100 or string-length(cbc:Value) < 1 ',
      ),
    ),
    381 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3004\'',
      ),
    ),
    382 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3005\'',
      ),
    ),
    383 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3135\'',
        'node' => 'cbc:ValueQuantity',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3006\'',
      ),
    ),
    384 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4281\'',
        'errorCodeValidate' => '\'4281\'',
        'node' => 'cbc:ValueQuantity',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3006\'',
      ),
    ),
    385 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3115\'',
        'node' => 'cbc:ValueQuantity/@unitCode',
        'regexp' => '\'^(TNE)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3006\'',
      ),
    ),
    386 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3050\'',
      ),
    ),
    387 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3051\'',
      ),
    ),
    388 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3052\'',
      ),
    ),
    389 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3053\'',
      ),
    ),
    390 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'06\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3053\'',
      ),
    ),
    391 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3054\'',
      ),
    ),
    392 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3055\'',
      ),
    ),
    393 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3056\'',
      ),
    ),
    394 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3057\'',
      ),
    ),
    395 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3058\'',
      ),
    ),
    396 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3059\'',
      ),
    ),
    397 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3172\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartTime',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'3060\'',
      ),
    ),
    398 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4000\'',
      ),
    ),
    399 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'04\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4000\'',
      ),
    ),
    400 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4001\'',
      ),
    ),
    401 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'04\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4001\'',
      ),
    ),
    402 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4002\'',
      ),
    ),
    403 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4003\'',
      ),
    ),
    404 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4004\'',
      ),
    ),
    405 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3135\'',
        'node' => 'cac:UsabilityPeriod/cbc:DurationMeasure',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4005\'',
      ),
    ),
    406 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4281\'',
        'node' => 'cac:UsabilityPeriod/cbc:DurationMeasure',
        'regexp' => '\'^[0-9]{1,4}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4005\'',
      ),
    ),
    407 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4313\'',
        'node' => 'cac:UsabilityPeriod/cbc:DurationMeasure/@unitCode',
        'regexp' => '\'^(DAY)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4005\'',
      ),
    ),
    408 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4006\'',
      ),
    ),
    409 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4007\'',
      ),
    ),
    410 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4007\'',
        1 => 'string-length(cbc:Value) > 200 or string-length(cbc:Value) < 3 ',
      ),
    ),
    411 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4007\'',
      ),
    ),
    412 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4008\'',
      ),
    ),
    413 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'06\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4008\'',
      ),
    ),
    414 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4009\'',
      ),
    ),
    415 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4009\'',
        1 => 'string-length(cbc:Value) > 20 or string-length(cbc:Value) < 3 ',
      ),
    ),
    416 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4009\'',
      ),
    ),
    417 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4030\'',
      ),
    ),
    418 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4030\'',
      ),
    ),
    419 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4031\'',
      ),
    ),
    420 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4031\'',
        1 => 'string-length(cbc:Value) > 200 or string-length(cbc:Value) < 3 ',
      ),
    ),
    421 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4031\'',
      ),
    ),
    422 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4032\'',
      ),
    ),
    423 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4032\'',
      ),
    ),
    424 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4033\'',
      ),
    ),
    425 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4033\'',
        1 => 'string-length(cbc:Value) > 200 or string-length(cbc:Value) < 3 ',
      ),
    ),
    426 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4033\'',
      ),
    ),
    427 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4040\'',
      ),
    ),
    428 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4040\'',
        1 => 'string-length(cbc:Value) > 200 or string-length(cbc:Value) < 3 ',
      ),
    ),
    429 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4040\'',
      ),
    ),
    430 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4041\'',
      ),
    ),
    431 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'06\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4041\'',
      ),
    ),
    432 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4042\'',
      ),
    ),
    433 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4042\'',
      ),
    ),
    434 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4043\'',
      ),
    ),
    435 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4043\'',
        1 => 'string-length(cbc:Value) > 200 or string-length(cbc:Value) < 3 ',
      ),
    ),
    436 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4043\'',
      ),
    ),
    437 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4044\'',
      ),
    ),
    438 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4044\'',
      ),
    ),
    439 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4045\'',
      ),
    ),
    440 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4045\'',
        1 => 'string-length(cbc:Value) > 200 or string-length(cbc:Value) < 3 ',
      ),
    ),
    441 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4045\'',
      ),
    ),
    442 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4046\'',
      ),
    ),
    443 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4046\'',
        1 => 'string-length(cbc:Value) > 100 or string-length(cbc:Value) < 1 ',
      ),
    ),
    444 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4046\'',
      ),
    ),
    445 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3172\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartTime',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4047\'',
      ),
    ),
    446 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4048\'',
      ),
    ),
    447 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4049\'',
      ),
    ),
    448 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4049\'',
        1 => 'string-length(cbc:Value) > 20 or string-length(cbc:Value) < 1',
      ),
    ),
    449 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4049\'',
      ),
    ),
    450 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4060\'',
      ),
    ),
    451 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4060\'',
        1 => 'string-length(cbc:Value) > 30 or string-length(cbc:Value) < 3 ',
      ),
    ),
    452 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4060\'',
      ),
    ),
    453 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4061\'',
      ),
    ),
    454 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4061\'',
        1 => 'string-length(cbc:Value) > 10 or string-length(cbc:Value) < 3 ',
      ),
    ),
    455 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\n]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4061\'',
      ),
    ),
    456 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4062\'',
      ),
    ),
    457 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3065\'',
        'node' => 'cac:UsabilityPeriod/cbc:EndDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'4063\'',
      ),
    ),
    458 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5000\'',
      ),
    ),
    459 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5000\'',
        1 => 'string-length(cbc:Value) > 20 or string-length(cbc:Value) < 1 ',
      ),
    ),
    460 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5000\'',
      ),
    ),
    461 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5001\'',
      ),
    ),
    462 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5001\'',
        1 => 'string-length(cbc:Value) > 10 or string-length(cbc:Value) < 1 ',
      ),
    ),
    463 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5001\'',
      ),
    ),
    464 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5002\'',
      ),
    ),
    465 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5002\'',
        1 => 'string-length(cbc:Value) > 30 or string-length(cbc:Value) < 1 ',
      ),
    ),
    466 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5002\'',
      ),
    ),
    467 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5003\'',
      ),
    ),
    468 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5003\'',
        1 => 'string-length(cbc:Value) > 30 or string-length(cbc:Value) < 1 ',
      ),
    ),
    469 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'5003\'',
      ),
    ),
    470 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7000\'',
      ),
    ),
    471 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7001\'',
      ),
    ),
    472 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'26\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7001\'',
      ),
    ),
    473 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7002\'',
      ),
    ),
    474 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'27\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7002\'',
      ),
    ),
    475 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7003\'',
      ),
    ),
    476 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7003\'',
        1 => 'string-length(cbc:Value) > 50 or string-length(cbc:Value) < 3 ',
      ),
    ),
    477 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[^\\n\\t\\r\\f]{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7003\'',
      ),
    ),
    478 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7004\'',
      ),
    ),
    479 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7004\'',
        1 => 'string-length(cbc:Value) > 50 or string-length(cbc:Value) < 3 ',
      ),
    ),
    480 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[^\\n\\t\\r\\f]{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7004\'',
      ),
    ),
    481 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7005\'',
      ),
    ),
    482 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7005\'',
      ),
    ),
    483 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7006\'',
      ),
    ),
    484 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => 'cbc:Value',
        'errorCodeValidate' => '\'4280\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7006\'',
      ),
    ),
    485 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7007\'',
      ),
    ),
    486 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7007\'',
        1 => 'string-length(cbc:Value) > 200 or string-length(cbc:Value) < 3 ',
      ),
    ),
    487 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[^\\n\\t\\r\\f]{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7007\'',
      ),
    ),
    488 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7008\' or $codigoConcepto = \'7009\' or $codigoConcepto = \'7010\' or $codigoConcepto = \'7011\'',
      ),
    ),
    489 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7013\'',
      ),
    ),
    490 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7013\'',
        1 => 'string-length(cbc:Value) > 50 or string-length(cbc:Value) < 1 ',
      ),
    ),
    491 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[^\\t\\n\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7013\'',
      ),
    ),
    492 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7015\'',
      ),
    ),
    493 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[123]{1}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7015\'',
      ),
    ),
    494 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7012\' or $codigoConcepto = \'7016\'',
      ),
    ),
    495 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?=.*[1-9])[0-9]{1,15}(\\.[0-9]{1,2})?$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7012\' or $codigoConcepto = \'7016\'',
      ),
    ),
    496 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3243\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7014\'',
      ),
    ),
    497 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:UsabilityPeriod/cbc:StartDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7014\'',
      ),
    ),
    498 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4366\'',
        'node' => 'cac:UsabilityPeriod/cbc:EndDate',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7014\'',
      ),
    ),
    499 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cac:UsabilityPeriod/cbc:EndDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' ConceptoItem \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoConcepto = \'7014\'',
      ),
    ),
    500 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3003\'',
        'errorCodeValidate' => '\'2999\'',
        'node' => 'cbc:TaxableAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
      ),
    ),
    501 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2048\'',
        'errorCodeValidate' => '\'2048\'',
        'node' => 'cbc:TaxAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    502 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3000\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxAmount != 0',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9995\' or $codigoTributo = \'9997\' or $codigoTributo = \'9998\'',
      ),
    ),
    503 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3059\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    504 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'05\'',
        'idCatalogo' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'errorCodeValidate' => '\'3007\'',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    505 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeName',
        'regexp' => '\'^(Codigo de tributos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    506 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    507 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo05)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    508 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2054\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:Name',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    509 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2052\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:TaxTypeCode',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    510 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3068\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'count(key(\'by-tributos-in-root\', cac:TaxCategory/cac:TaxScheme/cbc:ID)) > 1',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    511 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3020\'',
        'errorCodeValidate' => '\'3020\'',
        'node' => 'cbc:TaxAmount',
        'isGreaterCero' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    512 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4022\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'not(cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]) or cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]/cbc:TaxableAmount = 0',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$root/cbc:Note[@languageLocaleID = \'2001\']',
      ),
    ),
    513 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4023\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'not(cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]) or cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]/cbc:TaxableAmount = 0',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$root/cbc:Note[@languageLocaleID = \'2002\']',
      ),
    ),
    514 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4024\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'not(cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]) or cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]/cbc:TaxableAmount = 0',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$root/cbc:Note[@languageLocaleID = \'2003\']',
      ),
    ),
    515 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4244\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'not(cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]) or cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]/cbc:TaxableAmount = 0',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$root/cbc:Note[@languageLocaleID = \'2008\']',
      ),
    ),
    516 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3107\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme[cbc:ID[text() = \'1000\' or text() = \'1016\' or text() = \'9997\' or text() = \'9998\' or text() = \'9999\' or text() = \'2000\']]/cbc:ID',
        'expresion' => 'count(cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\' or text() = \'1016\' or text() = \'9997\' or text() = \'9998\' or text() = \'9999\' or text() = \'2000\']) > 0',
        'descripcion' => 'concat(\'Error tipoOperacion \', $tipoOperacion)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$tipoOperacion=\'0200\' or $tipoOperacion=\'0201\' or $tipoOperacion=\'0202\' or $tipoOperacion=\'0203\' or $tipoOperacion=\'0204\' or $tipoOperacion=\'0205\' or $tipoOperacion=\'0206\' or $tipoOperacion=\'0207\' or $tipoOperacion=\'0208\'',
      ),
    ),
    517 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2650\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxAmount',
        'expresion' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxableAmount > 0 and $root/cac:InvoiceLine/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'17\']]/cbc:TaxableAmount > 0 ',
        'descripcion' => 'concat(\'Error tipoOperacion \', $tipoOperacion)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    518 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2416\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount',
        'expresion' => 'not(cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]) or cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount = 0',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$root/cbc:Note[@languageLocaleID = \'1002\']',
      ),
    ),
    519 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2641\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme[cbc:ID = \'9996\']/cbc:ID',
        'expresion' => '$root/cac:InvoiceLine/cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode =\'02\']/cbc:PriceAmount > 0 and (not(cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]) or cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount = 0)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    520 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4295\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9995\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseExportacion + 1 ) < $totalBaseExportacionxLinea or ($totalBaseExportacion - 1) > $totalBaseExportacionxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    521 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4297\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]/cbc:TaxableAmount',
        'expresion' => '(round(($totalBaseExoneradas + 1 ) * 100) div 100)  < $totalBaseExoneradasxLineaCalc or (round(($totalBaseExoneradas - 1) * 100) div 100)  > $totalBaseExoneradasxLineaCalc',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    522 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4296\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9998\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseInafectas + 1 ) < $totalCalculado or ($totalBaseInafectas - 1) > $totalCalculado',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    523 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4298\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseGratuitas + 1 ) < $totalBaseGratuitasxLinea or ($totalBaseGratuitas - 1) > $totalBaseGratuitasxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    524 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4303\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseISC + 1 ) < $totalBaseISCxLinea or ($totalBaseISC - 1) > $totalBaseISCxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    525 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4304\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9999\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseOtros + 1 ) < $totalBaseOtrosxLinea or ($totalBaseOtros - 1) > $totalBaseOtrosxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    526 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4299\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseIGV + 1 ) < $totalBaseIGVCalculado or ($totalBaseIGV - 1) > $totalBaseIGVCalculado',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]/cbc:TaxableAmount > 0',
      ),
    ),
    527 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4300\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1016\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseIVAP + 1 ) < $totalBaseIVAPCalculado or ($totalBaseIVAP - 1) > $totalBaseIVAPCalculado',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1016\']]/cbc:TaxableAmount > 0',
      ),
    ),
    528 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4311\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxAmount',
        'expresion' => '($totalGratuitas + 1 ) < $totalGratuitasxLinea or ($totalGratuitas - 1) > $totalGratuitasxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    529 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4301\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '(round(($totalImpuestos + 1 ) * 100) div 100) < (round($SumatoriaImpuestos * 100) div 100) or (round(($totalImpuestos - 1) * 100) div 100) > (round($SumatoriaImpuestos * 100) div 100)',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    530 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4305\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxAmount',
        'expresion' => '($totalISC + 1 ) < $totalISCxLinea or ($totalISC - 1) > $totalISCxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    531 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4306\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9999\']]/cbc:TaxAmount',
        'expresion' => '($totalOtros + 1 ) < $totalOtrosxLinea or ($totalOtros - 1) > $totalOtrosxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    532 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4020\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:Taxmount',
        'expresion' => '$root/cac:InvoiceLine/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxAmount > 0 and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxAmount = 0',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    533 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3114\'',
        'node' => 'cbc:ChargeIndicator',
        'expresion' => 'cbc:ChargeIndicator/text() = \'false\'',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'45\' or $codigoCargoDescuento = \'46\' or $codigoCargoDescuento = \'49\' or $codigoCargoDescuento = \'50\' or $codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    534 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3114\'',
        'node' => 'cbc:ChargeIndicator',
        'expresion' => 'cbc:ChargeIndicator/text() = \'true\'',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'02\' or $codigoCargoDescuento = \'03\' or $codigoCargoDescuento = \'04\' or $codigoCargoDescuento = \'05\' or $codigoCargoDescuento = \'06\'',
      ),
    ),
    535 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3114\'',
        'node' => 'cbc:ChargeIndicator',
        'expresion' => 'cbc:ChargeIndicator/text() = \'true\'',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'62\'',
      ),
    ),
    536 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3262\'',
        'node' => 'cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => '$root/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'6\'',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'62\'',
      ),
    ),
    537 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3072\'',
        'node' => 'cbc:AllowanceChargeReasonCode',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    538 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4291\'',
        'node' => 'cbc:ChargeIndicator',
        'expresion' => 'cbc:AllowanceChargeReasonCode[text() = \'00\' or text() = \'01\' or text() = \'47\' or text() = \'48\']',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
        'isError' => 'false()',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    539 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'53\'',
        'idCatalogo' => 'cbc:AllowanceChargeReasonCode',
        'errorCodeValidate' => '\'3071\'',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    540 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:AllowanceChargeReasonCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    541 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:AllowanceChargeReasonCode/@listName',
        'regexp' => '\'^(Cargo/descuento)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    542 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:AllowanceChargeReasonCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo53)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    543 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3025\'',
        'node' => 'cbc:MultiplierFactorNumeric',
        'regexp' => '\'^(?=.*[1-9])[0-9]{1,3}(\\.[0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'62\' or $codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    544 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2968\'',
        'node' => 'cbc:Amount',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'62\' or $codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    545 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3025\'',
        'node' => 'cbc:MultiplierFactorNumeric',
        'regexp' => '\'^(?!(0)[0-9]+$)[0-9]{1,3}(\\.[0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    546 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2968\'',
        'node' => 'cbc:Amount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    547 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2792\'',
        'node' => 'cbc:Amount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    548 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4322\'',
        'node' => 'cbc:Amount',
        'expresion' => 'cbc:MultiplierFactorNumeric > 0 and (($MontoCalculado + 1 ) < $Monto or ($MontoCalculado - 1) > $Monto)',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
        'isError' => 'false()',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento != \'45\' and $codigoCargoDescuento != \'51\' and $codigoCargoDescuento != \'52\' and $codigoCargoDescuento != \'53\' and $codigoCargoDescuento != \'62\'',
      ),
    ),
    549 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3263\'',
        'node' => 'cbc:Amount',
        'expresion' => 'cbc:MultiplierFactorNumeric > 0 and (($MontoCalculado + 1 ) < $Monto or ($MontoCalculado - 1) > $Monto)',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'62\'',
      ),
    ),
    550 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3074\'',
        'node' => 'cbc:Amount',
        'expresion' => 'cbc:Amount = 0',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'45\'',
      ),
    ),
    551 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3016\'',
        'node' => 'cbc:BaseAmount',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'62\'',
      ),
    ),
    552 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3264\'',
        'node' => 'cbc:BaseAmount',
        'expresion' => 'cbc:BaseAmount > $importeComprobante',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'62\'',
      ),
    ),
    553 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3016\'',
        'node' => 'cbc:BaseAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    554 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3016\'',
        'node' => 'cbc:BaseAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    555 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3092\'',
        'node' => 'cbc:BaseAmount',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'45\'',
      ),
    ),
    556 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3092\'',
        'node' => 'cbc:BaseAmount',
        'expresion' => 'cbc:BaseAmount = 0',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'45\'',
      ),
    ),
    557 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3233\'',
        'node' => 'cbc:BaseAmount',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    558 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3233\'',
        'node' => 'cbc:BaseAmount',
        'expresion' => 'cbc:BaseAmount = 0',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    559 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2797\'',
        'node' => 'cbc:BaseAmount',
        'expresion' => 'cbc:BaseAmount > $importeComprobante',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
        1 => '$monedaComprobante = \'PEN\'',
      ),
    ),
    560 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2798\'',
        'node' => 'cbc:Amount',
        'expresion' => '($MontoCalculadoPercepcion + 1 ) < $MontoPercepcion or ($MontoCalculadoPercepcion - 1) > $MontoPercepcion',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    561 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2788\'',
        'node' => 'cbc:BaseAmount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error Cargo/Descuento \', $codigoCargoDescuento)',
      ),
      'context' => 'cac:AllowanceCharge',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoCargoDescuento = \'51\' or $codigoCargoDescuento = \'52\' or $codigoCargoDescuento = \'53\'',
      ),
    ),
    562 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4249\'',
        'idCatalogo' => 'cbc:ID',
        'catalogo' => '\'20\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID',
      ),
    ),
    563 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cbc:ID/@schemeName',
        'regexp' => '\'^(Motivo de Traslado)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    564 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    565 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo20)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    566 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4155\'',
        'node' => 'cbc:GrossWeightMeasure',
        'isGreaterCero' => 'false()',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    567 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4154\'',
        'node' => 'cbc:GrossWeightMeasure/@unitCode',
        'regexp' => '\'^(KGM)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    568 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4043\'',
        'idCatalogo' => 'cac:ShipmentStage/cbc:TransportModeCode',
        'catalogo' => '\'18\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    569 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:ShipmentStage/cbc:TransportModeCode/@listName',
        'regexp' => '\'^(Modalidad de Transporte)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    570 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:ShipmentStage/cbc:TransportModeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    571 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cac:ShipmentStage/cbc:TransportModeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo18)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    572 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4126\'',
        'node' => 'cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cac:ShipmentStage/cbc:TransportModeCode',
      ),
    ),
    573 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4126\'',
        'node' => 'cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and not(cac:ShipmentStage/cbc:TransportModeCode)',
      ),
    ),
    574 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4286\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cac:ShipmentStage/cbc:TransportModeCode = \'01\'',
      ),
    ),
    575 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4159\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cac:ShipmentStage/cbc:TransportModeCode = \'02\'',
      ),
    ),
    576 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4160\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and not(cac:ShipmentStage/cbc:TransportModeCode)',
      ),
    ),
    577 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4161\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
      ),
    ),
    578 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4162\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
      ),
    ),
    579 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4164\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID and not(cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName)',
      ),
    ),
    580 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4165\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,99}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
      ),
    ),
    581 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4163\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[\\d]{11}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    582 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    583 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    584 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    585 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4156\'',
        'node' => 'cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0110\' and cac:ShipmentStage/cbc:TransportModeCode = \'01\' and cac:ShipmentStage/cac:DriverPerson/cbc:ID',
      ),
    ),
    586 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4157\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTransporte = \'01\' and $numeroPlaca',
      ),
    ),
    587 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4157\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTransporte = \'02\' and not(cac:ShipmentStage/cac:DriverPerson/cbc:ID)',
      ),
    ),
    588 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4157\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and not($modalidadTransporte) and not(cac:ShipmentStage/cac:DriverPerson/cbc:ID)',
      ),
    ),
    589 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4167\'',
        'node' => 'cac:Party/cac:PartyName/cbc:Name',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:LicensePlateID \', cbc:LicensePlateID)',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID and (string-length(cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID) > 8 or string-length(cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID) < 6 )',
      ),
    ),
    590 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4167\'',
        'node' => 'cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID',
        'regexp' => '\'^[A-Z0-9\\-]{5,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    591 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4170\'',
        'node' => 'cac:TransportHandlingUnit/cac:TransportEquipment/cbc:ID',
        'regexp' => '\'^(?!\\s*$)[^\\s].{5,7}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    592 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4156\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'0110\' and cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID',
      ),
    ),
    593 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4158\'',
        'node' => 'cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and $modalidadTransporte = \'01\' and $numeroDocumentoId and not($numeroPlaca)',
      ),
    ),
    594 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4158\'',
        'node' => 'cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and $modalidadTransporte = \'02\' and not($numeroPlaca)',
      ),
    ),
    595 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4158\'',
        'node' => 'cac:ShipmentStage/cac:TransportMeans/cac:RoadTransport/cbc:LicensePlateID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and not($modalidadTransporte) and not($numeroPlaca)',
      ),
    ),
    596 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4174\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
        'regexp' => '\'^(?!\\s*$)[^\\s]{1,15}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoConductores =\'0\' or $tipoDocumentoConductores =\'A\'',
      ),
    ),
    597 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4174\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
        'regexp' => '\'^[\\d]{8}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoConductores =\'1\'',
      ),
    ),
    598 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4174\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
        'regexp' => '\'^(?!\\s*$)[^\\s]{1,12}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoConductores =\'4\' or $tipoDocumentoConductores =\'7\'',
      ),
    ),
    599 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4172\'',
        'errorCodeValidate' => '\'4173\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID/@schemeID',
        'regexp' => '\'^(1|4|7|A)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID',
      ),
    ),
    600 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    601 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    602 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:ShipmentStage/cac:DriverPerson/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    603 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4127\'',
        'node' => 'cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and $modalidadTransporte and not(cac:Delivery/cac:DeliveryAddress/cbc:ID)',
      ),
    ),
    604 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4127\'',
        'node' => 'cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and $modalidadTransporte and not(cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line)',
      ),
    ),
    605 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4135\'',
        'node' => 'cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'expresion' => 'cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and not($modalidadTransporte)',
      ),
    ),
    606 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4135\'',
        'node' => 'cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'expresion' => 'cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and not($modalidadTransporte)',
      ),
    ),
    607 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4176\'',
        'idCatalogo' => 'cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'catalogo' => '\'13\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Delivery/cac:DeliveryAddress/cbc:ID',
      ),
    ),
    608 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Delivery/cac:DeliveryAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    609 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Delivery/cac:DeliveryAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    610 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4179\'',
        'node' => 'cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,99}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    611 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4128\'',
        'node' => 'cac:OriginAddress/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and $modalidadTransporte and not(cac:OriginAddress/cbc:ID)',
      ),
    ),
    612 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4128\'',
        'node' => 'cac:OriginAddress/cac:AddressLine/cbc:Line',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and $modalidadTransporte and not(cac:OriginAddress/cac:AddressLine/cbc:Line)',
      ),
    ),
    613 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4136\'',
        'node' => 'cac:OriginAddress/cbc:ID',
        'expresion' => 'cac:OriginAddress/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and not($modalidadTransporte)',
      ),
    ),
    614 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4136\'',
        'node' => 'cac:OriginAddress/cac:AddressLine/cbc:Line',
        'expresion' => 'cac:OriginAddress/cac:AddressLine/cbc:Line',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and not($modalidadTransporte)',
      ),
    ),
    615 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4181\'',
        'idCatalogo' => 'cac:OriginAddress/cbc:ID',
        'catalogo' => '\'13\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginAddress/cbc:ID',
      ),
    ),
    616 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:OriginAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    617 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:OriginAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    618 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4184\'',
        'node' => 'cac:OriginAddress/cac:AddressLine/cbc:Line',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,99}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    619 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4129\'',
        'node' => 'cac:Delivery/cac:DeliveryParty/cbc:MarkAttentionIndicator',
        'expresion' => 'cac:Delivery/cac:DeliveryParty/cbc:MarkAttentionIndicator',
        'isError' => 'false()',
      ),
      'context' => 'cac:Delivery/cac:Shipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado and $modalidadTransporte',
      ),
    ),
    620 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3211\'',
        'node' => 'cbc:ID',
        'expresion' => 'cbc:PaidAmount and not(string(cbc:ID))',
        'descripcion' => 'concat(\'Identificador de anticipo : \', cbc:ID)',
      ),
      'context' => 'cac:PrepaidPayment',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    621 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3212\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-idprepaid-in-root\', cbc:ID)) > 1',
        'descripcion' => 'concat(\'Identificador de anticipo : \', cbc:ID)',
      ),
      'context' => 'cac:PrepaidPayment',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    622 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3213\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-document-additional-anticipo\', cbc:ID)) = 0',
        'descripcion' => 'concat(\'Identificador de anticipo : \', cbc:ID)',
      ),
      'context' => 'cac:PrepaidPayment',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    623 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cbc:ID/@schemeName',
        'regexp' => '\'^(Anticipo)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Identificador de anticipo : \', cbc:ID)',
      ),
      'context' => 'cac:PrepaidPayment',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    624 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Identificador de anticipo : \', cbc:ID)',
      ),
      'context' => 'cac:PrepaidPayment',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    625 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2503\'',
        'node' => 'cbc:PaidAmount',
        'expresion' => 'cbc:PaidAmount and cbc:PaidAmount <= 0',
        'descripcion' => 'concat(\'Identificador de anticipo : \', cbc:ID)',
      ),
      'context' => 'cac:PrepaidPayment',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    626 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3220\'',
        'node' => '$root/cac:LegalMonetaryTotal/cbc:PrepaidAmount',
        'expresion' => 'not($root/cac:LegalMonetaryTotal/cbc:PrepaidAmount > 0)',
      ),
      'context' => 'cac:PrepaidPayment',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => 'cbc:PaidAmount and cbc:PaidAmount > 0',
      ),
    ),
    627 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3128\'',
        'node' => 'cbc:ID',
        'expresion' => 'cbc:ID/text() = \'Detraccion\'',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion !=\'1001\' and $tipoOperacion !=\'1002\' and $tipoOperacion !=\'1003\' and $tipoOperacion !=\'1004\'',
      ),
    ),
    628 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3248\'',
        'node' => 'cbc:PaymentMeansID',
        'expresion' => 'count(key(\'by-cuotas-in-root\', cbc:PaymentMeansID)) > 1',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Forma Pago : \', cac:PaymentTerms/cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    629 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3245\'',
        'node' => 'cbc:PaymentMeansID',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
      ),
    ),
    630 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3246\'',
        'node' => 'cbc:PaymentMeansID',
        'regexp' => '\'^((Contado)|(Credito)|(Cuota[0-9]{3}))$\'',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
      ),
    ),
    631 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3249\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count(cac:PaymentTerms[cbc:ID[text() = \'FormaPago\'] and cbc:PaymentMeansID[substring(text(),1,5) = \'Cuota\']]) = 0',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    632 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3251\'',
        'node' => 'cbc:Amount',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    633 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3250\'',
        'node' => 'cbc:Amount',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    634 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3265\'',
        'node' => 'cbc:Amount',
        'expresion' => 'cac:LegalMonetaryTotal/cbc:PayableAmount < cbc:Amount',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    635 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'cbc:Amount/@currencyID',
        'expresion' => '$root/cbc:DocumentCurrencyCode != cbc:Amount/@currencyID',
        'isError' => 'boolean(number(1))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    636 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3252\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count(cac:PaymentTerms[cbc:ID[text() = \'FormaPago\'] and cac:PaymentTerms/cbc:PaymentMeansID[text() = \'Credito\' or substring(text(),1,5) = \'Cuota\']]) > 1',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    637 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3254\'',
        'node' => 'cbc:Amount',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    638 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3253\'',
        'node' => 'cbc:Amount',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    639 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3266\'',
        'node' => 'cbc:Amount',
        'expresion' => 'cac:LegalMonetaryTotal/cbc:PayableAmount < cbc:Amount',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    640 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'cbc:Amount/@currencyID',
        'expresion' => '$root/cbc:DocumentCurrencyCode != cbc:Amount/@currencyID',
        'isError' => 'boolean(number(1))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    641 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3256\'',
        'node' => 'cbc:PaymentDueDate',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    642 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3255\'',
        'node' => 'cbc:PaymentDueDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    643 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3267\'',
        'node' => 'cbc:PaymentDueDate',
        'expresion' => 'number(concat(substring($fechaEmision,1,4),substring($fechaEmision,6,2),substring($fechaEmision,9,2))) > number(concat(substring($fechaPago,1,4),substring($fechaPago,6,2),substring($fechaPago,9,2)))',
        'isError' => 'boolean(number(0))',
        'descripcion' => 'concat(\'Error en \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'substring(cbc:PaymentMeansID,1,5) = \'Cuota\'',
      ),
    ),
    644 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3129\'',
        'node' => 'cbc:PaymentMeansID',
        'expresion' => 'cbc:PaymentMeansID/text() != \'004\'',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1002\'',
      ),
    ),
    645 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3129\'',
        'node' => 'cbc:PaymentMeansID',
        'expresion' => 'cbc:PaymentMeansID/text() != \'028\'',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1003\'',
      ),
    ),
    646 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3129\'',
        'node' => 'cbc:PaymentMeansID',
        'expresion' => 'cbc:PaymentMeansID/text() != \'027\'',
        'isError' => 'boolean(number(0))',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOperacion = \'1004\'',
      ),
    ),
    647 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cbc:PaymentMeansID/@schemeName',
        'regexp' => '\'^(Codigo de detraccion)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    648 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cbc:PaymentMeansID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    649 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cbc:PaymentMeansID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo54)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    650 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2788\'',
        'node' => 'cbc:Amount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => ' cbc:Amount and cbc:ID = \'Percepcion\'',
      ),
    ),
    651 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3034\'',
        'node' => 'cac:PayeeFinancialAccount/cbc:ID',
      ),
      'context' => 'cac:PaymentMeans',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoProducto',
      ),
    ),
    652 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3175\'',
        'node' => 'cbc:PaymentID',
      ),
      'context' => 'cac:PaymentMeans',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoOPeracion = \'0302\'',
      ),
    ),
    653 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3174\'',
        'idCatalogo' => 'cbc:PaymentMeansCode',
        'catalogo' => '\'59\'',
      ),
      'context' => 'cac:PaymentMeans',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:PaymentMeansCode',
      ),
    ),
    654 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:PaymentMeansCode/@listName',
        'regexp' => '\'^(Medio de pago)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:PaymentMeans',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    655 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:PaymentMeansCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:PaymentMeans',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    656 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:PaymentMeansCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo59)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:PaymentMeans',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
  ),
);
