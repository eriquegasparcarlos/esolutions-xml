<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegNC-2.0.1.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegNC-2.0.1.xsl',
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
        'errorCodeValidate' => '\'4250\'',
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
        'regexp' => '\'^([FBS][A-Z0-9]{3}|[0-9]{4})-[0-9]{1,8}?$\'',
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
        'errorCodeNotExist' => '\'2128\'',
        'errorCodeValidate' => '\'2128\'',
        'node' => 'cac:DiscrepancyResponse/cbc:ResponseCode',
        'regexp' => '\'^((?!\\s*$)[^\\s].*)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    8 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'09\'',
        'idCatalogo' => 'cac:DiscrepancyResponse/cbc:ResponseCode',
        'errorCodeValidate' => '\'2172\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    9 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3203\'',
        'node' => 'cac:DiscrepancyResponse/cbc:ResponseCode',
        'expresion' => 'count(cac:DiscrepancyResponse/cbc:ResponseCode) > 1',
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
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:DiscrepancyResponse/cbc:ResponseCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
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
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:DiscrepancyResponse/cbc:ResponseCode/@listName',
        'regexp' => '\'^(Tipo de nota de credito)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    12 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cac:DiscrepancyResponse/cbc:ResponseCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo09)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    13 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2136\'',
        'errorCodeValidate' => '\'2135\'',
        'node' => 'cac:DiscrepancyResponse/cbc:Description',
        'regexp' => '\'^(?!\\s*$)[^\\s].{1,499}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    14 => 
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
    15 => 
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
    16 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'descendant::*[@currencyID != $monedaComprobante and not(ancestor-or-self::cac:LegalMonetaryTotal/cbc:PayableRoundingAmount)]/@currencyID',
        'expresion' => 'descendant::*[@currencyID != $monedaComprobante and not(ancestor-or-self::cac:LegalMonetaryTotal/cbc:PayableRoundingAmount)]',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    17 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2524\'',
        'node' => 'cac:BillingReference',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:DiscrepancyResponse/cbc:ResponseCode != \'10\'',
      ),
    ),
    18 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3261\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count(cac:BillingReference/cac:InvoiceDocumentReference) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:DiscrepancyResponse/cbc:ResponseCode = \'13\'',
      ),
    ),
    19 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3257\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count(cac:PaymentTerms/cbc:ID[text() = \'FormaPago\']) < 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:DiscrepancyResponse/cbc:ResponseCode = \'13\'',
      ),
    ),
    20 => 
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
    21 => 
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
    22 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4315\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:PayableRoundingAmount/@currencyID',
        'expresion' => 'cac:LegalMonetaryTotal/cbc:PayableRoundingAmount/@currencyID != $monedaComprobante',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    23 => 
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
        1 => 'cac:BillingReference/cac:InvoiceDocumentReference[cbc:DocumentTypeCode[text() = \'01\']]',
      ),
    ),
    24 => 
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
    25 => 
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
    26 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3291\'',
        'node' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]/cbc:TaxAmount',
        'expresion' => '$validacionIndicadores =\'true\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]',
        1 => 'cac:BillingReference/cac:InvoiceDocumentReference[cbc:DocumentTypeCode[text() = \'01\']]',
      ),
    ),
    27 => 
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
        1 => 'cac:BillingReference/cac:InvoiceDocumentReference[cbc:DocumentTypeCode[text() = \'01\']]',
      ),
    ),
    28 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4290\'',
        'node' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]/cbc:TaxAmount',
        'expresion' => '$validacionIndicadores =\'true\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\']]',
        1 => '$validacionIndicadores =\'true\'',
      ),
    ),
    29 => 
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
    30 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4312\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:PayableAmount',
        'expresion' => '($totalImporte + 1 ) < $totalImporteCalculado or ($totalImporte - 1) > $totalImporteCalculado',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    31 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3315\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:PayableAmount',
        'expresion' => '$totalImporte != 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:DiscrepancyResponse/cbc:ResponseCode = \'13\'',
      ),
    ),
    32 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2065\'',
        'node' => 'cac:LegalMonetaryTotal/cbc:ChargeTotalAmount',
        'isGreaterCero' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    33 => 
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
    34 => 
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
    35 => 
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
    36 => 
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
    37 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3029\'',
        'errorCodeValidate' => '\'2511\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    38 => 
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
    39 => 
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
    40 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
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
    41 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4092\'',
        'node' => 'cac:Party/cac:PartyName/cbc:Name',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,1499}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    42 => 
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
    43 => 
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
    44 => 
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
    45 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4094\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cac:AddressLine/cbc:Line',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,199}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    46 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4095\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CitySubdivisionName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,24}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    47 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4096\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CityName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,29}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    48 => 
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
    49 => 
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
    50 => 
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
    51 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4097\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:CountrySubentity',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,29}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    52 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4098\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:District',
        'regexp' => '\'^(?!\\s*$)[^\\s].{0,29}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    53 => 
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
    54 => 
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
    55 => 
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
    56 => 
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
    57 => 
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
        0 => 'substring($root/cbc:ID, 1, 1) = \'F\' and $tipdocAfectado = \'01\'',
      ),
    ),
    58 => 
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
        0 => 'substring($root/cbc:ID, 1, 1) = \'F\' and $tipdocAfectado = \'01\'',
      ),
    ),
    59 => 
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
        0 => 'substring($root/cbc:ID, 1, 1) != \'F\' or $tipdocAfectado != \'01\' ',
      ),
    ),
    60 => 
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
        0 => 'substring($root/cbc:ID, 1, 1) != \'F\' or $tipdocAfectado != \'01\' ',
        1 => 'cac:Party/cac:PartyLegalEntity/cac:RegistrationAddress/cbc:AddressTypeCode != \'\'',
      ),
    ),
    61 => 
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
    62 => 
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
    63 => 
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
    64 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2679\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => 'cac:AccountingCustomerParty',
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
        'errorCodeValidate' => '\'2017\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[\\d]{11}$\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\'',
      ),
    ),
    66 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2679\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    67 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'2016\'',
        'idCatalogo' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    68 => 
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
    69 => 
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
    70 => 
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
    71 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2021\'',
        'errorCodeValidate' => '\'2022\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,999}$\'',
      ),
      'context' => 'cac:AccountingCustomerParty',
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
        'errorCodeValidate' => '\'3194\'',
        'node' => '$root/cac:BillingReference',
        'expresion' => 'count($root/cac:BillingReference) > 1',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'11\'',
      ),
    ),
    73 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2524\'',
        'node' => 'cac:InvoiceDocumentReference',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode != \'10\'',
      ),
    ),
    74 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3259\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode != \'01\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'13\'',
      ),
    ),
    75 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2117\'',
        'errorCodeValidate' => '\'2117\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:ID',
        'regexp' => '\'^(([F][A-Z0-9]{3}-[0-9]{1,8})|((E001)-[0-9]{1,8})|([0-9]{1,4}-[0-9]{1,8}))$\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode = \'01\'',
      ),
    ),
    76 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2117\'',
        'errorCodeValidate' => '\'2117\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:ID',
        'regexp' => '\'^(([B][A-Z0-9]{3}-[0-9]{1,8})|((EB01)-[0-9]{1,8})|([0-9]{1,4}-[0-9]{1,8}))$\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    77 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2117\'',
        'errorCodeValidate' => '\'2117\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:ID',
        'regexp' => '\'^(([S][A-Z0-9]{3}-[0-9]{1,8})|([0-9]{1,4}-[0-9]{1,8})|([0-9]{1,8}))$\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode = \'14\'',
      ),
    ),
    78 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2117\'',
        'errorCodeValidate' => '\'2117\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:ID',
        'regexp' => '\'^[a-zA-Z0-9-]{1,20}-[a-zA-Z0-9-]{1,20}$\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode[text()=\'05\' or text()=\'06\' or text()=\'12\' or text()=\'13\' or text()=\'15\' or text()=\'16\' or text()=\'18\' or text()=\'21\' or text()=\'28\' or text()=\'30\' or text()=\'34\' or text()=\'37\' or text()=\'42\' or text()=\'43\' or text()=\'45\' or text()=\'55\' or text()=\'11\' or text()=\'17\' or text()=\'23\' or text()=\'24\' or text()=\'56\']',
      ),
    ),
    79 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2117\'',
        'errorCodeValidate' => '\'2117\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:ID',
        'regexp' => '\'^[a-zA-Z0-9-]{1,20}-[a-zA-Z0-9-]{1,20}$\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode[text()=\'-\'] or cac:InvoiceDocumentReference/cbc:DocumentTypeCode=\'\'',
        1 => 'cac:InvoiceDocumentReference/cbc:ID[text() != \'\']',
      ),
    ),
    80 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2399\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode != \'03\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'10\'',
        1 => 'substring($root/cbc:ID, 1, 1) = \'B\'',
      ),
    ),
    81 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2116\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode[text() !=\'01\' and text() !=\'12\' and text() !=\'56\' and text() !=\'06\' and text() !=\'13\' and text() !=\'15\' and text() !=\'16\' and text() !=\'18\' and text() !=\'21\' and text() !=\'37\' and text() !=\'43\' and text() !=\'45\' and text() !=\'55\']',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'10\'',
        1 => 'substring($root/cbc:ID, 1, 1) = \'F\'',
      ),
    ),
    82 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2930\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode != \'14\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'10\'',
        1 => 'substring($root/cbc:ID, 1, 1) = \'S\'',
      ),
    ),
    83 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2399\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => '(cac:InvoiceDocumentReference/cbc:DocumentTypeCode[text() !=\'03\' and text() !=\'12\' and text() !=\'16\' and text() !=\'55\']) or cac:InvoiceDocumentReference/cbc:DocumentTypeCode =\'\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring($root/cbc:ID, 1, 1) = \'B\'',
      ),
    ),
    84 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2116\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => '(cac:InvoiceDocumentReference/cbc:DocumentTypeCode[text() !=\'01\'and text() !=\'05\' and text() !=\'06\' and text() !=\'12\' and text() !=\'13\' and text() !=\'15\' and text() !=\'16\' and text() !=\'18\' and text() !=\'21\' and text() !=\'28\' and text() !=\'30\' and text() !=\'34\' and text() !=\'37\' and text() !=\'42\' and text() !=\'43\' and text() !=\'45\' and text() !=\'55\' and text() !=\'11\' and text() !=\'17\' and text() !=\'23\' and text() !=\'24\' and text() !=\'56\']) or cac:InvoiceDocumentReference/cbc:DocumentTypeCode =\'\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring($root/cbc:ID, 1, 1) = \'F\'',
      ),
    ),
    85 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2594\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => '(cac:InvoiceDocumentReference/cbc:DocumentTypeCode[text() !=\'01\'and text() !=\'03\' and text() !=\'05\' and text() !=\'06\' and text() !=\'12\' and text() !=\'13\' and text() !=\'15\' and text() !=\'16\' and text() !=\'18\' and text() !=\'21\' and text() !=\'28\' and text() !=\'30\' and text() !=\'34\' and text() !=\'37\' and text() !=\'42\' and text() !=\'43\' and text() !=\'45\' and text() !=\'55\' and text() !=\'11\' and text() !=\'17\' and text() !=\'23\' and text() !=\'24\' and text() !=\'56\']) or cac:InvoiceDocumentReference/cbc:DocumentTypeCode =\'\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring($root/cbc:ID, 1, 1) = \'0\' or substring($root/cbc:ID, 1, 1) = \'1\' or substring($root/cbc:ID, 1, 1) = \'2\' or substring($root/cbc:ID, 1, 1) = \'3\' or substring($root/cbc:ID, 1, 1) = \'4\' or substring($root/cbc:ID, 1, 1) = \'5\' or substring($root/cbc:ID, 1, 1) = \'6\' or substring($root/cbc:ID, 1, 1) = \'7\' or substring($root/cbc:ID, 1, 1) = \'8\' or substring($root/cbc:ID, 1, 1) = \'9\'',
      ),
    ),
    86 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2930\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode != \'14\'',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring($root/cbc:ID, 1, 1) = \'S\'',
      ),
    ),
    87 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2365\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:ID',
        'expresion' => 'count(key(\'by-Billingreference\', concat(cac:InvoiceDocumentReference/cbc:DocumentTypeCode, cac:InvoiceDocumentReference/cbc:ID))) > 1',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    88 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2884\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'count(key(\'by-Billingreference-tipodoc\', cac:InvoiceDocumentReference/cbc:DocumentTypeCode)) != count($root/cac:BillingReference/cac:InvoiceDocumentReference/cbc:DocumentTypeCode)',
      ),
      'context' => 'cac:BillingReference',
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
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:BillingReference',
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
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode/@listName',
        'regexp' => '\'^(Tipo de Documento)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:BillingReference',
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
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cac:InvoiceDocumentReference/cbc:DocumentTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    92 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4006\'',
        'errorCodeValidate' => '\'4006\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([TV][A-Z0-9]{3}-[0-9]{1,8})|([0-9]{4}-[0-9]{1,8})|([E][G][0][1-4,7]{1}-[0-9]{1,8})|([G][0-9]{3}-[0-9]{1,8}))$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    93 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2364\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-document-despatch-reference\', concat(cbc:DocumentTypeCode,\' \',cbc:ID))) > 1',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    94 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4005\'',
        'errorCodeValidate' => '\'4005\'',
        'node' => 'cbc:DocumentTypeCode',
        'regexp' => '\'^(31)|(09)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    95 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DocumentTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    96 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DocumentTypeCode/@listName',
        'regexp' => '\'^(Tipo de Documento)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    97 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:DocumentTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:DespatchDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    98 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4010\'',
        'errorCodeValidate' => '\'4010\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!\\s*$)[^\\s]{6,30}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    99 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2426\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-document-additional-reference\', concat(cbc:DocumentTypeCode,\' \',cbc:ID))) > 1',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    100 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2636\'',
        'node' => 'cbc:ID',
        'expresion' => '$root/cac:DiscrepancyResponse/cbc:ResponseCode != \'10\' and cbc:DocumentTypeCode =\'99\' and not(string(cbc:ID))',
        'isError' => 'true()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    101 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2635\'',
        'node' => 'cbc:ID',
        'expresion' => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'10\' and count($root/cac:AdditionalDocumentReference/cbc:DocumentTypeCode[text()=\'99\']) > 1',
        'isError' => 'true()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    102 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2637\'',
        'node' => 'cbc:DocumentTypeCode',
        'expresion' => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'10\' and cbc:DocumentTypeCode !=\'99\'',
        'isError' => 'true()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    103 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4009\'',
        'errorCodeValidate' => '\'4009\'',
        'node' => 'cbc:DocumentTypeCode',
        'regexp' => '\'^(0[145]|99)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    104 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DocumentTypeCode/@listName',
        'regexp' => '\'^(Documento Relacionado)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    105 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DocumentTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
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
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:DocumentTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo12)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    107 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3261\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(cac:BillingReference/cac:InvoiceDocumentReference) > 1',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'13\'',
      ),
    ),
    108 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3257\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(cbc:ID[text() = \'FormaPago\']) < 1',
        'descripcion' => 'concat(\'Error en:::::::::: \', cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'13\'',
      ),
    ),
    109 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3248\'',
        'node' => 'cbc:PaymentMeansID',
        'expresion' => 'count(key(\'by-cuotas-in-root\', cbc:PaymentMeansID)) > 1',
        'descripcion' => 'concat(\'Forma Pago : \', cac:PaymentTerms/cbc:PaymentMeansID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    110 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3245\'',
        'node' => 'cbc:PaymentMeansID',
        'descripcion' => 'concat(\'Error en::: \', cbc:ID)',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
      ),
    ),
    111 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3246\'',
        'node' => 'cbc:PaymentMeansID',
        'expresion' => 'count(cbc:PaymentMeansID[text() = \'Credito\' or substring(text(),1,5) = \'Cuota\']) < 1',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
      ),
    ),
    112 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3249\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count($root/cac:PaymentTerms[cbc:ID[text() = \'FormaPago\'] and cbc:PaymentMeansID[substring(text(),1,5) = \'Cuota\']]) = 0',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    113 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3251\'',
        'node' => 'cbc:Amount',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    114 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3250\'',
        'node' => 'cbc:Amount',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    115 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'cbc:Amount/@currencyID',
        'expresion' => '$root/cbc:DocumentCurrencyCode != cbc:Amount/@currencyID',
      ),
      'context' => 'cac:PaymentTerms',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID and cbc:ID=\'FormaPago\'',
        1 => 'cbc:PaymentMeansID = \'Credito\'',
      ),
    ),
    116 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3252\'',
        'node' => 'cac:PaymentTerms/cbc:ID',
        'expresion' => 'count($root/cac:PaymentTerms[cbc:ID[text() = \'FormaPago\'] and cbc:PaymentMeansID[text() = \'Credito\']]) = 0',
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
    117 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3254\'',
        'node' => 'cbc:Amount',
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
    118 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3253\'',
        'node' => 'cbc:Amount',
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
    119 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'cbc:Amount/@currencyID',
        'expresion' => '$root/cbc:DocumentCurrencyCode != cbc:Amount/@currencyID',
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
    120 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3256\'',
        'node' => 'cbc:PaymentDueDate',
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
    121 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3255\'',
        'node' => 'cbc:PaymentDueDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
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
    122 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3221\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme[cbc:ID[text() = \'9995\' or text() = \'9997\' or text() = \'9998\']]/cbc:ID',
        'expresion' => 'count(cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9995\' or text() = \'9997\' or text() = \'9998\']) > 0 and number(cac:TaxSubtotal/cbc:TaxableAmount) > 0',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$tipoNotaCredito = \'12\' ',
      ),
    ),
    123 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3221\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme[cbc:ID[text() = \'9997\' or text() = \'9998\']]/cbc:ID',
        'expresion' => 'count($root/cac:CreditNoteLine/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'9997\' or text()=\'9998\']]) > 0',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$tipoNotaCredito = \'11\' ',
      ),
    ),
    124 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
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
    125 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4301\'',
        'node' => '$root/cac:TaxTotal/cbc:TaxAmount',
        'expresion' => '(round(($totalImpuestos + 1 ) * 100) div 100) < (round($SumatoriaImpuestos * 100) div 100)  or (round(($totalImpuestos - 1) * 100) div 100) > (round($SumatoriaImpuestos * 100) div 100) ',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    126 => 
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
    127 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4306\'',
        'node' => '$root/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9999\']]/cbc:TaxAmount',
        'expresion' => '($totalOtros + 1 ) < $totalOtrosxLinea or ($totalOtros - 1) > $totalOtrosxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    128 => 
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
    129 => 
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
    130 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4295\'',
        'node' => '$root/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9995\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseExportacion + 1 ) < $totalBaseExportacionxLinea or ($totalBaseExportacion - 1) > $totalBaseExportacionxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    131 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4297\'',
        'node' => '$root/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9997\']]/cbc:TaxableAmount',
        'expresion' => '(round(($totalBaseExoneradas + 1 ) * 100) div 100)  < $totalBaseExoneradasxLinea or (round(($totalBaseExoneradas - 1) * 100) div 100)  > $totalBaseExoneradasxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    132 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4296\'',
        'node' => '$root/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9998\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseInafectas + 1 ) < $totalBaseInafectasxLinea or ($totalBaseInafectas - 1) > $totalBaseInafectasxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    133 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4298\'',
        'node' => '$root/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount',
        'expresion' => '($totalBaseGratuitas + 1 ) < $totalBaseGratuitasxLinea or ($totalBaseGratuitas - 1) > $totalBaseGratuitasxLinea',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    134 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2641\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => '$root/cac:CreditNoteLine/cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode =\'02\']/cbc:PriceAmount > 0 and (not(cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]) or cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount = 0)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    135 => 
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
    136 => 
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
        0 => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1016\']]',
      ),
    ),
    137 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3024\'',
        'node' => '$root/cac:TaxTotal',
        'expresion' => 'count($root/cac:TaxTotal) > 1',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    138 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4020\'',
        'node' => 'cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:Taxmount',
        'expresion' => '$root/cac:CreditNoteLine/cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxAmount > 0 and cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'2000\']]/cbc:TaxAmount = 0',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    139 => 
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
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
      ),
    ),
    140 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2048\'',
        'errorCodeValidate' => '\'2048\'',
        'node' => 'cbc:TaxAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error Tributo \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    141 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3000\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'9995\' or text()=\'9997\' or text()=\'9998\'] and number(cbc:TaxAmount) != 0',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    142 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3059\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    143 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'05\'',
        'idCatalogo' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'errorCodeValidate' => '\'3007\'',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    144 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3068\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'count(key(\'by-codigo-tributo-cabecera-reference\', concat(cac:TaxCategory/cac:TaxScheme/cbc:ID,\'-\'))) > 1',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    145 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3107\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'12\' and (cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'1000\'] and cbc:TaxableAmount > 0)',
        'isError' => 'true()',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => 'cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'1000\' or text()=\'1016\']',
      ),
    ),
    146 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3107\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'11\' and cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'1000\' or text()=\'1016\']',
        'isError' => 'true()',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => 'cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'1000\' or text()=\'1016\']',
      ),
    ),
    147 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3107\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'12\' and (cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'2000\'] and cbc:TaxableAmount > 0)',
        'isError' => 'true()',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => 'cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'2000\' or text()=\'9999\']',
      ),
    ),
    148 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3107\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => '$root/cac:DiscrepancyResponse/cbc:ResponseCode = \'11\' and cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'2000\' or text()=\'9999\']',
        'isError' => 'true()',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
        0 => 'cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'2000\' or text()=\'9999\']',
      ),
    ),
    149 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeName',
        'regexp' => '\'^(Codigo de tributos)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    150 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    151 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo05)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    152 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2054\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:Name',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    153 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2052\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:TaxTypeCode',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'cabecera',
      'conditions' => 
      array (
      ),
    ),
    154 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2137\'',
        'errorCodeValidate' => '\'2137\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!0*$)\\d{1,3}$\'',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    155 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2752\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-creditNoteLine-id\', number(cbc:ID))) > 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    156 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2138\'',
        'node' => 'cbc:CreditedQuantity/@unitCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:CreditedQuantity',
      ),
    ),
    157 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4258\'',
        'node' => 'cbc:CreditedQuantity/@unitCodeListID',
        'regexp' => '\'^(UN/ECE rec 20)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    158 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4259\'',
        'node' => 'cbc:CreditedQuantity/@unitCodeListAgencyName',
        'regexp' => '\'^(United Nations Economic Commission for Europe)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
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
        'errorCodeNotExist' => '\'2580\'',
        'node' => 'cbc:CreditedQuantity',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    160 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2580\'',
        'node' => 'cbc:CreditedQuantity',
        'expresion' => 'cbc:CreditedQuantity = 0',
      ),
      'context' => 'cac:CreditNoteLine',
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
        'errorCodeValidate' => '\'2139\'',
        'node' => 'cbc:CreditedQuantity',
        'regexp' => '\'^(?!0[0-9]*(\\.0*)?$)[0-9]{1,12}(\\.[0-9]{1,10})?$\'',
        'isError' => 'true()',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    162 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4234\'',
        'node' => 'cac:Item/cac:SellersItemIdentification/cbc:ID',
        'regexp' => '\'^((?!\\s*$)[\\s\\S]{1,30})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
        'isError' => 'false()',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    163 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    164 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode and string-length(cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode) = 8',
      ),
    ),
    165 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    166 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    167 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode/@listName',
        'regexp' => '\'^(Item Classification$)\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    168 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-8\'',
      ),
    ),
    169 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-12\'',
      ),
    ),
    170 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-13\'',
      ),
    ),
    171 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID = \'GTIN-14\'',
      ),
    ),
    172 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3224\'',
        'node' => 'cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode = \'02\']/cbc:PriceAmount',
        'expresion' => 'cac:PricingReference/cac:AlternativeConditionPrice[cbc:PriceTypeCode =\'02\']/cbc:PriceAmount > 0 and not(cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\'] and cbc:TaxableAmount > 0])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    173 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    174 => 
    array (
      'primitive' => 'existElementNoVacio',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4333\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID/@schemeID',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID',
      ),
    ),
    175 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4084\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => '\'^((?!\\s*$)[^\\n\\r]{3,500})$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    176 => 
    array (
      'primitive' => 'existAndValidateValueTenDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2369\'',
        'errorCodeValidate' => '\'2369\'',
        'node' => 'cac:Price/cbc:PriceAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    177 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2640\'',
        'node' => 'cac:Price/cbc:PriceAmount',
        'expresion' => 'cac:TaxTotal/cac:TaxSubtotal[cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'9996\']]/cbc:TaxableAmount > 0 and cac:Price/cbc:PriceAmount > 0',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'cac:CreditNoteLine',
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
        'errorCodeValidate' => '\'2409\'',
        'node' => 'cbc:PriceTypeCode',
        'expresion' => 'count(cac:PricingReference/cac:AlternativeConditionPrice/cbc:PriceTypeCode) > 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    179 => 
    array (
      'primitive' => 'existAndValidateValueTenDecimal',
      'params' => 
      array (
        'errorCodeValidate' => '\'2367\'',
        'node' => 'cbc:PriceAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine/cac:PricingReference/cac:AlternativeConditionPrice',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:PriceAmount',
      ),
    ),
    180 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2410\'',
        'node' => 'cbc:PriceTypeCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine/cac:PricingReference/cac:AlternativeConditionPrice',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    181 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'16\'',
        'idCatalogo' => 'cbc:PriceTypeCode',
        'errorCodeValidate' => '\'2410\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine/cac:PricingReference/cac:AlternativeConditionPrice',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    182 => 
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
      'context' => 'cac:CreditNoteLine/cac:PricingReference/cac:AlternativeConditionPrice',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    183 => 
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
      'context' => 'cac:CreditNoteLine/cac:PricingReference/cac:AlternativeConditionPrice',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    184 => 
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
      'context' => 'cac:CreditNoteLine/cac:PricingReference/cac:AlternativeConditionPrice',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    185 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3195\'',
        'node' => 'cac:TaxTotal',
        'expresion' => 'not(cac:TaxTotal)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    186 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3021\'',
        'errorCodeValidate' => '\'3021\'',
        'node' => 'cac:TaxTotal/cbc:TaxAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    187 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3026\'',
        'node' => 'cac:TaxTotal/cbc:TaxAmount',
        'expresion' => 'count(cac:TaxTotal) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    188 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    189 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    190 => 
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
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    191 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3150\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7001\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7001\')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    192 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3151\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7003\']) and $indPrimeraVivienda = \'3\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7003\')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    193 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3152\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7004\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7004\')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    194 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3153\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7005\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7005\')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    195 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3154\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7006\']) and $indPrimeraVivienda = \'3\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7006\')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    196 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3155\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7007\']) and $indPrimeraVivienda = \'3\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7007\')',
      ),
      'context' => 'cac:CreditNoteLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$codigoSUNAT = \'84121901\'',
      ),
    ),
    197 => 
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
    198 => 
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
    199 => 
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
    200 => 
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
    201 => 
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
    202 => 
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
    203 => 
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
    204 => 
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
    205 => 
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
    206 => 
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
    207 => 
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
    208 => 
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
    209 => 
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
    210 => 
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
    211 => 
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
    212 => 
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
    213 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(\\d{4})(-)(0[1-9]|1[0-2])\\2([0-2][0-9]|3[0-1])$\'',
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
    214 => 
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
    215 => 
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
    216 => 
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
    217 => 
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
    218 => 
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
    219 => 
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
    220 => 
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
    221 => 
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
    222 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4280\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[^\\t\\n\\r]{3,}$\'',
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
    223 => 
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
    224 => 
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
    225 => 
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
    226 => 
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
    227 => 
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
    228 => 
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
    229 => 
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
    230 => 
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
    231 => 
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
    232 => 
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
    233 => 
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
    234 => 
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
    235 => 
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
    236 => 
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
    237 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4294\'',
        'node' => '$BaseIGVIVAPxLinea',
        'expresion' => '($BaseIGVIVAPxLinea + 1 ) < $BaseIGVIVAPxLineaCalculado or ($BaseIGVIVAPxLinea - 1) > $BaseIGVIVAPxLineaCalculado',
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
    238 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3105\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'count(cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID[text() = \'1000\' or text() = \'1016\' or text() = \'9995\' or text() = \'9996\' or text() = \'9997\' or text() = \'9998\']) < 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    239 => 
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
    240 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => 'cac:TaxAmount',
        'expresion' => '$monedaDocumento != $monedaBolsa',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    241 => 
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
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
        1 => '$CantidadBolsa > 0',
      ),
    ),
    242 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3237\'',
        'node' => 'cbc:BaseUnitMeasure',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    243 => 
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
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    244 => 
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
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    245 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3236\'',
        'node' => 'cbc:BaseUnitMeasure',
        'expresion' => '$CantidadBolsa!=$CantProducto',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
        1 => '$CantidadBolsa > 0',
      ),
    ),
    246 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2892\'',
        'node' => 'cac:TaxCategory/cbc:PerUnitAmount',
        'regexp' => '\'^(?!(0)[0-9]+$)[0-9]{1,3}(\\.[0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
      ),
    ),
    247 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3238\'',
        'node' => 'cac:TaxCategory/cbc:PerUnitAmount',
        'expresion' => '(round(cac:TaxCategory/cbc:PerUnitAmount * 100000) div 100000) = 0 ',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo,\' PerUnitAmount::::\',(round(cac:TaxCategory/cbc:PerUnitAmount * 100) div 100))',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'7152\'',
        1 => 'cbc:BaseUnitMeasure > 0',
      ),
    ),
    248 => 
    array (
      'primitive' => 'validateValueTwoDecimalIfExist',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3031\'',
        'errorCodeValidate' => '\'3031\'',
        'node' => 'cbc:TaxableAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
      ),
    ),
    249 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2037\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    250 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'05\'',
        'idCatalogo' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'errorCodeValidate' => '\'2036\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    251 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2033\'',
        'errorCodeValidate' => '\'2033\'',
        'node' => 'cbc:TaxAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    252 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2371\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
        1 => '$codigoTributo != \'2000\' and $codigoTributo != \'9999\' ',
      ),
    ),
    253 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3111\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'11\' or text() = \'12\' or text() = \'13\' or text() = \'14\' or text() = \'15\' or text() = \'16\' or text() = \'17\'] and cbc:TaxAmount = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9996\'',
      ),
    ),
    254 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3110\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'21\' or text() = \'31\' or text() = \'32\' or text() = \'33\' or text() = \'34\' or text() = \'35\' or text() = \'36\' or text() = \'37\' or text() = \'40\'] and cbc:TaxAmount != 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9996\'',
      ),
    ),
    255 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2993\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'11\' or text() = \'12\' or text() = \'13\' or text() = \'14\' or text = \'15\' or text() = \'16\' or text() = \'17\'] and cac:TaxCategory/cbc:Percent = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9996\'',
      ),
    ),
    256 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3102\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'regexp' => '\'^(?!(0)[0-9]+$)[0-9]{1,3}(\\.[0-9]{1,5})?$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    257 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3100\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => '$tipoNotaCredito =\'11\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'1000\' or $codigoTributo = \'1016\' ',
      ),
    ),
    258 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3111\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxableAmount > 0 and cbc:TaxAmount = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'1000\' or $codigoTributo = \'1016\' ',
      ),
    ),
    259 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2993\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'expresion' => 'cbc:TaxableAmount > 0 and cac:TaxCategory/cbc:Percent = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'1000\' or $codigoTributo = \'1016\' ',
      ),
    ),
    260 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3050\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'expresion' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
      ),
    ),
    261 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3104\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'expresion' => 'cac:TaxCategory/cbc:Percent = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
        1 => '$codigoTributo = \'2000\' and cbc:TaxableAmount > 0 ',
      ),
    ),
    262 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2373\'',
        'node' => 'cac:TaxCategory/cbc:TierRange',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
        1 => '$codigoTributo = \'2000\' and cbc:TaxableAmount > 0 ',
      ),
    ),
    263 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'08\'',
        'idCatalogo' => 'cac:TaxCategory/cbc:TierRange',
        'errorCodeValidate' => '\'2199\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
        1 => '$codigoTributo = \'2000\' and cbc:TaxableAmount > 0 ',
      ),
    ),
    264 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3210\'',
        'node' => 'cac:TaxCategory/cbc:TierRange',
        'expresion' => 'cac:TaxCategory/cbc:TierRange',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
        1 => '$codigoTributo != \'2000\'',
      ),
    ),
    265 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3108\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '($MontoTributo + 1 ) < $MontoTributoCalculado or ($MontoTributo - 1) > $MontoTributoCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
        1 => '$codigoTributo = \'2000\'',
      ),
    ),
    266 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3109\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '($MontoTributo + 1 ) < $MontoTributoCalculado or ($MontoTributo - 1) > $MontoTributoCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'2000\' or $codigoTributo = \'9999\'',
        1 => '$codigoTributo = \'9999\'',
      ),
    ),
    267 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3110\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'cbc:TaxAmount != 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \', código de tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo = \'9995\' or $codigoTributo = \'9997\' or $codigoTributo = \'9998\'',
      ),
    ),
    268 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3103\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => '($MontoTributo + 1 ) < $MontoTributoCalculado or ($MontoTributo - 1) > $MontoTributoCalculado',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Tributo: \', $codigoTributo)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cac:TaxCategory/cbc:TaxExemptionReasonCode[text() = \'10\' or text() = \'11\' or text() = \'12\' or text() = \'13\' or text() = \'14\' or text = \'15\' or text() = \'16\' or text() = \'17\']',
      ),
    ),
    269 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2642\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'expresion' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode != \'40\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$tipoNotaCredito =\'11\'',
      ),
    ),
    270 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2644\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'expresion' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode != \'17\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$tipoNotaCredito =\'12\'',
      ),
    ),
    271 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3230\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode',
        'expresion' => '$tipoNotaCredito != \'12\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cac:TaxCategory/cbc:TaxExemptionReasonCode = \'17\'',
      ),
    ),
    272 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    273 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode/@listName',
        'regexp' => '\'^(Afectacion del IGV)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    274 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cac:TaxCategory/cbc:TaxExemptionReasonCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo07)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    275 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2992\'',
        'node' => 'cac:TaxCategory/cbc:Percent',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => '$codigoTributo != \'7152\'',
      ),
    ),
    276 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3067\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'count(key(\'by-tributos-in-line\', concat(cac:TaxCategory/cac:TaxScheme/cbc:ID,\'-\', $nroLinea))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    277 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeName',
        'regexp' => '\'^(Codigo de tributos)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    278 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    279 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo05)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    280 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2996\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:Name',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
  ),
);
