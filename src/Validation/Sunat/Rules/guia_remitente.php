<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegGreRemitente-2.0.1.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegGreRemitente-2.0.1.xsl',
  'globals' => 
  array (
  ),
  'rules' => 
  array (
    0 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2111\'',
        'errorCodeValidate' => '\'2110\'',
        'node' => 'cbc:UBLVersionID',
        'regexp' => '\'^(2.1)$\'',
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
        'errorCodeNotExist' => '\'2113\'',
        'errorCodeValidate' => '\'2112\'',
        'node' => 'cbc:CustomizationID',
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
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'1001\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[T][A-Z0-9]{3}-[0-9]{1,8}?$\'',
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
        'errorCodeValidate' => '\'1034\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => '$numeroRuc != cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
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
    5 => 
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
    6 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3436\'',
        'node' => 'cbc:IssueDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
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
        'errorCodeNotExist' => '\'3437\'',
        'errorCodeValidate' => '\'3438\'',
        'node' => 'cbc:IssueTime',
        'regexp' => '\'^[0-9]{2}:[0-9]{2}:[0-9]{2}?$\'',
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
        'errorCodeNotExist' => '\'1050\'',
        'errorCodeValidate' => '\'1051\'',
        'node' => 'cbc:DespatchAdviceTypeCode',
        'regexp' => '\'^(09)$\'',
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
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DespatchAdviceTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
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
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DespatchAdviceTypeCode/@listName',
        'regexp' => '\'^(Tipo de Documento)$\'',
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
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:DespatchAdviceTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01)$\'',
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
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2678\'',
        'errorCodeValidate' => '\'2511\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
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
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Documento de identidad - Remitente\'',
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
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Documento de identidad - Remitente\'',
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
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Documento de identidad - Remitente\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    16 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'1037\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
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
        'errorCodeValidate' => '\'4338\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\' cbc:RegistrationName \', cbc:RegistrationName)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:DespatchSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) > 250 or string-length(cac:DespatchSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) < 1 ',
      ),
    ),
    18 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4338\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(translate(cac:DespatchSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    19 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4338\'',
        'node' => 'cac:DespatchSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
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
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3353\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID[text() != \'\']',
        'expresion' => 'count(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity) > 1',
        'descripcion' => '\'Existe mas de una Autorizacion del remitente\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID[text() != \'\']) > 0',
      ),
    ),
    21 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2757\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
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
        'errorCodeNotExist' => '\'2759\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    23 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'2760\'',
        'idCatalogo' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3417\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'06\' or text() = \'17\' or text() = \'19\']',
        1 => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'6\'',
      ),
    ),
    25 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento de identidad del Destinatario\'',
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
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento de identidad del Destinatario\'',
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
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento de identidad del Destinatario\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    28 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2758\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[0-9]{8}$\'',
        'descripcion' => '\'Numero de DNI invalido\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'1\'',
      ),
    ),
    29 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2758\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
        'descripcion' => '\'Numero de RUC invalido\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\'',
      ),
    ),
    30 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2758\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
        'descripcion' => '\'Longitud del numero de documento invalido\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID) > 15 or string-length(cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID) < 1 ',
      ),
    ),
    31 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2758\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[^\\s]{1,}$\'',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'2554\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'02\' or text() = \'04\' or text() = \'18\' or text() = \'07\']',
        1 => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'6\' or ($numdocDestinatario != $numdocRemitente)',
      ),
    ),
    33 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2555\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'01\' or text() = \'03\' or text() = \'05\' or text() = \'06\' or text() = \'09\' or text() = \'14\' or text() = \'17\']',
        1 => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\' and ($numdocDestinatario = $numdocRemitente)',
      ),
    ),
    34 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2761\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
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
        'errorCodeValidate' => '\'4152\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:DeliveryCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) > 250 or string-length(cac:DeliveryCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) < 1 ',
      ),
    ),
    36 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4152\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(translate(cac:DeliveryCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    37 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4152\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
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
        'errorCodeValidate' => '\'4375\'',
        'node' => 'cac:SellerSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'count(cac:SellerSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID[text() != \'\']) = 0',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'02\' or text() = \'07\']',
      ),
    ),
    39 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3331\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'03\' or text() = \'13\']',
        1 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
      ),
    ),
    40 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3332\'',
        'idCatalogo' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'03\' or text() = \'13\']',
        1 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
      ),
    ),
    41 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4377\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento de identidad del comprador\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'03\' and text() != \'13\']',
      ),
    ),
    42 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Comprador - Tipo de documento de identidad\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Tipo de documento de identidad\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    44 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Tipo de documento de identidad\'',
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
        'errorCodeValidate' => '\'4378\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'count(cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID[text() != \'\']) < 1',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado= \'03\'',
      ),
    ),
    46 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3333\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'03\' or text() = \'13\'] and (cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\' or cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\')',
      ),
    ),
    47 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4377\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Numero de documento de identidad del comprador\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'03\' and text() != \'13\'] and (cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID != \'\')',
      ),
    ),
    48 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3334\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'03\' and cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\' and (cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID = cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID)',
      ),
    ),
    49 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3335\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'03\' and cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID and cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID = cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
    ),
    50 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3337\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[0-9]{8}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        1 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'1\'',
      ),
    ),
    51 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3337\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        1 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\'',
      ),
    ),
    52 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3337\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        1 => 'string-length(cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID) > 15 or string-length(cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID) < 1 ',
      ),
    ),
    53 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3337\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[^\\s]{1,}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
      ),
    ),
    54 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3339\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'03\' and cac:BuyerCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
      ),
    ),
    55 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4381\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Nombre/Razon del comprador - Longitud invalida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
        1 => 'string-length(cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) > 250 or string-length(cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) < 1 ',
      ),
    ),
    56 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4381\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Nombre/Razon del comprador - Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
        1 => 'string-length(translate(cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    57 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4381\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => '\'Nombre/Razon del comprador - Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
      ),
    ),
    58 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4377\'',
        'node' => 'cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Nombre/Razon del comprador\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'03\' and text() != \'13\'] and cac:BuyerCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\' ',
      ),
    ),
    59 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3440\'',
        'node' => 'cac:Shipment/cbc:HandlingCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']]) = 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\']',
      ),
    ),
    60 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3445\'',
        'node' => 'cac:Shipment/cbc:HandlingCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() != \'09\' and text() != \'49\' and text() != \'50\' and text() != \'52\' and text() != \'80\']]) > 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\']',
      ),
    ),
    61 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3445\'',
        'node' => 'cac:Shipment/cbc:HandlingCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'52\']]) > 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'13\']',
      ),
    ),
    62 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3445\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']]) > 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'08\' and text() != \'09\' and text() != \'13\' and text() != \'19\']',
      ),
    ),
    63 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3445\'',
        'node' => '$motivoTraslado',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\' or text() = \'92\']]) > 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'19\']',
      ),
    ),
    64 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3445\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() != \'50\' and text() != \'52\' and text() != \'91\' and text() != \'92\']]) > 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    65 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3493\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\' or text() = \'91\' or text() = \'92\']]) = 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    66 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3494\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']]) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    67 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3612\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentTypeCode',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'92\']]) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    68 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3613\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentTypeCode',
        'expresion' => '(count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\']]) > 0 and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'92\']]) > 0)            or (count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'52\']]) > 0 and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'92\']]) > 0)             or (count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']]) > 0 and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'92\']]) > 0)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    69 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3463\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentTypeCode',
        'expresion' => '(count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\']]) > 0 and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']]) > 0)            or (count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'52\']]) > 0 and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']]) > 0)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    70 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3352\'',
        'node' => 'cac:Shipment/cbc:HandlingCode',
        'expresion' => 'count(cac:DespatchLine[cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7020\']]) = 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'49\' or text() = \'80\']]) > 0',
        1 => 'count(cac:Shipment[cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']]) = 0',
      ),
    ),
    71 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3404\'',
        'node' => 'cac:Shipment/cbc:HandlingCode',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    72 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3405\'',
        'idCatalogo' => 'cac:Shipment/cbc:HandlingCode',
        'catalogo' => '\'20\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Shipment/cbc:HandlingCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    74 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Shipment/cbc:HandlingCode/@listName',
        'regexp' => '\'^(Motivo de traslado)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    75 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cac:Shipment/cbc:HandlingCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo20)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    76 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3457\'',
        'node' => 'cac:Shipment/cbc:HandlingInstructions',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'13\'',
      ),
    ),
    77 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4440\'',
        'node' => 'cac:Shipment/cbc:HandlingInstructions',
        'expresion' => 'count(cac:Shipment/cbc:HandlingInstructions) > 1',
        'descripcion' => '\'Existe mas de una descripcion del motivo de traslado\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'13\'',
      ),
    ),
    78 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4190\'',
        'node' => 'cac:Shipment/cbc:HandlingInstructions',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Longitud errada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'13\'',
        1 => 'string-length(cac:Shipment/cbc:HandlingInstructions) > 100 or string-length(cac:Shipment/cbc:HandlingInstructions) < 3 ',
      ),
    ),
    79 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4190\'',
        'node' => 'cac:Shipment/cbc:HandlingInstructions',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'No contiene 3 caracteres alfabeticos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'13\'',
        1 => '(string-length($cadena) - string-length(translate($cadena, $alfabeto, \'\'))) < 3',
      ),
    ),
    80 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4190\'',
        'node' => 'cac:Shipment/cbc:HandlingInstructions',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'13\'',
      ),
    ),
    81 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3623\'',
        'node' => 'cac:Shipment/cbc:NetWeightMeasure',
        'expresion' => '(cac:Shipment/cbc:NetWeightMeasure)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    82 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3624\'',
        'node' => 'cac:Shipment/cbc:Information',
        'expresion' => '(cac:Shipment/cbc:Information)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    83 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3625\'',
        'node' => 'cac:Shipment/cbc:GrossWeightMeasure',
        'expresion' => '(cac:Shipment/cbc:GrossWeightMeasure)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    84 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3626\'',
        'node' => 'cac:Shipment/cbc:TotalTransportHandlingUnitQuantity',
        'expresion' => '(cac:Shipment/cbc:TotalTransportHandlingUnitQuantity)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    85 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3627\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID',
        'expresion' => '(cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    86 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3628\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:TraceID',
        'expresion' => '(cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:TraceID)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    87 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4383\'',
        'node' => 'cac:Shipment/cbc:NetWeightMeasure',
        'isError' => 'false()',
        'descripcion' => '\'Campo cac:Shipment/cbc:NetWeightMeasure\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'09\'] and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0               and not($tipoDocumentoCita) and not($condicionTrasladoDAM_DS)',
      ),
    ),
    88 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3395\'',
        'node' => 'cac:Shipment/cbc:NetWeightMeasure',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'08\' and text() != \'09\' and text() != \'19\'] and cac:Shipment/cbc:NetWeightMeasure',
      ),
    ),
    89 => 
    array (
      'primitive' => 'validateValueThreeDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3397\'',
        'node' => 'cac:Shipment/cbc:NetWeightMeasure',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3398\'',
        'node' => 'cac:Shipment/cbc:NetWeightMeasure/@unitCode',
        'regexp' => '\'^(KGM)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    91 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4387\'',
        'node' => 'cac:Shipment/cbc:Information',
        'isError' => 'false()',
        'descripcion' => '\'Campo cac:Shipment/cbc:Information\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'09\'] and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                    and not($tipoDocumentoCita) and not($condicionTrasladoDAM_DS)',
      ),
    ),
    92 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3418\'',
        'node' => 'cac:Shipment/cbc:Information',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'08\' and text() != \'09\' and text() != \'19\'] and cac:Shipment/cbc:Information',
      ),
    ),
    93 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4428\'',
        'node' => 'cac:Shipment/cbc:Information',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cbc:Information',
        1 => 'string-length(cac:Shipment/cbc:Information) > 250 ',
      ),
    ),
    94 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4428\'',
        'node' => 'cac:Shipment/cbc:Information',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cbc:Information',
        1 => 'string-length(translate(cac:Shipment/cbc:Information,\' \',\'\')) = 0 ',
      ),
    ),
    95 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4428\'',
        'node' => 'cac:Shipment/cbc:Information',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cbc:Information',
      ),
    ),
    96 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2880\'',
        'node' => 'cac:Shipment/cbc:GrossWeightMeasure',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'92\']]) = 0',
      ),
    ),
    97 => 
    array (
      'primitive' => 'validateValueThreeDecimalIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2523\'',
        'node' => 'cac:Shipment/cbc:GrossWeightMeasure',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    98 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2881\'',
        'node' => 'cac:Shipment/cbc:GrossWeightMeasure/@unitCode',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'92\']]) = 0',
      ),
    ),
    99 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2523\'',
        'node' => 'cac:Shipment/cbc:GrossWeightMeasure/@unitCode',
        'regexp' => '\'^(KGM)|(TNE)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    100 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3487\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) > 0',
      ),
    ),
    101 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3419\'',
        'node' => 'cac:Shipment/cbc:TotalTransportHandlingUnitQuantity',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(($motivoTraslado = \'09\' and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']])  > 0)                 or ($motivoTraslado = \'19\' and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']])  > 0))           and count(cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID[normalize-space(.) != \'\']) = 0',
      ),
    ),
    102 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3621\'',
        'node' => 'cac:Shipment/cbc:TotalTransportHandlingUnitQuantity',
        'expresion' => '(cac:Shipment/cbc:TotalTransportHandlingUnitQuantity)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '((($motivoTraslado = \'08\' or $motivoTraslado = \'09\' or $motivoTraslado = \'19\') and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']])  > 0)                 or ($motivoTraslado = \'19\' and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']])  > 0))        and count(cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID[normalize-space(.) != \'\']) > 0',
      ),
    ),
    103 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3631\'',
        'node' => 'cac:Shipment/cbc:TotalTransportHandlingUnitQuantity',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado = \'08\' or $motivoTraslado = \'19\') and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']])  > 0        and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) > 0        and count(cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID[normalize-space(.) != \'\']) = 0',
      ),
    ),
    104 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3632\'',
        'node' => 'cac:Shipment/cbc:TotalTransportHandlingUnitQuantity',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado = \'08\' or $motivoTraslado = \'19\') and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']])  > 0        and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0        and count(cac:Shipment/cac:TransportHandlingUnit/cac:Package) = 0',
      ),
    ),
    105 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3489\'',
        'node' => 'cac:Shipment/cbc:TotalTransportHandlingUnitQuantity',
        'regexp' => '\'^([0-9]{1,13})$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    106 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3420\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado = \'08\' or $motivoTraslado = \'09\' or $motivoTraslado = \'19\') and count(cac:Shipment/cac:TransportHandlingUnit/cac:Package/cbc:ID[text() != \'\']) > 2 ',
      ),
    ),
    107 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3421\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-contenedores\',cbc:ID )) > 1',
        'descripcion' => 'concat(\'Contenedor : \', cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID != \'\' ',
      ),
    ),
    108 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4071\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[A-Z0-9\\-\\/]{1,17}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Contenedor : \', cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    109 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3422\'',
        'node' => 'cbc:TraceID',
        'descripcion' => 'concat(\'Contenedor : \', cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado = \'09\') and count($indicadorTraslado[text()=\'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 0 and cbc:ID != \'\'                         and count($indicadorTraslado[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0',
      ),
    ),
    110 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3422\'',
        'node' => 'cbc:TraceID',
        'descripcion' => 'concat(\'Contenedor : \', cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado = \'08\' or $motivoTraslado = \'09\' or $motivoTraslado = \'19\') and count($indicadorTraslado[text()=\'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 0 and cbc:ID != \'\'       and count($indicadorTraslado[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) > 0',
      ),
    ),
    111 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3495\'',
        'node' => 'cbc:TraceID',
        'descripcion' => 'concat(\'Contenedor : \', cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'19\' and count($indicadorTraslado[text()=\'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) > 0 and cbc:ID != \'\'',
        1 => '(key(\'by-despatchLine-contenedores\', cbc:ID))[1]/cac:AdditionalItemProperty[cbc:NameCode = \'7028\']/cbc:Value = 0 ',
      ),
    ),
    112 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3423\'',
        'node' => 'cbc:TraceID',
        'expresion' => 'count(key(\'by-precintos\',cbc:TraceID )) > 1',
        'descripcion' => 'concat(\'Precinto : \', cbc:TraceID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:TraceID != \'\' ',
      ),
    ),
    113 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4074\'',
        'node' => 'cbc:TraceID',
        'regexp' => '\'^(?!0+$)([A-Z0-9]{1,100})(,(?!0+$)[A-Z0-9]{1,100})*$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:Package',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'08\' or $motivoTraslado = \'09\' or $motivoTraslado = \'19\' and cbc:TraceID != \'\'',
      ),
    ),
    114 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2532\'',
        'errorCodeValidate' => '\'2773\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cbc:TransportModeCode',
        'regexp' => '\'^(01|02)$\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cbc:TransportModeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cbc:TransportModeCode/@listName',
        'regexp' => '\'^(Modalidad de traslado)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cbc:TransportModeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo18)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    118 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3406\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'02\' or                    ($modalidadTraslado = \'01\' and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
      ),
    ),
    119 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3407\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'02\' or                    ($modalidadTraslado = \'01\' and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
      ),
    ),
    120 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3343\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'expresion' => 'number(translate(cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate,\'-\',\'\')) < number(translate(cbc:IssueDate,\'-\',\'\'))',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'02\' or                    ($modalidadTraslado = \'01\' and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        1 => '$modalidadTraslado = \'02\'',
      ),
    ),
    121 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3617\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:LoadingTransportEvent/cbc:OccurrenceDate',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'01\'',
      ),
    ),
    122 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3619\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:LoadingTransportEvent/cbc:OccurrenceDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'01\'',
      ),
    ),
    123 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3618\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:LoadingTransportEvent/cbc:OccurrenceDate',
        'expresion' => 'number(translate(cac:Shipment/cac:ShipmentStage/cac:LoadingTransportEvent/cbc:OccurrenceDate,\'-\',\'\')) < number(translate(cbc:IssueDate,\'-\',\'\'))',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'01\'',
      ),
    ),
    124 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3616\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'expresion' => 'number(translate(cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate,\'-\',\'\')) < number(translate(cac:Shipment/cac:ShipmentStage/cac:LoadingTransportEvent/cbc:OccurrenceDate,\'-\',\'\'))',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'01\' and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and        count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1',
      ),
    ),
    125 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3388\'',
        'node' => 'text()',
        'expresion' => 'text() != \'SUNAT_Envio_IndicadorTransbordoProgramado\' and text() != \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\' and text() != \'SUNAT_Envio_IndicadorRetornoVehiculoEnvaseVacio\'                                                     and text() != \'SUNAT_Envio_IndicadorRetornoVehiculoVacio\' and text() != \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\' and text() != \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\'                            and text() != \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\'                                                    and text() != \'SUNAT_Envio_IndicadorTrasladoContenedor\'',
      ),
      'context' => 'cac:Shipment/cbc:SpecialInstructions',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring(text(),1,6) = \'SUNAT_\' ',
      ),
    ),
    126 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTransbordoProgramado\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTransbordoProgramado\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    127 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    128 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorRetornoVehiculoEnvaseVacio\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorRetornoVehiculoEnvaseVacio\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    129 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorRetornoVehiculoVacio\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorRetornoVehiculoVacio\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    130 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    131 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) > 1',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    133 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3478\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado != \'19\' or count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']]) = 0)',
      ),
    ),
    134 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3392\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado != \'08\' and $motivoTraslado != \'09\' and $motivoTraslado != \'19\') and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 1',
      ),
    ),
    135 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3485\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado = \'19\' and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\' or text() = \'92\']]) > 0)',
      ),
    ),
    136 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4437\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Indicador SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'08\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0',
      ),
    ),
    137 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3450\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'02\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1',
      ),
    ),
    138 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3451\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1',
      ),
    ),
    139 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3615\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTransbordoProgramado\']) = 1 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1',
      ),
    ),
    140 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3374\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransportEvent/cbc:TransportEventTypeCode',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:TransportEvent/cbc:TransportEventTypeCode != \'\'',
      ),
    ),
    141 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2558\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
      ),
    ),
    142 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2561\'',
        'errorCodeValidate' => '\'2485\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
      ),
    ),
    143 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3347\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'02\' and cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
      ),
    ),
    144 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    145 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    146 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    147 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2560\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID = cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
      ),
    ),
    148 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3347\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'02\' and cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyIdentification/cbc:ID != \'\'',
      ),
    ),
    149 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2563\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
      ),
    ),
    150 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4165\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
        1 => '(string-length(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName) > 250 or string-length(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName) < 3) ',
      ),
    ),
    151 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4165\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
        1 => 'string-length(translate(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    152 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4165\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{3,}$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
      ),
    ),
    153 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3347\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'02\' and cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
      ),
    ),
    154 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4391\'',
        'errorCodeValidate' => '\'4392\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:CompanyID',
        'regexp' => '\'^(?!0+$)([0-9A-Z]{1,20})$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)',
      ),
    ),
    155 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3353\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:CompanyID',
        'expresion' => 'count(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity) > 1',
        'descripcion' => '\'Existe mas de un Registro de MTC del transportista\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:PartyLegalEntity/cbc:CompanyID[text() != \'\']) > 0',
      ),
    ),
    156 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4396\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID != \'\'',
        1 => '(string-length(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID) > 50 or string-length(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID) < 3) ',
      ),
    ),
    157 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4396\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID != \'\'',
        1 => 'string-length(translate(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID,\' \',\'\')) = 0 ',
      ),
    ),
    158 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4396\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID',
        'regexp' => '\'^[^\\n\\t\\r\\f]{3,}$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID != \'\'',
      ),
    ),
    159 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3353\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID',
        'expresion' => 'count(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity) > 1',
        'descripcion' => '\'Existe mas de una Autorizacion especial del transportista\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID[text() != \'\']) > 0',
      ),
    ),
    160 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4394\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID',
        'isError' => 'false()',
        'descripcion' => '\'Autorizacion especial del transportista\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID != \'\'',
      ),
    ),
    161 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4395\'',
        'idCatalogo' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID',
        'catalogo' => '\'D37\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID != \'\'',
      ),
    ),
    162 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4397\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID != \'\'',
      ),
    ),
    163 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeName',
        'regexp' => '\'^(Entidad Autorizadora)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    165 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2566\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:ID',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'02\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                  or ($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
      ),
    ),
    166 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3354\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:ID',
        'expresion' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:ID != \'\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
      ),
    ),
    167 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2567\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:ID',
        'regexp' => '\'^(?!0+$)([0-9A-Z]{6,8})$\'',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:ID != \'\'',
      ),
    ),
    168 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4399\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
      ),
    ),
    169 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3452\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'expresion' => 'true()',
        'descripcion' => '\'Vehiculo principal - Tarjeta unica de circulacion\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0 and cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ApplicableTransportMeans/cbc:RegistrationNationalityID != \'\' )',
      ),
    ),
    170 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3355\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'regexp' => '\'^(?!0+$)([0-9A-Z]{9,15})$\'',
        'descripcion' => '\'Vehiculo principal - Tarjeta unica de circulacion\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ApplicableTransportMeans/cbc:RegistrationNationalityID != \'\'',
      ),
    ),
    171 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3452\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID != \'\'',
        'descripcion' => '\'Vehiculo principal - Autorizacion especial\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1 )                 or ($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
      ),
    ),
    172 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4406\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculo principal - Longitud de autorizacion invalido\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID != \'\'',
        1 => '(string-length(cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID) > 50 or string-length(cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID) < 3) ',
      ),
    ),
    173 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4406\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculo principal - Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID != \'\'',
        1 => 'string-length(translate(cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID,\' \',\'\')) = 0 ',
      ),
    ),
    174 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4406\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID',
        'regexp' => '\'^[^\\n\\t\\r\\f]{2,}$\'',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculo principal - Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID != \'\'',
      ),
    ),
    175 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3356\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'count(cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference) > 1',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID[text() != \'\']) > 0',
      ),
    ),
    176 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4403\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID/@schemeID',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID != \'\'',
      ),
    ),
    177 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4407\'',
        'idCatalogo' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID/@schemeID',
        'catalogo' => '\'D37\'',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID/@schemeID != \'\'',
      ),
    ),
    178 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4405\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID/@schemeID != \'\'',
      ),
    ),
    179 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID/@schemeName',
        'regexp' => '\'^(Entidad Autorizadora)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Entidad Autorizadora - Autorizacion vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    180 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ShipmentDocumentReference/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Entidad Autorizadora - Autorizacion vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    181 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4389\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment/cbc:ID',
        'expresion' => 'count(cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment) > 2',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    182 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3357\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle',
        'expresion' => 'count(cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle[text()=\'Principal\']) < 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'02\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                 or ($modalidadTraslado = \'01\' and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
      ),
    ),
    183 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3358\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle',
        'expresion' => 'count(cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle[text()=\'Principal\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    184 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4376\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle',
        'expresion' => 'count(cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle[text()=\'Secundario\']) > 2',
        'isError' => 'false()',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4411\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle[text() = \'Secundario\']',
        'expresion' => 'count(cac:Shipment/cac:ShipmentStage/cac:DriverPerson[cbc:JobTitle[text() = \'Principal\'] and cac:IdentityDocumentReference/cbc:ID[text() != \'\']]) = 0',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cac:ShipmentStage/cac:DriverPerson[cbc:JobTitle[text() = \'Secundario\'] and cac:IdentityDocumentReference/cbc:ID[text() != \'\']]) > 0',
      ),
    ),
    186 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2775\'',
        'errorCodeValidate' => '\'2776\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID',
        'regexp' => '\'^[0-9]{6}$\'',
        'descripcion' => '\'Punto de Partida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    187 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3363\'',
        'idCatalogo' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID',
        'catalogo' => '\'13\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    188 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3410\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode != \'\'',
      ),
    ),
    189 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de Partida - Ubigeo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    190 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de Partida - Ubigeo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    191 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2577\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    192 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4076\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Longitud invalida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line) > 500 or string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line) < 3 ',
      ),
    ),
    193 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4076\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(translate(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line,\' \',\'\')) = 0 ',
      ),
    ),
    194 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4076\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'regexp' => '\'^[^\\n\\t\\r\\f]{3,}$\'',
        'isError' => 'false()',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    195 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3410\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID',
        'descripcion' => '\'Punto de Partida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode != \'\'',
      ),
    ),
    196 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3411\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID',
        'expresion' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID = cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => '\'Punto de Partida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID != \'\' and $motivoTraslado[text() = \'02\' or text() = \'07\' or text() = \'08\']',
      ),
    ),
    197 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3414\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID',
        'expresion' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID != cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => '\'Punto de Partida - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID != \'\' and $motivoTraslado[text() = \'04\']',
      ),
    ),
    198 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3409\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
        'descripcion' => '\'Punto de Partida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID != \'\'',
      ),
    ),
    199 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3365\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listID != \'\' or $motivoTraslado = \'04\'',
      ),
    ),
    200 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3365\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode',
        'expresion' => 'not(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode) or cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode = \'\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'08\' and count(cac:Shipment/cac:FirstArrivalPortLocation[cbc:LocationTypeCode[text() = \'1\' or text()=\'2\'] and cbc:ID !=\'\']) = 0 and count(cac:Shipment/cac:FirstArrivalPortLocation[cbc:LocationTypeCode[text() = \'1\' or text()=\'2\'] and cbc:Name != \'\']) = 0',
      ),
    ),
    201 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de Partida - Establecimiento anexo\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:AddressTypeCode/@listName',
        'regexp' => '\'^(Establecimientos anexos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de Partida - Establecimiento anexo\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3413\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:LocationCoordinate/cbc:LatitudeDegreesMeasure',
        'regexp' => '\'^[+\\-]?[0-9]{1,3}(\\.[0-9]{1,8})?$\'',
        'descripcion' => '\'Georeferencia punto de partida - Latitud\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    204 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3413\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:LocationCoordinate/cbc:LongitudeDegreesMeasure',
        'regexp' => '\'^[+\\-]?[0-9]{1,3}(\\.[0-9]{1,8})?$\'',
        'descripcion' => '\'Georeferencia punto de partida - Longitud\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    205 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2775\'',
        'errorCodeValidate' => '\'2776\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'regexp' => '\'^[0-9]{6}$\'',
        'descripcion' => '\'Punto de LLegada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado != \'18\'',
      ),
    ),
    206 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3368\'',
        'idCatalogo' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'catalogo' => '\'13\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado != \'18\'',
      ),
    ),
    207 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de LLegada - Ubigeo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    208 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de LLegada - Ubigeo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    209 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2574\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado != \'18\'',
      ),
    ),
    210 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4068\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Longitud invalida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado != \'18\'',
        1 => 'string-length(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line) > 500 or string-length(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line) < 3 ',
      ),
    ),
    211 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4068\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado != \'18\'',
        1 => 'string-length(translate(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line,\' \',\'\')) = 0 ',
      ),
    ),
    212 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4068\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'regexp' => '\'^[^\\n\\t\\r\\f]{3,}$\'',
        'isError' => 'false()',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado != \'18\'',
      ),
    ),
    213 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3410\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID',
        'descripcion' => '\'Punto de LLegada - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode != \'\'',
      ),
    ),
    214 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3411\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID',
        'expresion' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID = cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => '\'Punto de LLegada - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID != \'\' and $motivoTraslado[text() = \'01\' or text() = \'03\' or text() = \'05\' or text() = \'06\' or text() = \'14\' or text() = \'17\']',
      ),
    ),
    215 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3414\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID',
        'expresion' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID != cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => '\'Punto de LLegada - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID != \'\' and $motivoTraslado[text() = \'04\']',
      ),
    ),
    216 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3488\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID',
        'expresion' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID != cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => '\'Punto de LLegada - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID != \'\' and $motivoTraslado[text() = \'19\']',
      ),
    ),
    217 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3409\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
        'descripcion' => '\'Punto de LLegada - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID != \'\'',
      ),
    ),
    218 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3369\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listID != \'\' or $motivoTraslado[text() = \'04\' or text() = \'19\']',
      ),
    ),
    219 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3369\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode',
        'expresion' => 'not(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode) or cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode = \'\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'09\' and count(cac:Shipment/cac:FirstArrivalPortLocation[cbc:LocationTypeCode[text() = \'1\'] and cbc:ID !=\'\']) = 0',
      ),
    ),
    220 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3416\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode',
        'expresion' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode != \'\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'18\'',
      ),
    ),
    221 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de LLegada - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    222 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:AddressTypeCode/@listName',
        'regexp' => '\'^(Establecimientos anexos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Punto de LLegada - Establecimiento anexo\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    223 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3413\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:LocationCoordinate/cbc:LatitudeDegreesMeasure',
        'regexp' => '\'^[+\\-]?[0-9]{1,3}(\\.[0-9]{1,8})?$\'',
        'descripcion' => '\'Georeferencia punto de llegada - Latitud\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    224 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3413\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:LocationCoordinate/cbc:LongitudeDegreesMeasure',
        'regexp' => '\'^[+\\-]?[0-9]{1,3}(\\.[0-9]{1,8})?$\'',
        'descripcion' => '\'Georeferencia punto de llegada - Longitud\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    225 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3483\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode',
        'expresion' => 'count(cac:Shipment[cac:FirstArrivalPortLocation[cbc:LocationTypeCode[text() = \'1\' or text() = \'2\']]]) = 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    226 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4413\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Puerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\' ',
        1 => '$motivoTraslado[text() = \'08\' or text() = \'09\']',
      ),
    ),
    227 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3484\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\' ',
        1 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    228 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3459\'',
        'idCatalogo' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
        'catalogo' => '\'63\'',
        'descripcion' => '\'Codigo de Puerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\' ',
        1 => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID != \'\'',
      ),
    ),
    229 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Puerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\' ',
      ),
    ),
    230 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID/@schemeName',
        'regexp' => '\'^(Puertos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Puerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\' ',
      ),
    ),
    231 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo63)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Puerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\' ',
      ),
    ),
    232 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4415\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID != \'\' ',
      ),
    ),
    233 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4416\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode',
        'expresion' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode[text() != \'1\' and text() != \'2\']',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID != \'\' ',
      ),
    ),
    234 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4413\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Aeropuerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\' ',
        1 => '$motivoTraslado[text() = \'08\']',
      ),
    ),
    235 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3484\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\' ',
        1 => '$motivoTraslado[text() = \'19\']',
      ),
    ),
    236 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3460\'',
        'idCatalogo' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
        'catalogo' => '\'64\'',
        'descripcion' => '\'Codigo de Aeropuerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\' ',
        1 => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID != \'\'',
      ),
    ),
    237 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Aeropuerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\' ',
      ),
    ),
    238 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID/@schemeName',
        'regexp' => '\'^(Aeropuertos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Aeropuerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\' ',
      ),
    ),
    239 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo64)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Codigo de Aeropuerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\' ',
      ),
    ),
    240 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4418\'',
        'node' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:Name',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode[text() = \'1\' or text() =\'2\'] and cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID != \'\' ',
      ),
    ),
    241 => 
    array (
      'primitive' => 'findElementInCatalogGREUbigeoProperty',
      'params' => 
      array (
        'catalogo' => '\'63\'',
        'propiedad' => '\'ubigeo\'',
        'idCatalogo' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
        'valorPropiedad' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID',
        'errorCodeValidate' => '\'3364\'',
        'descripcion' => '\'Codigo de Puerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and count(cac:Shipment/cac:FirstArrivalPortLocation[cbc:LocationTypeCode[text() = \'1\' or text()=\'2\'] and cbc:ID !=\'\']) > 0',
        1 => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\'',
      ),
    ),
    242 => 
    array (
      'primitive' => 'findElementInCatalogGREUbigeoProperty',
      'params' => 
      array (
        'catalogo' => '\'64\'',
        'propiedad' => '\'ubigeo\'',
        'idCatalogo' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
        'valorPropiedad' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID',
        'errorCodeValidate' => '\'3364\'',
        'descripcion' => '\'Codigo de Aeropuerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'19\'] and count(cac:Shipment/cac:FirstArrivalPortLocation[cbc:LocationTypeCode[text() = \'1\' or text()=\'2\'] and cbc:ID !=\'\']) > 0',
        1 => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\'',
      ),
    ),
    243 => 
    array (
      'primitive' => 'findElementInCatalogGREUbigeoProperty',
      'params' => 
      array (
        'catalogo' => '\'63\'',
        'propiedad' => '\'ubigeo\'',
        'idCatalogo' => 'cac:Shipment/cac:FirstArrivalPortLocation/cbc:ID',
        'valorPropiedad' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'errorCodeValidate' => '\'3364\'',
        'descripcion' => '\'Codigo de Puerto\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado = \'09\' and count(cac:Shipment/cac:FirstArrivalPortLocation[cbc:LocationTypeCode[text() = \'1\'] and cbc:ID !=\'\']) > 0',
      ),
    ),
    244 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4186\'',
        'node' => '$desNota',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => 'cbc:Note',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not($desNota) ',
      ),
    ),
    245 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4186\'',
        'node' => '$desNota',
        'regexp' => 'true()',
        'isError' => 'false()',
      ),
      'context' => 'cbc:Note',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length($desNota) > 250 or string-length($desNota) < 1 ',
      ),
    ),
    246 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4186\'',
        'node' => '$desNota',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => 'cbc:Note',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(translate($desNota,\' \',\'\')) = 0 ',
      ),
    ),
    247 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4186\'',
        'node' => '$desNota',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cbc:Note',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    248 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4369\'',
        'node' => 'cbc:CompanyID',
        'regexp' => 'true()',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:CompanyID and (string-length(cbc:CompanyID) > 50 or string-length(cbc:CompanyID) < 3) ',
      ),
    ),
    249 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4369\'',
        'node' => 'cbc:CompanyID',
        'regexp' => 'true()',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(translate(cbc:CompanyID,\' \',\'\')) = 0 ',
      ),
    ),
    250 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4369\'',
        'node' => 'cbc:CompanyID',
        'regexp' => '\'^[^\\n\\t\\r\\f]{3,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    251 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4394\'',
        'node' => 'cbc:CompanyID/@schemeID',
        'isError' => 'false()',
        'descripcion' => '\'Autorizacion especial del remitente\'',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:CompanyID != \'\'',
      ),
    ),
    252 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4395\'',
        'idCatalogo' => 'cbc:CompanyID/@schemeID',
        'catalogo' => '\'D37\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:CompanyID/@schemeID and cbc:CompanyID/@schemeID != \'\'',
      ),
    ),
    253 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4397\'',
        'node' => 'cbc:CompanyID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:CompanyID/@schemeID and cbc:CompanyID/@schemeID != \'\'',
      ),
    ),
    254 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cbc:CompanyID/@schemeName',
        'regexp' => '\'^(Entidad Autorizadora)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    255 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cbc:CompanyID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:AgentParty/cac:PartyLegalEntity',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    256 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2552\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => '$motivoTraslado[text() = \'02\' or text() = \'07\' or text() = \'13\']',
      ),
    ),
    257 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3447\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'1\' and cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'4\' and cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'6\' and cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'7\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => '$motivoTraslado = \'02\'',
      ),
    ),
    258 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3447\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'6\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => '$motivoTraslado = \'07\' ',
      ),
    ),
    259 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3447\'',
        'idCatalogo' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => '$motivoTraslado = \'13\' ',
      ),
    ),
    260 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4054\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'expresion' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Tipo de documento de identidad\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'02\' and text() != \'07\' and text() != \'13\'] ',
      ),
    ),
    261 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Tipo de documento de identidad\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    262 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Tipo de documento de identidad\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    263 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Tipo de documento de identidad\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    264 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2723\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'02\' or text() = \'07\' or text() = \'13\']',
        1 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\' and cac:Party/cac:PartyIdentification/cbc:ID = \'\' ',
      ),
    ),
    265 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2723\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'02\' or text() = \'07\' or text() = \'13\']',
        1 => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName and cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\' ',
      ),
    ),
    266 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4054\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Numero de documento de identidad\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'02\' and text() != \'07\' and text() != \'13\'] and cac:Party/cac:PartyIdentification/cbc:ID != \'\' ',
      ),
    ),
    267 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2724\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[0-9]{8}$\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'1\'',
      ),
    ),
    268 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2724\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\'',
      ),
    ),
    269 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2724\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => 'true()',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:Party/cac:PartyIdentification/cbc:ID) > 15 or string-length(cac:Party/cac:PartyIdentification/cbc:ID) < 0 ',
      ),
    ),
    270 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2724\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[^\\s]{0,}$\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    271 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3448\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'02\' or text() = \'07\'] and cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => 'cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\' and (cac:Party/cac:PartyIdentification/cbc:ID = $root/cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID)',
      ),
    ),
    272 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3442\'',
        'node' => 'cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'12\'] and cac:IssuerParty/cac:PartyIdentification/cbc:ID = $numDocProveedor]) < 1',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'02\' or text() = \'07\'] and cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
        1 => 'count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'12\']]) > 0',
      ),
    ),
    273 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3449\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'02\' or text() = \'07\' or text() = \'13\'] and cac:Party/cac:PartyIdentification/cbc:ID != \'\'',
      ),
    ),
    274 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4106\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Longitud invalida\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) > 250 or string-length(cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) < 1 ',
      ),
    ),
    275 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4106\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(translate(cac:Party/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    276 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4106\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    277 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4054\'',
        'node' => 'cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Proveedor - Nombre/Razon social\'',
      ),
      'context' => 'cac:SellerSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'02\' and text() != \'07\' and text() != \'13\'] and cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\' ',
      ),
    ),
    278 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4371\'',
        'node' => 'cbc:DocumentType',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode != \'\'',
      ),
    ),
    279 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4410\'',
        'node' => 'cbc:DocumentTypeCode',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentType != \'\'',
      ),
    ),
    280 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4372\'',
        'node' => 'cbc:DocumentType',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentType != \'\'',
        1 => 'string-length(cbc:DocumentType) > 120 or string-length(cbc:DocumentType) < 1 ',
      ),
    ),
    281 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4372\'',
        'node' => 'cbc:DocumentType',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentType != \'\'',
        1 => 'string-length(translate(cbc:DocumentType,\' \',\'\')) = 0 ',
      ),
    ),
    282 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4372\'',
        'node' => 'cbc:DocumentType',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentType != \'\'',
      ),
    ),
    283 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3403\'',
        'node' => 'cbc:ID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode != \'\'',
      ),
    ),
    284 => 
    array (
      'primitive' => 'findElementInCatalog61rProperty',
      'params' => 
      array (
        'catalogo' => '\'61\'',
        'propiedad' => '\'gre-r\'',
        'idCatalogo' => 'cbc:DocumentTypeCode',
        'valorPropiedad' => '\'1\'',
        'errorCodeValidate' => '\'2692\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode != \'\'',
      ),
    ),
    285 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:DocumentTypeCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento relacionado\'',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    286 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:DocumentTypeCode/@listName',
        'regexp' => '\'^(Documento relacionado al transporte)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento relacionado\'',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    287 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:DocumentTypeCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo61)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento relacionado\'',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    288 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3340\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-document-additional-reference\', concat(cbc:DocumentTypeCode,\' \',cbc:ID))) > 1',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID != \'\'',
      ),
    ),
    289 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3376\'',
        'node' => 'cbc:DocumentTypeCode',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID != \'\'',
      ),
    ),
    290 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([F][A-Z0-9]{3}|[\\d]{1,4}|[E][0][0][1])-(?!0+$)([0-9]{1,8}))$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'01\'',
      ),
    ),
    291 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([B][A-Z0-9]{3}|[\\d]{1,4}|[E][B][0][1])-(?!0+$)([0-9]{1,8}))$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'03\'',
      ),
    ),
    292 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([L][A-Z0-9]{3}|[\\d]{1,4}|[E][0][0][1])-(?!0+$)([0-9]{1,8}))$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'04\'',
      ),
    ),
    293 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([T][A-Z0-9]{3}|[\\d]{1,4}|[E][G][0][7]|[E][G][0][2])-(?!0+$)([0-9]{1,8}))$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'09\'',
      ),
    ),
    294 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^([a-zA-Z0-9-]{1,20})-([a-zA-Z0-9-]{1,20})$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'12\'',
      ),
    ),
    295 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^([\\d]{1,4})-(?!0+$)([0-9]{1,7})$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'48\'',
      ),
    ),
    296 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!0+$)([0-9]{1,15})$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'49\'',
      ),
    ),
    297 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!0+$)([0-9]{1,15})$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'80\'',
      ),
    ),
    298 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^([a-zA-Z0-9]{1,20})$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'81\'',
      ),
    ),
    299 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([1][0])-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'50\']',
        1 => '$motivoTraslado = \'08\'',
      ),
    ),
    300 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([4][0])-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'50\']',
        1 => '$motivoTraslado = \'09\'',
      ),
    ),
    301 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([1][0]|[2][0]|[2][1]|[3][0]|[3][6]|[7][0]|[8][0])-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'50\']',
        1 => '$motivoTraslado = \'19\'',
      ),
    ),
    302 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([2][8])-[1-9][0-9]{0,7}$|^[0-9]{3}-[0-9]{4}-([2][0]|[2][1]|[3][0]|[3][6]|[7][0]|[7][1]|[7][2]|[7][4]|[7][5]|[8][0]|[8][2]|[9][0]|[4][9]|[5][1]|[5][2]|[6][0]|[7][3]|[8][6]|[8][9]|[X][C]|[X][G]|[8][1])-[1-9][0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'50\']',
        1 => '$motivoTraslado = \'13\'',
      ),
    ),
    303 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-[0-9]{2}-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'50\']',
      ),
    ),
    304 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([1][8])-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'52\']',
        1 => '$motivoTraslado = \'08\'',
      ),
    ),
    305 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([4][8])-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'52\']',
        1 => '$motivoTraslado = \'09\'',
      ),
    ),
    306 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([1][8])-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'52\']',
        1 => '$motivoTraslado = \'19\'',
      ),
    ),
    307 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-[0-9]{2}-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'52\']',
      ),
    ),
    308 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^01-[0-9]{3}-[0-9]{1}-[0-9]{4}-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'91\']',
        1 => '$motivoTraslado = \'19\'',
      ),
    ),
    309 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^01-[0-9]{3}-[1]-[0-9]{4}-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'91\']',
        1 => '$motivoTraslado = \'19\'',
        2 => '$root/cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'1\'',
      ),
    ),
    310 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^01-[0-9]{3}-[4]-[0-9]{4}-[1-9]{1}[0-9]{0,5}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'91\']',
        1 => '$motivoTraslado = \'19\'',
        2 => '$root/cac:Shipment/cac:FirstArrivalPortLocation/cbc:LocationTypeCode = \'2\'',
      ),
    ),
    311 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^\\d{1,50}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'92\'',
      ),
    ),
    312 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'expresion' => 'true()',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'71\' or text() = \'72\' or text() = \'73\' or text() = \'74\' or text() = \'75\' or text() = \'76\' or text() = \'77\' or text() = \'78\']',
        1 => 'string-length(cbc:ID) > 100 or string-length(cbc:ID) < 1 ',
      ),
    ),
    313 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[^\\s]{1,}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'71\' or text() = \'72\' or text() = \'73\' or text() = \'74\' or text() = \'75\' or text() = \'76\' or text() = \'77\' or text() = \'78\']',
      ),
    ),
    314 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3380\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'92\']',
      ),
    ),
    315 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3381\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != $root/cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != \'\'  ',
        1 => '$motivoTraslado[text() = \'01\' or text() = \'03\'] and cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'12\']',
      ),
    ),
    316 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3381\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != $root/cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != \'\'  ',
        1 => 'cbc:DocumentTypeCode = \'09\'',
      ),
    ),
    317 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3381\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != $root/cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != \'\'  ',
        1 => '$motivoTraslado = \'02\' and cbc:DocumentTypeCode[text() = \'04\' or text() = \'48\']',
      ),
    ),
    318 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3381\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != $root/cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != \'\'  ',
        1 => '$motivoTraslado = \'06\' and cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'12\']',
      ),
    ),
    319 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3409\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != \'\'  ',
      ),
    ),
    320 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3382\'',
        'errorCodeValidate' => '\'3382\'',
        'regexp' => '\'^(6)$\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'92\']',
      ),
    ),
    321 => 
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
      ),
    ),
    322 => 
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
      ),
    ),
    323 => 
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
      ),
    ),
    324 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4408\'',
        'node' => '$root/cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cbc:ID',
        'isError' => 'false()',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID != \'\'',
      ),
    ),
    325 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3453\'',
        'node' => 'cbc:ID',
        'expresion' => 'cbc:ID != \'\'',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
      ),
    ),
    326 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2567\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!0+$)([0-9A-Z]{6,8})$\'',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID != \'\'',
      ),
    ),
    327 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4399\'',
        'node' => 'cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tarjeta unica circulacion - Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1 and cbc:ID != \'\'',
      ),
    ),
    328 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3454\'',
        'node' => 'cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'expresion' => 'true()',
        'descripcion' => 'concat(\'Tarjeta unica circulacion - Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0 and cac:ApplicableTransportMeans/cbc:RegistrationNationalityID != \'\' )',
      ),
    ),
    329 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3355\'',
        'node' => 'cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'regexp' => '\'^(?!0+$)([0-9A-Z]{10,15})$\'',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ApplicableTransportMeans/cbc:RegistrationNationalityID != \'\'',
      ),
    ),
    330 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3454\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'cac:ShipmentDocumentReference/cbc:ID != \'\'',
        'descripcion' => 'concat(\'Autorizacion especial - Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                   or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
      ),
    ),
    331 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4406\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID,\' - Longitud de autorizacion invalida\')',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentDocumentReference/cbc:ID != \'\'',
        1 => '(string-length(cac:ShipmentDocumentReference/cbc:ID) > 50 or string-length(cac:ShipmentDocumentReference/cbc:ID) < 3) ',
      ),
    ),
    332 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4406\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID,\' - Caracteres invalidos\')',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentDocumentReference/cbc:ID != \'\'',
        1 => 'string-length(translate(cac:ShipmentDocumentReference/cbc:ID,\' \',\'\')) = 0 ',
      ),
    ),
    333 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4406\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID',
        'regexp' => '\'^[^\\n\\t\\r\\f]{2,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID,\' - Caracteres invalidos\')',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentDocumentReference/cbc:ID != \'\'',
      ),
    ),
    334 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3356\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID',
        'expresion' => 'count(cac:ShipmentDocumentReference) > 1',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:ShipmentDocumentReference/cbc:ID[text() != \'\']) > 0',
      ),
    ),
    335 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4403\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID/@schemeID',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentDocumentReference/cbc:ID != \'\'',
      ),
    ),
    336 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4407\'',
        'idCatalogo' => 'cac:ShipmentDocumentReference/cbc:ID/@schemeID',
        'catalogo' => '\'D37\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentDocumentReference/cbc:ID/@schemeID != \'\'',
      ),
    ),
    337 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4405\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:ShipmentDocumentReference/cbc:ID/@schemeID != \'\'',
      ),
    ),
    338 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID/@schemeName',
        'regexp' => '\'^(Entidad Autorizadora)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Entidad Autorizadora - Autorizacion vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    339 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:ShipmentDocumentReference/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Entidad Autorizadora - Autorizacion vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    340 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3362\'',
        'node' => 'cac:IdentityDocumentReference/cbc:ID',
        'expresion' => 'count(key(\'by-conductores\',cac:IdentityDocumentReference/cbc:ID )) > 1',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[ text() = \'Secundario\']',
        1 => 'cac:IdentityDocumentReference/cbc:ID != \'\' ',
      ),
    ),
    341 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2568\'',
        'node' => 'cbc:ID',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '($modalidadTraslado = \'02\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        2 => 'cbc:JobTitle[text() = \'Principal\']',
      ),
    ),
    342 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2570\'',
        'node' => 'cbc:ID/@schemeID',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '($modalidadTraslado = \'02\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        2 => 'cbc:JobTitle[text() = \'Principal\']',
      ),
    ),
    343 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2568\'',
        'node' => 'cbc:ID',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '($modalidadTraslado = \'02\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        2 => 'cbc:JobTitle[text() = \'Secundario\'] and (cbc:ID/@schemeID != \'\' or cac:IdentityDocumentReference/cbc:ID != \'\')',
      ),
    ),
    344 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2570\'',
        'node' => 'cbc:ID/@schemeID',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '($modalidadTraslado = \'02\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        2 => 'cbc:JobTitle[text() = \'Secundario\'] and cbc:ID != \'\'',
      ),
    ),
    345 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3455\'',
        'node' => 'cbc:ID/@schemeID',
        'expresion' => 'cbc:ID/@schemeID != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Tipo de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Principal\'',
      ),
    ),
    346 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3456\'',
        'node' => 'cbc:ID/@schemeID',
        'expresion' => 'cbc:ID/@schemeID != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Tipo de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Secundario\'',
      ),
    ),
    347 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'2571\'',
        'idCatalogo' => 'cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:ID/@schemeID != \'\'',
      ),
    ),
    348 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2571\'',
        'node' => 'cbc:ID/@schemeID',
        'expresion' => 'cbc:ID/@schemeID = \'6\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:ID/@schemeID != \'\'',
      ),
    ),
    349 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Tipo de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
      ),
    ),
    350 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Tipo de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
      ),
    ),
    351 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Tipo de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
      ),
    ),
    352 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3455\'',
        'node' => 'cbc:ID',
        'expresion' => 'cbc:ID != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Numero de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Principal\'',
      ),
    ),
    353 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3456\'',
        'node' => 'cbc:ID',
        'expresion' => 'cbc:ID != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Numero de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Secundario\'',
      ),
    ),
    354 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2569\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{8}$\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Numero de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:ID/@schemeID != \'\'',
        2 => 'cbc:ID/@schemeID = \'1\'',
      ),
    ),
    355 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2569\'',
        'node' => 'cbc:ID',
        'expresion' => 'true()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Numero de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:ID/@schemeID != \'\'',
        2 => 'string-length(cbc:ID) > 15 or string-length(cbc:ID) < 1 ',
      ),
    ),
    356 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2569\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[^\\s]{1,}$\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Numero de documento de identidad\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:ID/@schemeID != \'\'',
      ),
    ),
    357 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3360\'',
        'node' => 'cbc:FirstName',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '($modalidadTraslado = \'02\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        2 => '(cbc:JobTitle[text() = \'Principal\']) or (cbc:JobTitle[text() = \'Secundario\'] and cac:IdentityDocumentReference/cbc:ID != \'\')',
      ),
    ),
    358 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3361\'',
        'node' => 'cbc:FamilyName',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '($modalidadTraslado = \'02\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        2 => '(cbc:JobTitle[text() = \'Principal\']) or (cbc:JobTitle[text() = \'Secundario\'] and cac:IdentityDocumentReference/cbc:ID != \'\')',
      ),
    ),
    359 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3455\'',
        'node' => 'cbc:FirstName',
        'expresion' => 'cbc:FirstName != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Principal\'',
      ),
    ),
    360 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3455\'',
        'node' => 'cbc:FamilyName',
        'expresion' => 'cbc:FamilyName != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Principal\'',
      ),
    ),
    361 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3456\'',
        'node' => 'cbc:FirstName',
        'expresion' => 'cbc:FirstName != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Secundario\'',
      ),
    ),
    362 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3456\'',
        'node' => 'cbc:FamilyName',
        'expresion' => 'cbc:FamilyName != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Secundario\'',
      ),
    ),
    363 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FirstName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres - Longitud invalida\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FirstName != \'\'',
        2 => '(string-length(cbc:FirstName) > 250 or string-length(cbc:FirstName) < 1) ',
      ),
    ),
    364 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FirstName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres - Caracteres invalidos\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FirstName != \'\'',
        2 => 'string-length(translate(cbc:FirstName,\' \',\'\')) = 0 ',
      ),
    ),
    365 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FirstName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres - Caracteres invalidos\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FirstName != \'\'',
      ),
    ),
    366 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FamilyName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos - Longitud invalida\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FamilyName != \'\'',
        2 => '(string-length(cbc:FamilyName) > 250 or string-length(cbc:FamilyName) < 1) ',
      ),
    ),
    367 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FamilyName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos - Caracteres invalidos\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FamilyName != \'\'',
        2 => 'string-length(translate(cbc:FamilyName,\' \',\'\')) = 0 ',
      ),
    ),
    368 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FamilyName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos - Caracteres invalidos\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FamilyName != \'\'',
      ),
    ),
    369 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2572\'',
        'node' => 'cac:IdentityDocumentReference/cbc:ID',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '($modalidadTraslado = \'02\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 1)',
        2 => 'cbc:JobTitle[text() = \'Principal\'] or (cbc:JobTitle[text() = \'Secundario\'] and cbc:ID != \'\')',
      ),
    ),
    370 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3455\'',
        'node' => 'cac:IdentityDocumentReference/cbc:ID',
        'expresion' => 'cac:IdentityDocumentReference/cbc:ID != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Licencia\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Principal\'',
      ),
    ),
    371 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3456\'',
        'node' => 'cac:IdentityDocumentReference/cbc:ID',
        'expresion' => 'cac:IdentityDocumentReference/cbc:ID != \'\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Licencia\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => '(count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 1)                    or ($modalidadTraslado = \'01\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']) = 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']) = 0)',
        2 => 'cbc:JobTitle = \'Secundario\'',
      ),
    ),
    372 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2573\'',
        'node' => 'cac:IdentityDocumentReference/cbc:ID',
        'regexp' => '\'^(?!0+$)([0-9A-Z]{9,10})$\'',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cac:IdentityDocumentReference/cbc:ID != \'\'',
      ),
    ),
    373 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2023\'',
        'errorCodeValidate' => '\'2023\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^\\d{1,4}$\'',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    374 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3630\'',
        'node' => '$root/cac:DespatchLine[2]',
        'expresion' => 'count($root/cac:DespatchLine)  > 1',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    375 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3629\'',
        'node' => '$nodosBienes',
        'expresion' => 'boolean($nodosBienes)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '($motivoTraslado[text() = \'19\'] and $tipoDocumentoCita)',
      ),
    ),
    376 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2752\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-despatchLine-id\', number(cbc:ID))) > 1',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    377 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2580\'',
        'node' => 'cbc:DeliveredQuantity',
        'expresion' => 'not(cbc:DeliveredQuantity)',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\' or text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 0                    and  $motivoTraslado[text() != \'08\' and text() != \'19\']',
      ),
    ),
    378 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2780\'',
        'node' => 'cbc:DeliveredQuantity',
        'regexp' => '\'^(?!0[0-9]*(\\.0*)?$)[0-9]{1,12}(\\.[0-9]{1,10})?$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:AdditionalDocumentReference/cbc:DocumentTypeCode[text() != \'91\']',
      ),
    ),
    379 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2780\'',
        'node' => 'cbc:DeliveredQuantity',
        'regexp' => '\'^([0-9]{1,10})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:AdditionalDocumentReference/cbc:DocumentTypeCode[text() = \'91\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 0',
      ),
    ),
    380 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2883\'',
        'node' => 'cbc:DeliveredQuantity/@unitCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\' or text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 0      and not($tipoDocumentoCita) and cbc:DeliveredQuantity',
      ),
    ),
    381 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4320\'',
        'idCatalogo' => 'cbc:DeliveredQuantity/@unitCode',
        'catalogo' => '\'03\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'08\' and text() != \'09\' and text() != \'13\' and text() != \'19\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0',
      ),
    ),
    382 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4320\'',
        'idCatalogo' => 'cbc:DeliveredQuantity/@unitCode',
        'catalogo' => '\'65A\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'13\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0',
      ),
    ),
    383 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3446\'',
        'idCatalogo' => 'cbc:DeliveredQuantity/@unitCode',
        'catalogo' => '\'65\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() = \'08\' or text() = \'09\' or text() = \'19\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0 and $root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() =\'52\']]',
      ),
    ),
    384 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3446\'',
        'node' => 'cbc:DeliveredQuantity/@unitCode',
        'expresion' => 'not(cbc:DeliveredQuantity/@unitCode = \'U\')',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Unidad: U\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 0 and $motivoTraslado[text() = \'19\'] and $root/cac:AdditionalDocumentReference/cbc:DocumentTypeCode[text() = \'91\']',
      ),
    ),
    385 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4258\'',
        'node' => 'cbc:DeliveredQuantity/@unitCodeListID',
        'regexp' => '\'^(UN/ECE rec 20)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    386 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4259\'',
        'node' => 'cbc:DeliveredQuantity/@unitCodeListAgencyName',
        'regexp' => '\'^(United Nations Economic Commission for Europe)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    387 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2781\'',
        'node' => 'cac:Item/cbc:Description',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0 and not($tipoDocumentoCita) and not($condicionTrasladoDAM_DS)',
      ),
    ),
    388 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4084\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cbc:Description',
        1 => 'string-length(cac:Item/cbc:Description) > 500 or string-length(cac:Item/cbc:Description) < 3 ',
      ),
    ),
    389 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4084\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cbc:Description',
        1 => 'string-length(translate(cac:Item/cbc:Description,\' \',\'\')) = 0 ',
      ),
    ),
    390 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4084\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => '\'^(?!\\s*$)[\\S\\s]{3,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cbc:Description',
      ),
    ),
    391 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4085\'',
        'node' => 'cac:Item/cac:SellersItemIdentification/cbc:ID',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:SellersItemIdentification/cbc:ID ',
        1 => 'string-length(cac:Item/cac:SellersItemIdentification/cbc:ID) > 30 ',
      ),
    ),
    392 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4085\'',
        'node' => 'cac:Item/cac:SellersItemIdentification/cbc:ID',
        'regexp' => '\'^[^\\n\\t\\r\\f]{0,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:SellersItemIdentification/cbc:ID ',
      ),
    ),
    393 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3372\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                and $bienControlado > 0',
      ),
    ),
    394 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3425\'',
        'idCatalogo' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode',
        'catalogo' => '\'62A\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                and $bienControlado > 0',
      ),
    ),
    395 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3002\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode',
        'regexp' => '\'^(?!0+$)([0-9]{1,8})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode != \'\' ',
      ),
    ),
    396 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3373\'',
        'idCatalogo' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode',
        'catalogo' => '\'25\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode != \'\' ',
      ),
    ),
    397 => 
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
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    398 => 
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
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    399 => 
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
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    400 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3375\'',
        'node' => 'cac:Item/cac:StandardItemIdentification/cbc:ID',
        'regexp' => '\'^([0-9A-Za-z]{1,14})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:StandardItemIdentification/cbc:ID != \'\' ',
      ),
    ),
    401 => 
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
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    402 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3426\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7020\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7020\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7020\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                and count(cac:Item/cac:AdditionalItemProperty[cbc:NameCode[text() = \'7022\'] and cbc:Value[text() = \'1\']]) > 0',
      ),
    ),
    403 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3379\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7022\']',
        'expresion' => 'count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'49\' or text() =\'80\']]) = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7022\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado != \'19\' and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                and count(cac:Item/cac:AdditionalItemProperty[cbc:NameCode[text() = \'7022\'] and cbc:Value[text() = \'1\']]) > 0',
      ),
    ),
    404 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3427\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7021\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7021\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7021\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                and $motivoTraslado[text()=\'09\'] and $root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() != \'91\']]',
      ),
    ),
    405 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3428\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7023\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7023\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7023\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                and $motivoTraslado[text()=\'09\'] and $root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() != \'91\']]',
      ),
    ),
    406 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3480\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7026\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7026\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7026\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text()=\'19\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 1',
      ),
    ),
    407 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3481\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7027\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7027\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7027\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text()=\'19\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 1',
        1 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7028\'] and cac:Item/cac:AdditionalItemProperty/cbc:Value[text() = \'0\']',
      ),
    ),
    408 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3482\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7028\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7028\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7028\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text()=\'19\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 1',
      ),
    ),
    409 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3490\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7024\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7024\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7024\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text()=\'19\'] and $root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']]',
      ),
    ),
    410 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3491\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7025\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7025\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7025\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text()=\'19\'] and $root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'91\']]',
      ),
    ),
    411 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3473\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode',
        'expresion' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7024\' or text()=\'7025\' or text()=\'7026\' or text()=\'7027\' or text()=\'7028\']',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$motivoTraslado[text() != \'19\']',
      ),
    ),
    412 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3472\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7024\' or cbc:NameCode = \'7025\']/cbc:Value',
        'expresion' => 'count(key(\'by-despatchLine-item-carga-suelta\', concat(cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7024\']/cbc:Value, \'-\',  cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7025\']/cbc:Value))) > 1 ',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea,\' DocumentoTransporte-NumDetalle : \',   concat(cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7024\']/cbc:Value, \'-\',  cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7025\']/cbc:Value))',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:AdditionalDocumentReference/cbc:DocumentTypeCode[text() = \'91\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) = 0',
        1 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode = \'7024\' and  cac:Item/cac:AdditionalItemProperty/cbc:NameCode = \'7025\'',
      ),
    ),
    413 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3492\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7026\' or cbc:NameCode = \'7024\' or cbc:NameCode = \'7025\']/cbc:Value',
        'expresion' => 'count(key(\'by-despatchLine-item-contenedor\', concat(cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7026\']/cbc:Value, \'-\' , cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7024\']/cbc:Value, \'-\',  cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7025\']/cbc:Value))) > 1 ',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea,\' Contenedor-DocumentoTransporte-NumDetalle : \',   concat(cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7026\']/cbc:Value, \'-\', cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7024\']/cbc:Value, \'-\',  cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7025\']/cbc:Value))',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$root/cac:AdditionalDocumentReference/cbc:DocumentTypeCode[text() = \'91\'] and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoContenedorManifiestoCarga\']) > 0',
        1 => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode = \'7026\' and cac:Item/cac:AdditionalItemProperty/cbc:NameCode = \'7024\' and  cac:Item/cac:AdditionalItemProperty/cbc:NameCode = \'7025\'',
      ),
    ),
    414 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7027\']/cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', 7027)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7028\']/cbc:Value = 0',
      ),
    ),
    415 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4235\'',
        'node' => 'cbc:Name',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:Name',
      ),
    ),
    416 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cbc:NameCode/@listAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    417 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cbc:NameCode/@listName',
        'regexp' => '\'^(Propiedad del item)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    418 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4253\'',
        'node' => 'cbc:NameCode/@listURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo55)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    419 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode[text() = \'7020\' or text()=\'7021\' or text()=\'7022\' or text()=\'7023\' or text()=\'7024\' or text()=\'7025\' or text()=\'7026\' or text()=\'7028\']',
      ),
    ),
    420 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3377\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!0+$)([0-9]{1,10})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7020\'',
      ),
    ),
    421 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3429\'',
        'idCatalogo' => 'cbc:Value',
        'catalogo' => '\'62\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7020\'',
        1 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                   and $bienControlado > 0',
      ),
    ),
    422 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3396\'',
        'node' => 'cbc:Value',
        'expresion' => 'cbc:Value != \'0\' and cbc:Value != \'1\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7022\'',
      ),
    ),
    423 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2769\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-[0-9]{2}-[1-9]\\d{0,5}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7021\'',
      ),
    ),
    424 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3430\'',
        'node' => 'cbc:Value',
        'expresion' => 'count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() =\'52\'] and cbc:ID[text()= $numDoc]]) = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7021\'',
        1 => 'count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']) = 0                   and $motivoTraslado[text()=\'08\' or text()=\'09\' or text()=\'13\' or text()=\'19\']',
      ),
    ),
    425 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3431\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!0+$)([0-9]{1,4})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7023\'',
      ),
    ),
    426 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3466\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[A-Z0-9\\/\\\\\\-]{1,25}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7024\'',
      ),
    ),
    427 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3468\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[1-9]\\d{0,4}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7025\'',
      ),
    ),
    428 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3470\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^[A-Z0-9\\-\\/]{1,17}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7026\'',
      ),
    ),
    429 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3486\'',
        'node' => 'cbc:Value',
        'expresion' => 'count(key(\'by-contenedores\',cbc:Value )) = 0',
        'descripcion' => 'concat(\'Contenedor : \', cbc:Value)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7026\'',
      ),
    ),
    430 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3474\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!0+$)([A-Z0-9]{1,100})(,(?!0+$)[A-Z0-9]{1,100})*$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7027\' and cbc:Value != \'\'',
      ),
    ),
    431 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3476\'',
        'node' => 'cbc:Value',
        'expresion' => 'count(cbc:Value[text() = \'0\' or text() =\'1\']) = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7028\'',
      ),
    ),
  ),
);
