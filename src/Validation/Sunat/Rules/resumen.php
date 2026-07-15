<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegSummary-1.1.0.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegSummary-1.1.0.xsl',
  'globals' => 
  array (
    'numeroRuc' => 'substring($nombreArchivoEnviado, 1, 11)',
    'idFilename' => 'substring($nombreArchivoEnviado, 13, string-length($nombreArchivoEnviado) - 16)',
    'fechaEnvioFile' => 'substring($nombreArchivoEnviado, 16, 8)',
  ),
  'rules' => 
  array (
    0 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2075\'',
        'errorCodeValidate' => '\'2074\'',
        'node' => 'cbc:UBLVersionID',
        'regexp' => '\'^(2.0)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    1 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2072\'',
        'errorCodeValidate' => '\'2072\'',
        'node' => 'cbc:CustomizationID',
        'regexp' => '\'^(1.1)$\'',
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
        'errorCodeValidate' => '\'2220\'',
        'node' => 'cbc:ID',
        'expresion' => '$idFilename != cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    3 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2346\'',
        'node' => 'cbc:ID',
        'expresion' => '$fechaEnvioFile != translate(cbc:IssueDate,\'-\',\'\')',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    4 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'1034\'',
        'node' => 'cac:AccountingSupplierParty/cbc:CustomerAssignedAccountID',
        'expresion' => '$numeroRuc != cac:AccountingSupplierParty/cbc:CustomerAssignedAccountID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    5 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'0158\'',
        'node' => 'sac:SummaryDocumentsLine[last()]/cbc:LineID',
        'expresion' => 'count(sac:SummaryDocumentsLine) > 500',
        'descripcion' => 'concat(\'No se deben de enviar mas de 500 comprobantes para el resumen: \', cbc:ID)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    6 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2217\'',
        'node' => 'cbc:CustomerAssignedAccountID',
      ),
      'context' => 'cac:AccountingSupplierParty',
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
        'errorCodeNotExist' => '\'2219\'',
        'errorCodeValidate' => '\'2218\'',
        'node' => 'cbc:AdditionalAccountID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    8 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2229\'',
        'errorCodeValidate' => '\'2228\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,100}$\'',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    9 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2238\'',
        'errorCodeValidate' => '\'2238\'',
        'node' => 'cbc:LineID',
        'regexp' => '\'^(?!0+(\\d+)$)\\d{1,5}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', position(), \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    10 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2239\'',
        'node' => 'cbc:LineID',
        'expresion' => 'cbc:LineID < 1',
        'descripcion' => 'concat(\'Error en la linea: \', position(), \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    11 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2752\'',
        'node' => 'cbc:LineID',
        'expresion' => 'count(key(\'by-invoiceLine-id\', number(cbc:LineID))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', position(), \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    12 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2522\'',
        'node' => 'cac:Status/cbc:ConditionCode',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    13 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'19\'',
        'idCatalogo' => 'cac:Status/cbc:ConditionCode',
        'errorCodeValidate' => '\'2896\'',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    14 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3094\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-bills-in-line\', concat(cbc:DocumentTypeCode, \'-\', substring(cbc:ID,1,4), \'-\', number(substring(cbc:ID,6)), \'-\', cac:Status/cbc:ConditionCode ))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    15 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3095\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-bills-in-line\', concat(cbc:DocumentTypeCode, \'-\', substring(cbc:ID,1,4), \'-\', number(substring(cbc:ID,6)), \'-\', \'2\' ))) > 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Status/cbc:ConditionCode =\'1\'',
      ),
    ),
    16 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3096\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-bills-in-line\', concat(cbc:DocumentTypeCode, \'-\', substring(cbc:ID,1,4), \'-\', number(substring(cbc:ID,6)), \'-\', \'3\' ))) > 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Status/cbc:ConditionCode =\'2\'',
      ),
    ),
    17 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2242\'',
        'errorCodeValidate' => '\'2241\'',
        'node' => 'cbc:DocumentTypeCode',
        'regexp' => '\'^03|07|08$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    18 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2512\'',
        'errorCodeValidate' => '\'2513\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^([B][A-Z0-9]{3}|[\\d]{1,4})-(?!0+$)([0-9]{1,8})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    19 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2252\'',
        'errorCodeValidate' => '\'2251\'',
        'node' => 'sac:TotalAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    20 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4027\'',
        'node' => 'sac:TotalAmount',
        'expresion' => '($totVentaOservicioPrestado + 5 ) < $sumaCargosTributos or ($totVentaOservicioPrestado - 5) > $sumaCargosTributos',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $totVentaOservicioPrestado ,\'-\',$sumaCargosTributos , \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$totVentaOservicioPrestado',
      ),
    ),
    21 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2071\'',
        'node' => '$nodosConMonedaDiferente',
        'expresion' => 'count($nodosConMonedaDiferente)>0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    22 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2514\'',
        'node' => 'cac:AccountingCustomerParty',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'sac:TotalAmount > 700',
      ),
    ),
    23 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2255\'',
        'errorCodeValidate' => '\'2254\'',
        'node' => 'cbc:PaidAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/sac:BillingPayment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    24 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2260\'',
        'node' => 'cbc:PaidAmount',
        'expresion' => 'cbc:PaidAmount <= 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/sac:BillingPayment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    25 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2257\'',
        'node' => 'cbc:InstructionID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/sac:BillingPayment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    26 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'11\'',
        'idCatalogo' => 'cbc:InstructionID',
        'errorCodeValidate' => '\'2256\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/sac:BillingPayment',
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
        'errorCodeValidate' => '\'2357\'',
        'node' => 'cbc:InstructionID',
        'expresion' => 'count(key(\'by-BillingPayment-in-line\', concat(cbc:InstructionID,\'-\', $nroLinea))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/sac:BillingPayment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    28 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2263\'',
        'errorCodeValidate' => '\'2263\'',
        'node' => 'cbc:ChargeIndicator',
        'regexp' => '\'^true$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:AllowanceCharge',
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
        'errorCodeValidate' => '\'2411\'',
        'node' => 'cbc:ChargeIndicator',
        'expresion' => 'count(key(\'by-ChargeIndicator-in-line\', concat(cbc:ChargeIndicator,\'-\', $nroLinea))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:AllowanceCharge',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    30 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2261\'',
        'errorCodeValidate' => '\'2261\'',
        'node' => 'cbc:Amount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:AllowanceCharge',
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
        'errorCodeValidate' => '\'2266\'',
        'node' => 'cbc:Amount',
        'expresion' => 'cbc:Amount <= 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:AllowanceCharge',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    32 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2278\'',
        'node' => 'cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:Name',
        'expresion' => 'count(cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID[text()=\'1000\']) = 0 ',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    33 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2986\'',
        'errorMessage' => 'concat(\'Error en la linea: \', $nroLinea, \'. Solo se acepta informacion de percepcion para nuevas boletas: el codigo de operacion es: \', cac:Status/cbc:ConditionCode,\' y debe de ser 1.\')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'sac:SUNATPerceptionSummaryDocumentReference and (cbc:DocumentTypeCode!=\'03\' or cac:Status/cbc:ConditionCode=\'2\')',
      ),
    ),
    34 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2679\'',
        'node' => 'cac:AccountingCustomerParty/cbc:CustomerAssignedAccountID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'sac:SUNATPerceptionSummaryDocumentReference and cbc:DocumentTypeCode=\'03\'',
      ),
    ),
    35 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2512\'',
        'errorMessage' => 'concat(\'Error en la linea: \', $nroLinea, \'. Solo se acepta informacion de comprobantes de referencia para notas (Credito o debito): el tipo de comprobante es: \', cbc:DocumentTypeCode,\' y debe de ser 07 o 08.\')',
      ),
      'context' => 'sac:SummaryDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(not(cac:BillingReference) and (cbc:DocumentTypeCode=\'07\' or cbc:DocumentTypeCode=\'08\')) or (cac:BillingReference and not(cbc:DocumentTypeCode=\'07\' or cbc:DocumentTypeCode=\'08\'))',
      ),
    ),
    36 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2355\'',
        'node' => 'cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'count(key(\'by-tributos-in-line\', concat(cac:TaxCategory/cac:TaxScheme/cbc:ID,\'-\', $nroLinea))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal/cac:TaxSubtotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    37 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2048\'',
        'errorCodeValidate' => '\'2048\'',
        'node' => 'cbc:TaxAmount',
        'isGreaterCero' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    38 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2344\'',
        'node' => 'cbc:TaxAmount',
        'expresion' => 'number(cac:TaxSubtotal/cbc:TaxAmount) != number(cbc:TaxAmount)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    39 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2269\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    40 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'05\'',
        'idCatalogo' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'errorCodeValidate' => '\'2268\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    41 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2271\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:Name',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    42 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2276\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme[cbc:ID = \'1000\']/cbc:Name != \'IGV\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. cbc:Name debe de ser IGV\')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID = \'1000\'',
      ),
    ),
    43 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2275\'',
        'node' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID',
        'expresion' => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme[cbc:ID = \'2000\']/cbc:Name != \'ISC\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'sac:SummaryDocumentsLine/cac:TaxTotal',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID = \'2000\'',
      ),
    ),
    44 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2014\'',
        'node' => 'cbc:CustomerAssignedAccountID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'cac:AccountingCustomerParty',
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
        'errorCodeValidate' => '\'2017\'',
        'node' => 'cbc:CustomerAssignedAccountID',
        'regexp' => '\'^[\\d]{11}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:AdditionalAccountID =\'6\'',
      ),
    ),
    46 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2027\'',
        'node' => 'cbc:CustomerAssignedAccountID',
        'regexp' => '\'^[\\d]{8}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:AdditionalAccountID =\'1\'',
      ),
    ),
    47 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2018\'',
        'node' => 'cbc:CustomerAssignedAccountID',
        'regexp' => '\'^[\\d\\w-]{1,20}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    48 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2015\'',
        'node' => 'cbc:AdditionalAccountID',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    49 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'06\'',
        'idCatalogo' => 'cbc:AdditionalAccountID',
        'errorCodeValidate' => '\'2016\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. \')',
      ),
      'context' => 'cac:AccountingCustomerParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:AdditionalAccountID != \'-\'',
      ),
    ),
    50 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'22\'',
        'idCatalogo' => 'sac:SUNATPerceptionSystemCode',
        'errorCodeValidate' => '\'2517\'',
      ),
      'context' => 'sac:SUNATPerceptionSummaryDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    51 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2893\'',
        'errorCodeValidate' => '\'2893\'',
        'node' => 'cbc:TotalInvoiceAmount',
        'isGreaterCero' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $parent_position,\'. Monto total de la percepción debe de ser un numero valido, como maximo dos decimales; mayor que cero\')',
      ),
      'context' => 'sac:SUNATPerceptionSummaryDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    52 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2895\'',
        'errorCodeValidate' => '\'2895\'',
        'node' => 'sac:SUNATTotalCashed',
        'isGreaterCero' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $parent_position,\'. Monto total de la percepción debe de ser un numero valido, como maximo dos decimales; mayor que cero\')',
      ),
      'context' => 'sac:SUNATPerceptionSummaryDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    53 => 
    array (
      'primitive' => 'existAndValidateValueTwoDecimal',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2897\'',
        'errorCodeValidate' => '\'2897\'',
        'node' => 'cbc:TaxableAmount',
        'isGreaterCero' => 'true()',
        'descripcion' => 'concat(\'Error en la linea: \', $parent_position,\'. Monto total de la percepción debe de ser un numero valido, como maximo dos decimales; mayor que cero\')',
      ),
      'context' => 'sac:SUNATPerceptionSummaryDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    54 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2685\'',
        'errorCodeValidate' => '\'2685\'',
        'node' => 'cbc:TotalInvoiceAmount/@currencyID',
        'regexp' => '\'^(PEN)$\'',
      ),
      'context' => 'sac:SUNATPerceptionSummaryDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    55 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2690\'',
        'errorCodeValidate' => '\'2690\'',
        'node' => 'sac:SUNATTotalCashed/@currencyID',
        'regexp' => '\'^(PEN)$\'',
      ),
      'context' => 'sac:SUNATPerceptionSummaryDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    56 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2512\'',
        'errorCodeValidate' => '\'2513\'',
        'node' => '$tipoComprobanteReferencia',
        'regexp' => '\'^(12|03)$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \'. El tipo de comprobante relacionado debe de ser 12 (ticket) o 03 (boleta)\')',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    57 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2524\'',
        'errorCodeValidate' => '\'2117\'',
        'node' => '$comprobanteModificaID',
        'regexp' => '\'(?!0+-)^[a-zA-Z0-9]{1,20}-(?!0+$)([0-9]{1,20})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoComprobanteReferencia = \'12\'',
      ),
    ),
    58 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2524\'',
        'errorCodeValidate' => '\'2920\'',
        'node' => '$comprobanteModificaID',
        'regexp' => '\'^([B](?!0+-)[A-Z0-9]{3})-(?!0+$)([0-9]{1,8})$|^(?!0+-)([0-9]{1,4})-(?!0+$)([0-9]{1,8})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:BillingReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
  ),
);
