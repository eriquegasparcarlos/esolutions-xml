<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegPercepcion-1.0.1.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegPercepcion-1.0.1.xsl',
  'globals' => 
  array (
  ),
  'rules' => 
  array (
    0 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'1049\'',
        'errorMessage' => 'concat(\'Validation Filename error name: \', $fileName,\'; cbc:ID: \', $cbcID)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$numeroComprobante != substring(cbc:ID, 6)',
      ),
    ),
    1 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2111\'',
        'errorCodeValidate' => '\'2110\'',
        'node' => '$cbcUBLVersionID',
        'regexp' => '\'^(2.0)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    2 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2113\'',
        'errorCodeValidate' => '\'2112\'',
        'node' => '$cbcCustomizationID',
        'regexp' => '\'^(1.0)$\'',
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
        'errorCodeNotExist' => '\'1002\'',
        'errorCodeValidate' => '\'1001\'',
        'node' => '$cbcID',
        'regexp' => '\'(^[P][A-Z0-9]{3}|^[\\d]{4})-[0-9]{1,8}?$\'',
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
        'errorCodeNotExist' => '\'1010\'',
        'errorCodeValidate' => '\'1009\'',
        'node' => '$cbcIssueDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
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
        'errorCodeValidate' => '\'4197\'',
        'node' => '$cbcIssueTime',
        'isError' => 'false()',
        'regexp' => '\'^[0-9]{2}:[0-9]{2}:[0-9]{2}(\\.[0-9]{1,5})?$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    6 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2676\'',
        'errorCodeValidate' => '\'2677\'',
        'node' => '$cacAgentPartyIdentificationID',
        'regexp' => '\'^[0-9]{11}$\'',
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
        'errorCodeNotExist' => '\'2678\'',
        'errorCodeValidate' => '\'2511\'',
        'node' => '$cacAgentPartyIdentificationSchemeID',
        'regexp' => '\'^(6)$\'',
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
        'errorCodeValidate' => '\'2901\'',
        'node' => '$cacAgentPartyNameName',
        'regexp' => '\'^(.{1,100})$\'',
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
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => '$cacAgentPartyPostalAddressID',
        'errorCodeValidate' => '\'2917\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$cacAgentPartyPostalAddressID',
      ),
    ),
    10 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2916\'',
        'node' => '$cacAgentPartyPostalAddressStreetName',
        'regexp' => '\'^(.{1,100})$\'',
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
        'errorCodeValidate' => '\'2902\'',
        'node' => '$cacAgentPartyPostalAddressCitySubdivisionName',
        'regexp' => '\'^(.{1,30})$\'',
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
        'errorCodeValidate' => '\'2903\'',
        'node' => '$cacAgentPartyPostalAddressCityName',
        'regexp' => '\'^(.{1,30})$\'',
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
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2904\'',
        'node' => '$cacAgentPartyPostalAddressCountrySubentity',
        'regexp' => '\'^(.{1,30})$\'',
        'isError' => 'false()',
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
        'errorCodeValidate' => '\'2905\'',
        'node' => '$cacAgentPartyPostalAddressDistrict',
        'regexp' => '\'^(.{1,30})$\'',
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
        'errorCodeValidate' => '\'2548\'',
        'node' => '$cacAgentPartyCountryCode',
        'regexp' => '\'^(PE)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    16 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'1037\'',
        'errorCodeValidate' => '\'1038\'',
        'node' => '$cacAgentPartyLegalEntityName',
        'regexp' => '\'^(.{1,100})$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    17 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2679\'',
        'errorCodeValidate' => '\'2680\'',
        'node' => '$cacReceiverPartyIdentificationID',
        'regexp' => '\'^[a-zA-Z0-9]{1,15}$\'',
      ),
      'context' => '/*',
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
        'errorCodeNotExist' => '\'2516\'',
        'errorCodeValidate' => '\'2511\'',
        'node' => '$cacReceiverPartyIdentificationSchemeID',
        'regexp' => '\'^[01467A]{1}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    19 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2911\'',
        'node' => '$cacReceiverPartyNameName',
        'regexp' => '\'^(.{1,100})$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    20 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'13\'',
        'idCatalogo' => '$cacReceiverPartyPostalAddressID',
        'errorCodeValidate' => '\'2917\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$cacReceiverPartyPostalAddressID',
      ),
    ),
    21 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2919\'',
        'node' => '$cacReceiverPartyPostalAddressStreetName',
        'regexp' => '\'^(.{1,100})$\'',
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
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2912\'',
        'node' => '$cacReceiverPartyPostalAddressCitySubdivisionName',
        'regexp' => '\'^(.{1,30})$\'',
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
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2913\'',
        'node' => '$cacReceiverPartyPostalAddressCityName',
        'regexp' => '\'^(.{1,30})$\'',
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
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2914\'',
        'node' => '$cacReceiverPartyPostalAddressCountrySubentity',
        'regexp' => '\'^(.{1,30})$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    25 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2915\'',
        'node' => '$cacReceiverPartyPostalAddressDistrict',
        'regexp' => '\'^(.{1,30})$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    26 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2548\'',
        'node' => '$cacReceiverPartyCountryCode',
        'regexp' => '\'^(PE)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    27 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2134\'',
        'errorCodeValidate' => '\'2133\'',
        'node' => '$cacReceiverPartyLegalEntityName',
        'regexp' => '\'^(.{1,100})$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    28 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'22\'',
        'idCatalogo' => '$sacSUNATPerceptionSystemCode',
        'errorCodeValidate' => '\'2602\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    29 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2683\'',
        'errorCodeValidate' => '\'2669\'',
        'node' => '$cbcTotalInvoiceAmount',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    30 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2684\'',
        'errorCodeValidate' => '\'2685\'',
        'node' => '$cbcTotalInvoiceAmountCurrencyID',
        'regexp' => '\'^(PEN)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    31 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2686\'',
        'errorCodeValidate' => '\'2687\'',
        'node' => '$sacSUNATTotalCashed',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    32 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2689\'',
        'errorCodeValidate' => '\'2690\'',
        'node' => '$sacSUNATTotalCashedCurrencyID',
        'regexp' => '\'^(PEN)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    33 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2691\'',
        'errorCodeValidate' => '\'2692\'',
        'node' => '$tipoDocumentoRel',
        'regexp' => '\'^(01|03|12|07|08|40|41)$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    34 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2693\'',
        'errorCodeValidate' => '\'2694\'',
        'node' => '$numeroDocumentoRel',
        'regexp' => '\'^[a-zA-Z0-9]{1,20}(-[0-9]{1,20})$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel = \'12\'',
      ),
    ),
    35 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2693\'',
        'errorCodeValidate' => '\'2694\'',
        'node' => '$numeroDocumentoRel',
        'regexp' => '\'^(E001|EB01|((F|B|P)[A-Z0-9]{3})|((?!(^0{4}))\\d{4}))-(?!0+$)([0-9]{1,8})$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    36 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'1010\'',
        'errorCodeValidate' => '\'1009\'',
        'node' => '$fechaEmisionDocumentoRel',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea \', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
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
        'errorCodeNotExist' => '\'2695\'',
        'errorCodeValidate' => '\'2696\'',
        'node' => '$importeTotalDocumentoRel',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    38 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2701\'',
        'errorCodeValidate' => '\'2718\'',
        'node' => '$monedaImporteTotalDocumentoRel',
        'regexp' => '\'^[A-Z]{3}$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    39 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2697\'',
        'errorCodeValidate' => '\'2698\'',
        'node' => '$numeroCobro',
        'regexp' => '\'^[0-9]{1,9}$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    40 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2626\'',
        'node' => 'cac:Payment/cbc:ID',
        'expresion' => 'count(key(\'by-document-payment-id\', concat(cbc:ID/@schemeID, \' \', cbc:ID, \' \', cac:Payment/cbc:ID))) > 1',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    41 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2699\'',
        'errorCodeValidate' => '\'2700\'',
        'node' => '$importeCobro',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    42 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2607\'',
        'errorMessage' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel != $monedaImporteCobro',
      ),
    ),
    43 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2702\'',
        'errorCodeValidate' => '\'2703\'',
        'node' => '$fechaCobro',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea \', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    44 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2704\'',
        'errorCodeValidate' => '\'2705\'',
        'node' => '$importePercibido',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    45 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2706\'',
        'errorCodeValidate' => '\'2707\'',
        'node' => '$monedaImportePercibido',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea \', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    46 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2708\'',
        'errorCodeValidate' => '\'2709\'',
        'node' => '$fechaPercepcion',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea \', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    47 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2710\'',
        'errorCodeValidate' => '\'2711\'',
        'node' => '$importeTotalACobrar',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    48 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2712\'',
        'errorCodeValidate' => '\'2713\'',
        'node' => '$monedaImporteTotalACobrar',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    49 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2714\'',
        'node' => '$monedaReferenciaTipoCambio',
        'regexp' => '\'^[A-Z]{3}$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    50 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2749\'',
        'errorMessage' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
        2 => '$monedaReferenciaTipoCambio != $monedaImporteTotalDocumentoRel',
      ),
    ),
    51 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2715\'',
        'node' => '$monedaPENTipoCambio',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    52 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2716\'',
        'node' => '$importeTipoCambio',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,4}(\\.\\d{1,6})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    53 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2717\'',
        'node' => '$fechaTipoCambio',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    54 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2719\'',
        'errorCodeValidate' => '\'2714\'',
        'node' => '$monedaReferenciaTipoCambio',
        'regexp' => '\'^[A-Z]{3}$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    55 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2749\'',
        'errorMessage' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaReferenciaTipoCambio != $monedaImporteTotalDocumentoRel',
      ),
    ),
    56 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2720\'',
        'errorCodeValidate' => '\'2715\'',
        'node' => '$monedaPENTipoCambio',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    57 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2721\'',
        'errorCodeValidate' => '\'2716\'',
        'node' => '$importeTipoCambio',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,4}(\\.\\d{1,6})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    58 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2722\'',
        'errorCodeValidate' => '\'2717\'',
        'node' => '$fechaTipoCambio',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATPerceptionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
  ),
);
