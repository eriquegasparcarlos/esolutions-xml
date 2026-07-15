<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegRetencion-1.0.3.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegRetencion-1.0.3.xsl',
  'globals' => 
  array (
    'cbcUBLVersionID' => 'cbc:UBLVersionID',
    'cbcCustomizationID' => 'cbc:CustomizationID',
    'cbcID' => 'cbc:ID',
    'cbcIssueDate' => 'cbc:IssueDate',
    'cacAgentParty' => 'cac:AgentParty',
    'cacAgentPartyIdentificationID' => '$cacAgentParty/cac:PartyIdentification/cbc:ID',
    'cacAgentPartyIdentificationSchemeID' => '$cacAgentParty/cac:PartyIdentification/cbc:ID/@schemeID',
    'cacAgentPartyNameName' => '$cacAgentParty/cac:PartyName/cbc:Name',
    'cacAgentPartyPostalAddressID' => '$cacAgentParty/cac:PostalAddress/cbc:ID',
    'cacAgentPartyPostalAddressStreetName' => '$cacAgentParty/cac:PostalAddress/cbc:StreetName',
    'cacAgentPartyPostalAddressCitySubdivisionName' => '$cacAgentParty/cac:PostalAddress/cbc:CitySubdivisionName',
    'cacAgentPartyPostalAddressCityName' => '$cacAgentParty/cac:PostalAddress/cbc:CityName',
    'cacAgentPartyPostalAddressCountrySubentity' => '$cacAgentParty/cac:PostalAddress/cbc:CountrySubentity',
    'cacAgentPartyPostalAddressDistrict' => '$cacAgentParty/cac:PostalAddress/cbc:District',
    'cacAgentPartyLegalEntityName' => '$cacAgentParty/cac:PartyLegalEntity/cbc:RegistrationName',
    'cacAgentPartyCountryCode' => '$cacAgentParty/cac:PostalAddress/cac:Country/cbc:IdentificationCode',
    'cacReceiverParty' => 'cac:ReceiverParty',
    'cacReceiverPartyIdentificationID' => '$cacReceiverParty/cac:PartyIdentification/cbc:ID',
    'cacReceiverPartyIdentificationSchemeID' => '$cacReceiverParty/cac:PartyIdentification/cbc:ID/@schemeID',
    'cacReceiverPartyNameName' => '$cacReceiverParty/cac:PartyName/cbc:Name',
    'cacReceiverPartyPostalAddressID' => '$cacReceiverParty/cac:PostalAddress/cbc:ID',
    'cacReceiverPartyPostalAddressStreetName' => '$cacReceiverParty/cac:PostalAddress/cbc:StreetName',
    'cacReceiverPartyPostalAddressCitySubdivisionName' => '$cacReceiverParty/cac:PostalAddress/cbc:CitySubdivisionName',
    'cacReceiverPartyPostalAddressCityName' => '$cacReceiverParty/cac:PostalAddress/cbc:CityName',
    'cacReceiverPartyPostalAddressCountrySubentity' => '$cacReceiverParty/cac:PostalAddress/cbc:CountrySubentity',
    'cacReceiverPartyPostalAddressDistrict' => '$cacReceiverParty/cac:PostalAddress/cbc:District',
    'cacReceiverPartyLegalEntityName' => '$cacReceiverParty/cac:PartyLegalEntity/cbc:RegistrationName',
    'cacReceiverPartyCountryCode' => '$cacReceiverParty/cac:PostalAddress/cac:Country/cbc:IdentificationCode',
    'sacSUNATRetentionSystemCode' => 'sac:SUNATRetentionSystemCode',
    'sacSUNATRetentionPercent' => 'sac:SUNATRetentionPercent',
    'cbcNote' => 'cbc:Note',
    'cbcTotalInvoiceAmount' => 'cbc:TotalInvoiceAmount',
    'cbcTotalInvoiceAmountCurrencyID' => 'cbc:TotalInvoiceAmount/@currencyID',
    'sacSUNATTotalPaid' => 'sac:SUNATTotalPaid',
    'sacSUNATTotalPaidCurrencyID' => 'sac:SUNATTotalPaid/@currencyID',
    'numeroRuc' => 'substring($nombreArchivoEnviado, 1, 11)',
    'tipoComprobante' => 'substring($nombreArchivoEnviado, 13, 2)',
    'numeroSerie' => 'substring($nombreArchivoEnviado, 16, 4)',
    'numeroComprobante' => 'substring($nombreArchivoEnviado, 21, string-length($nombreArchivoEnviado) - 24)',
    'fileName' => '$nombreArchivoEnviado',
    'rucFilename' => 'substring($fileName,1,11)',
    'cbcIssueTime' => 'cbc:IssueTime',
    'sumatoriaTotalRetenido' => '(round(sum((sac:SUNATRetentionDocumentReference[cbc:ID/@schemeID != \'07\' and cbc:ID/@schemeID != \'20\']/sac:SUNATRetentionInformation/sac:SUNATRetentionAmount)) * 100) div 100)',
    'cbcPayableRoundingAmount' => 'cbc:PayableRoundingAmount',
    'cbcPayableRoundingAmountCurrencyID' => 'cbc:PayableRoundingAmount/@currencyID',
    'sumatoriaTotalAPagar' => '(round(sum((sac:SUNATRetentionDocumentReference[cbc:ID/@schemeID != \'07\' and cbc:ID/@schemeID != \'20\']/sac:SUNATRetentionInformation/sac:SUNATNetTotalPaid)) * 100) div 100)',
    'sumaTotalPagadoMasRedondeo' => '(round(number($sumatoriaTotalAPagar + $cbcPayableRoundingAmount) * 100) div 100)',
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
        'regexp' => '\'(^[R][A-Z0-9]{3}|^[\\d]{4})-[0-9]{1,8}?$\'',
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
        'errorCodeValidate' => '\'0154\'',
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
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'1034\'',
        'node' => '$cacAgentPartyIdentificationID',
        'expresion' => '$rucFilename != $cacAgentPartyIdentificationID',
      ),
      'context' => '/*',
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
    9 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2901\'',
        'node' => '$cacAgentPartyNameName',
        'regexp' => '\'^(.{1,1500})$\'',
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
    11 => 
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
    12 => 
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
    13 => 
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
    14 => 
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
    15 => 
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
    16 => 
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
    17 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'1037\'',
        'errorCodeValidate' => '\'1038\'',
        'node' => '$cacAgentPartyLegalEntityName',
        'regexp' => '\'^(.{1,1500})$\'',
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
        'errorCodeNotExist' => '\'2723\'',
        'errorCodeValidate' => '\'2724\'',
        'node' => '$cacReceiverPartyIdentificationID',
        'regexp' => '\'^[0-9]{11}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    19 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2516\'',
        'errorCodeValidate' => '\'2511\'',
        'node' => '$cacReceiverPartyIdentificationSchemeID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    20 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2906\'',
        'node' => '$cacReceiverPartyNameName',
        'regexp' => '\'^(.{1,1500})$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    21 => 
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
    22 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2918\'',
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
    23 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2907\'',
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
    24 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2908\'',
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
    25 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2909\'',
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
    26 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2910\'',
        'node' => '$cacReceiverPartyPostalAddressDistrict',
        'regexp' => '\'^(.{1,30})$\'',
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
    28 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2134\'',
        'errorCodeValidate' => '\'2133\'',
        'node' => '$cacReceiverPartyLegalEntityName',
        'regexp' => '\'^(.{1,1500})$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    29 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'catalogo' => '\'23\'',
        'idCatalogo' => '$sacSUNATRetentionSystemCode',
        'errorCodeValidate' => '\'2618\'',
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
        'errorCodeNotExist' => '\'2725\'',
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
    31 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2727\'',
        'errorCodeValidate' => '\'2728\'',
        'node' => '$cbcTotalInvoiceAmountCurrencyID',
        'regexp' => '\'^(PEN)$\'',
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
        'errorCodeNotExist' => '\'2729\'',
        'errorCodeValidate' => '\'2730\'',
        'node' => '$sacSUNATTotalPaid',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
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
        'errorCodeNotExist' => '\'2731\'',
        'errorCodeValidate' => '\'2732\'',
        'node' => '$sacSUNATTotalPaidCurrencyID',
        'regexp' => '\'^(PEN)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    34 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2628\'',
        'node' => '$cbcTotalInvoiceAmount',
        'expresion' => '$cbcTotalInvoiceAmount != $sumatoriaTotalRetenido',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    35 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4314\'',
        'node' => '$cbcPayableRoundingAmount',
        'expresion' => 'number($cbcPayableRoundingAmount) > number(\'1.00\') or number($cbcPayableRoundingAmount) < number(\'-1.00\')',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$cbcPayableRoundingAmount',
      ),
    ),
    36 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4316\'',
        'node' => '$cbcPayableRoundingAmountCurrencyID',
        'regexp' => '\'^(PEN)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$cbcPayableRoundingAmount',
      ),
    ),
    37 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2629\'',
        'node' => '$sacSUNATTotalPaid',
        'expresion' => '$sumaTotalPagadoMasRedondeo != $sacSUNATTotalPaid',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$cbcPayableRoundingAmount',
      ),
    ),
    38 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2629\'',
        'node' => '$sacSUNATTotalPaid',
        'expresion' => '$sumatoriaTotalAPagar != $sacSUNATTotalPaid',
      ),
      'context' => '/*',
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
        'errorCodeNotExist' => '\'2691\'',
        'errorCodeValidate' => '\'2692\'',
        'node' => '$tipoDocumentoRel',
        'regexp' => '\'^(01|12|07|08|20)$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    40 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel = \'12\'',
      ),
    ),
    41 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2693\'',
        'errorCodeValidate' => '\'2694\'',
        'node' => '$numeroDocumentoRel',
        'regexp' => '\'^(E001|((F|R)[A-Z0-9]{3})|(\\d{4}))-(?!0+$)([0-9]{1,8})$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    42 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    43 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    44 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    45 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2733\'',
        'errorCodeValidate' => '\'2734\'',
        'node' => '$numeroPago',
        'regexp' => '\'^[0-9]{1,9}$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    46 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2626\'',
        'node' => 'cac:Payment/cbc:ID',
        'expresion' => 'count(key(\'by-document-payment-id\', concat(cbc:ID/@schemeID, \' \', cbc:ID, \' \', cac:Payment/cbc:ID))) > 1',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
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
        'errorCodeNotExist' => '\'2735\'',
        'errorCodeValidate' => '\'2736\'',
        'node' => '$importePago',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    48 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2622\'',
        'errorMessage' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel != $monedaImportePago',
      ),
    ),
    49 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2737\'',
        'errorCodeValidate' => '\'2738\'',
        'node' => '$fechaPago',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea \', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    50 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2739\'',
        'errorCodeValidate' => '\'2740\'',
        'node' => '$importeRetenido',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    51 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2741\'',
        'errorCodeValidate' => '\'2742\'',
        'node' => '$monedaImporteRetenido',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea \', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    52 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2743\'',
        'errorCodeValidate' => '\'2744\'',
        'node' => '$fechaRetencion',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea \', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    53 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2745\'',
        'errorCodeValidate' => '\'2746\'',
        'node' => '$importeTotalACobrar',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,12}(\\.\\d{1,2})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    54 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2747\'',
        'errorCodeValidate' => '\'2748\'',
        'node' => '$monedaImporteTotalACobrar',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    55 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2714\'',
        'node' => '$monedaReferenciaTipoCambio',
        'regexp' => '\'^[A-Z]{3}$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    56 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2749\'',
        'errorMessage' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
        2 => '$monedaReferenciaTipoCambio != $monedaImporteTotalDocumentoRel',
      ),
    ),
    57 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2715\'',
        'node' => '$monedaPENTipoCambio',
        'regexp' => '\'^(PEN)$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    58 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2716\'',
        'node' => '$importeTipoCambio',
        'regexp' => '\'(?!(^0+(\\.0+)?$))(^\\d{1,4}(\\.\\d{1,6})?$)\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    59 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2717\'',
        'node' => '$fechaTipoCambio',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaImporteTotalDocumentoRel = \'PEN\'',
      ),
    ),
    60 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    61 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2749\'',
        'errorMessage' => 'concat(\'Error en la linea\', position())',
      ),
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
        1 => '$monedaReferenciaTipoCambio != $monedaImporteTotalDocumentoRel',
      ),
    ),
    62 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    63 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
    64 => 
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
      'context' => 'sac:SUNATRetentionDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$tipoDocumentoRel != \'07\'',
      ),
    ),
  ),
);
