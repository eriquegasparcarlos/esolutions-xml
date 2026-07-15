<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegGreTransportista-2.0.1.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegGreTransportista-2.0.1.xsl',
  'globals' => 
  array (
    'numeroRuc' => 'substring($nombreArchivoEnviado, 1, 11)',
    'tipoComprobante' => 'substring($nombreArchivoEnviado, 13, 2)',
    'numeroSerie' => 'substring($nombreArchivoEnviado, 16, 4)',
    'numeroComprobante' => 'substring($nombreArchivoEnviado, 21, string-length($nombreArchivoEnviado) - 24)',
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
        'regexp' => '\'^[V][A-Z0-9]{3}-[0-9]{1,8}?$\'',
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
        'regexp' => '\'^(31)$\'',
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
        'descripcion' => '\'Documento de identidad - Transportista\'',
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
        'descripcion' => '\'Documento de identidad - Transportista\'',
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
        'descripcion' => '\'Documento de identidad - Transportista\'',
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
        'descripcion' => '\'Nombre/Razon social del transportista\'',
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
        'descripcion' => '\'Nombre/Razon social del transportista\'',
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
        'descripcion' => '\'Nombre/Razon social del transportista\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    20 => 
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
      ),
    ),
    21 => 
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
    22 => 
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
    23 => 
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
    24 => 
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
    25 => 
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
    26 => 
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
    27 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4395\'',
        'idCatalogo' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID',
        'catalogo' => '\'D37\'',
        'isError' => 'false()',
        'descripcion' => '\'Autorizacion especial del transportista\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID != \'\'',
      ),
    ),
    28 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4397\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID',
        'expresion' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID = \'\'',
        'isError' => 'false()',
        'descripcion' => '\'Autorizacion especial del transportista\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeID != \'\'',
      ),
    ),
    29 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeName',
        'regexp' => '\'^(Entidad Autorizadora)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Entidad Autorizadora - Autorizacion especial del transportista\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    30 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:CarrierParty/cac:AgentParty/cac:PartyLegalEntity/cbc:CompanyID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Entidad Autorizadora - Autorizacion especial del transportista\'',
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
        'errorCodeValidate' => '\'3345\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentType',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() != \'-\']]) > 2',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'31\' or text() = \'65\' or text() = \'66\' or text() = \'67\' or text() = \'68\' or text() = \'69\']]) > 0',
      ),
    ),
    32 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3346\'',
        'node' => 'cac:AdditionalDocumentReference/cbc:DocumentType',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() != \'-\']]) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'31\' or text() = \'65\' or text() = \'66\' or text() = \'67\' or text() = \'68\' or text() = \'69\']]) = 0                 and count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\'] and substring(cbc:ID, 1, 1) != \'0\' and substring(cbc:ID, 1, 1) != \'1\' and substring(cbc:ID, 1, 1) != \'2\' and substring(cbc:ID, 1, 1) != \'3\'                  and substring(cbc:ID, 1, 1) != \'4\' and substring(cbc:ID, 1, 1) != \'5\' and substring(cbc:ID, 1, 1) != \'6\' and substring(cbc:ID, 1, 1) != \'7\' and substring(cbc:ID, 1, 1) != \'8\' and substring(cbc:ID, 1, 1) != \'9\'] ) = 0',
      ),
    ),
    33 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3383\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    34 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2541\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID/@schemeID',
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
        'errorCodeValidate' => '\'2542\'',
        'idCatalogo' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    36 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID/@schemeName',
        'regexp' => '\'^(Documento de Identidad)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento de identidad del Remitente\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    37 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:SUNAT)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento de identidad del Remitente\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4257\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID/@schemeURI',
        'regexp' => '\'^(urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Tipo de documento de identidad del Remitente\'',
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
        'errorCodeValidate' => '\'2560\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID = cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3384\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[0-9]{8}$\'',
        'descripcion' => '\'Numero de DNI invalido\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID/@schemeID = \'1\'',
      ),
    ),
    41 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3384\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
        'descripcion' => '\'Numero de RUC invalido\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID/@schemeID = \'6\'',
      ),
    ),
    42 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3384\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
        'descripcion' => '\'Longitud del numero de documento invalido\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID) > 15 or string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID) < 1 ',
      ),
    ),
    43 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3384\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[^\\s]{1,}$\'',
        'descripcion' => '\'Caracteres invalidos\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    44 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3387\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyLegalEntity/cbc:RegistrationName',
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
        'errorCodeValidate' => '\'4422\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyLegalEntity/cbc:RegistrationName) > 250 or string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyLegalEntity/cbc:RegistrationName) < 1 ',
      ),
    ),
    46 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4422\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(translate(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    47 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4422\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
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
        'errorCodeNotExist' => '\'2757\'',
        'node' => 'cac:DeliveryCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    49 => 
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
    50 => 
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
    51 => 
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
    52 => 
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
    53 => 
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
    54 => 
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
    55 => 
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
    56 => 
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
    57 => 
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
    58 => 
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
    59 => 
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
    60 => 
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
    61 => 
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
    62 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3435\'',
        'node' => 'cac:DespatchLine/cbc:DeliveredQuantity',
        'expresion' => 'count(cac:DespatchLine[cbc:DeliveredQuantity > 0]) = 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0)                 or (count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 )',
      ),
    ),
    63 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3352\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7022\']',
        'expresion' => 'count(cac:DespatchLine/cac:Item/cac:AdditionalItemProperty[cbc:NameCode[text() = \'7020\']]) = 0',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0)                 or (count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 )',
        1 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'80\']]) > 0 ',
      ),
    ),
    64 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4434\'',
        'node' => 'cac:DespatchLine/cbc:DeliveredQuantity',
        'expresion' => 'count(cac:DespatchLine[cbc:DeliveredQuantity > 0]) > 0',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\'] and substring(cbc:ID, 1, 1) != \'0\' and substring(cbc:ID, 1, 1) != \'1\' and substring(cbc:ID, 1, 1) != \'2\' and substring(cbc:ID, 1, 1) != \'3\'                           and substring(cbc:ID, 1, 1) != \'4\' and substring(cbc:ID, 1, 1) != \'5\' and substring(cbc:ID, 1, 1) != \'6\' and substring(cbc:ID, 1, 1) != \'7\' and substring(cbc:ID, 1, 1) != \'8\' and substring(cbc:ID, 1, 1) != \'9\'] ) > 0                 or (count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'04\'] and substring(cbc:ID, 1, 1) != \'0\' and substring(cbc:ID, 1, 1) != \'1\' and substring(cbc:ID, 1, 1) != \'2\' and substring(cbc:ID, 1, 1) != \'3\'                           and substring(cbc:ID, 1, 1) != \'4\' and substring(cbc:ID, 1, 1) != \'5\' and substring(cbc:ID, 1, 1) != \'6\' and substring(cbc:ID, 1, 1) != \'7\' and substring(cbc:ID, 1, 1) != \'8\' and substring(cbc:ID, 1, 1) != \'9\'] ) > 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) > 0)                 or (count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']]) > 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) > 0)',
      ),
    ),
    65 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2775\'',
        'errorCodeValidate' => '\'2776\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID',
        'regexp' => '\'^[0-9]{6}$\'',
        'descripcion' => '\'Ubigeo punto de partida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    66 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3363\'',
        'idCatalogo' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID',
        'catalogo' => '\'13\'',
        'descripcion' => '\'Ubigeo punto de partida\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Ubigeo punto de partida\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Ubigeo punto de partida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    69 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2577\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'descripcion' => '\'Direccion punto de partida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\'] and substring(cbc:ID, 1, 1) != \'0\' and substring(cbc:ID, 1, 1) != \'1\' and substring(cbc:ID, 1, 1) != \'2\' and substring(cbc:ID, 1, 1) != \'3\'                           and substring(cbc:ID, 1, 1) != \'4\' and substring(cbc:ID, 1, 1) != \'5\' and substring(cbc:ID, 1, 1) != \'6\' and substring(cbc:ID, 1, 1) != \'7\' and substring(cbc:ID, 1, 1) != \'8\' and substring(cbc:ID, 1, 1) != \'9\'] ) = 0               and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTransbordoProgramado\']) = 0',
      ),
    ),
    70 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4076\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Longitud de la direccion invalida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line) > 500 or string-length(cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchAddress/cac:AddressLine/cbc:Line) < 3 ',
      ),
    ),
    71 => 
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
    72 => 
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
    73 => 
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
    74 => 
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
    75 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2775\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'expresion' => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\']]) = 0',
        'descripcion' => '\'Ubigeo punto de llegada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID) or cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID = \'\'',
      ),
    ),
    76 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4431\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'isError' => 'false()',
        'descripcion' => '\'Ubigeo punto de llegada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\'] and (substring(cbc:ID, 1, 1) = \'0\' or substring(cbc:ID, 1, 1) = \'1\' or substring(cbc:ID, 1, 1) = \'2\' or substring(cbc:ID, 1, 1) = \'3\'                           or substring(cbc:ID, 1, 1) = \'4\' or substring(cbc:ID, 1, 1) = \'5\' or substring(cbc:ID, 1, 1) = \'6\' or substring(cbc:ID, 1, 1) = \'7\' or substring(cbc:ID, 1, 1) = \'8\' or substring(cbc:ID, 1, 1) = \'9\')] ) > 0 ',
      ),
    ),
    77 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'2776\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID',
        'regexp' => '\'^[0-9]{6}$\'',
        'descripcion' => '\'Ubigeo punto de llegada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID != \'\'',
      ),
    ),
    78 => 
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
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID != \'\'',
      ),
    ),
    79 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4255\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID/@schemeName',
        'regexp' => '\'^(Ubigeos)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Ubigeo punto de llegada\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'4256\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cbc:ID/@schemeAgencyName',
        'regexp' => '\'^(PE:INEI)$\'',
        'isError' => 'false()',
        'descripcion' => '\'Ubigeo punto de llegada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    81 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2574\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'descripcion' => '\'Direccion punto de llegada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\']]  ) = 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTransbordoProgramado\']) = 0',
      ),
    ),
    82 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4178\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'isError' => 'false()',
        'descripcion' => '\'Direccion punto de llegada\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\'] and (substring(cbc:ID, 1, 1) = \'0\' or substring(cbc:ID, 1, 1) = \'1\' or substring(cbc:ID, 1, 1) = \'2\' or substring(cbc:ID, 1, 1) = \'3\'                  or substring(cbc:ID, 1, 1) = \'4\' or substring(cbc:ID, 1, 1) = \'5\' or substring(cbc:ID, 1, 1) = \'6\' or substring(cbc:ID, 1, 1) = \'7\' or substring(cbc:ID, 1, 1) = \'8\' or substring(cbc:ID, 1, 1) = \'9\')] ) > 0                  and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTransbordoProgramado\']) = 0',
      ),
    ),
    83 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4068\'',
        'node' => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => '\'Longitud de la direccion invalida\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line != \'\'',
        1 => 'string-length(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line) > 500 or string-length(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line) < 3 ',
      ),
    ),
    84 => 
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
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line != \'\'',
        1 => 'string-length(translate(cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line,\' \',\'\')) = 0 ',
      ),
    ),
    85 => 
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
        0 => 'cac:Shipment/cac:Delivery/cac:DeliveryAddress/cac:AddressLine/cbc:Line != \'\'',
      ),
    ),
    86 => 
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
    87 => 
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
    88 => 
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
      ),
    ),
    89 => 
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
    90 => 
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
      ),
    ),
    91 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3355\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'regexp' => '\'^(?!0+$)([0-9A-Z]{10,15})$\'',
        'descripcion' => '\'Vehiculo principal\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:ApplicableTransportMeans/cbc:RegistrationNationalityID != \'\'',
      ),
    ),
    92 => 
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
    93 => 
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
    94 => 
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
    95 => 
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
    96 => 
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
    97 => 
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
    98 => 
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
    99 => 
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
    100 => 
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
    101 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4389\'',
        'node' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment/cbc:ID',
        'expresion' => 'count(cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment) > 2',
        'isError' => 'false()',
        'descripcion' => '\'Vehiculos secundarios\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3357\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle',
        'expresion' => 'count(cac:Shipment/cac:ShipmentStage/cac:DriverPerson/cbc:JobTitle[text()=\'Principal\']) < 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    103 => 
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
    104 => 
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
    105 => 
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
    106 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3406\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'descripcion' => '\'Fecha de inicio de traslado\'',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3343\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'expresion' => 'number(translate(cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate,\'-\',\'\')) < number(translate(cbc:IssueDate,\'-\',\'\'))',
        'descripcion' => '\'Fecha de inicio de traslado\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
      ),
    ),
    108 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3407\'',
        'node' => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
        'regexp' => '\'^[0-9]{4}-[0-9]{2}-[0-9]{2}?$\'',
        'descripcion' => '\'Fecha de inicio de traslado\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:ShipmentStage/cac:TransitPeriod/cbc:StartDate',
      ),
    ),
    109 => 
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
      ),
    ),
    110 => 
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
    111 => 
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
      ),
    ),
    112 => 
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
    113 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4429\'',
        'node' => 'cac:DespatchLine/cac:Item/cbc:Description',
        'expresion' => 'count(cac:DespatchLine[cbc:ID = 0 and cac:Item/cbc:Description[text() != \'\']]) = 0',
        'isError' => 'false()',
        'descripcion' => '\'Anotacion sobre los bienes a transportar\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\'] and (substring(cbc:ID, 1, 1) = \'0\' or substring(cbc:ID, 1, 1) = \'1\' or substring(cbc:ID, 1, 1) = \'2\' or substring(cbc:ID, 1, 1) = \'3\'                           or substring(cbc:ID, 1, 1) = \'4\' or substring(cbc:ID, 1, 1) = \'5\' or substring(cbc:ID, 1, 1) = \'6\' or substring(cbc:ID, 1, 1) = \'7\' or substring(cbc:ID, 1, 1) = \'8\' or substring(cbc:ID, 1, 1) = \'9\')] ) > 0)                 or count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text()=\'82\']]) > 0  ',
      ),
    ),
    114 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4429\'',
        'node' => 'cac:DespatchLine/cac:Item/cbc:Description',
        'expresion' => 'count(cac:DespatchLine[cbc:ID = 0 and cac:Item/cbc:Description[text() != \'\']]) = 0',
        'isError' => 'false()',
        'descripcion' => '\'Anotacion sobre los bienes a transportar\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'04\'] and (substring(cbc:ID, 1, 1) = \'0\' or substring(cbc:ID, 1, 1) = \'1\' or substring(cbc:ID, 1, 1) = \'2\' or substring(cbc:ID, 1, 1) = \'3\'                           or substring(cbc:ID, 1, 1) = \'4\' or substring(cbc:ID, 1, 1) = \'5\' or substring(cbc:ID, 1, 1) = \'6\' or substring(cbc:ID, 1, 1) = \'7\' or substring(cbc:ID, 1, 1) = \'8\' or substring(cbc:ID, 1, 1) = \'9\')] ) > 0)                 or count(cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'03\' or text()=\'12\' or text()=\'48\']]) > 0  ',
        1 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) > 0',
      ),
    ),
    115 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3388\'',
        'node' => 'text()',
        'expresion' => 'text() != \'SUNAT_Envio_IndicadorTransbordoProgramado\' and text() != \'SUNAT_Envio_IndicadorRetornoVehiculoEnvaseVacio\' and text() != \'SUNAT_Envio_IndicadorRetornoVehiculoVacio\' and text() != \'SUNAT_Envio_IndicadorTrasporteSubcontratado\'                                                    and text() != \'SUNAT_Envio_IndicadorPagadorFlete_Remitente\' and text() != \'SUNAT_Envio_IndicadorPagadorFlete_Subcontratador\' and text() != \'SUNAT_Envio_IndicadorPagadorFlete_Tercero\' and text() != \'SUNAT_Envio_IndicadorTrasladoTotal\'',
      ),
      'context' => 'cac:Shipment/cbc:SpecialInstructions',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring(text(),1,6) = \'SUNAT_\' ',
      ),
    ),
    116 => 
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
    117 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTrasladoVehiculoM1L\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) > 1',
      ),
      'context' => '/*',
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
    119 => 
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
    120 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorTrasladoTotalDAMoDS\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasporteSubcontratado\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    121 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Remitente\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    122 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Subcontratador\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    123 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Tercero\']) > 1',
      ),
      'context' => '/*',
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
        'errorCodeValidate' => '\'3344\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[substring(text(),1,34) = \'SUNAT_Envio_IndicadorPagadorFlete_\']) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    125 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4388\'',
        'node' => 'cac:Shipment/cbc:SpecialInstructions[text()=\'SUNAT_Envio_IndicadorVehiculoConductoresTransp\']',
        'expresion' => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Remitente\']) = 0 and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Subcontratador\']) = 0                                               and count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Tercero\']) = 0',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    126 => 
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
    127 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4425\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'isError' => 'false()',
        'descripcion' => '\'Empresa que subcontrata\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasporteSubcontratado\']) > 0',
      ),
    ),
    128 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3391\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyIdentification/cbc:ID/@schemeID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
      ),
    ),
    129 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4424\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyIdentification/cbc:ID',
        'isError' => 'false()',
        'descripcion' => '\'Empresa que subcontrata\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasporteSubcontratado\']) > 0',
      ),
    ),
    130 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3390\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyIdentification/cbc:ID = cac:DespatchSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyIdentification/cbc:ID != \'\'',
      ),
    ),
    131 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4426\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'isError' => 'false()',
        'descripcion' => '\'Empresa que subcontrata\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasporteSubcontratado\']) > 0',
      ),
    ),
    132 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4427\'',
        'node' => 'cac:Shipment/cbc:Information',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
        1 => 'string-length(cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName) > 250 ',
      ),
    ),
    133 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4427\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
        1 => 'string-length(translate(cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    134 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4427\'',
        'node' => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:Shipment/cac:Consignment/cac:LogisticsOperatorParty/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
      ),
    ),
    135 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4401\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'isError' => 'false()',
        'descripcion' => '\'Pagador del servicio\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Tercero\']) > 0',
      ),
    ),
    136 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3399\'',
        'idCatalogo' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID',
        'catalogo' => '\'06\'',
        'descripcion' => '\'Pagador del servicio\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Tercero\']) > 0',
        1 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
      ),
    ),
    137 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4402\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'isError' => 'false()',
        'descripcion' => '\'Pagador del servicio\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Tercero\']) > 0',
      ),
    ),
    138 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3400\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[0-9]{8}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        1 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'1\'',
      ),
    ),
    139 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3400\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[1-2][0-9]{10}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        1 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID = \'6\'',
      ),
    ),
    140 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3400\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'expresion' => 'true()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
        1 => 'string-length(cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID) > 15 or string-length(cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID) < 1 ',
      ),
    ),
    141 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3400\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID',
        'regexp' => '\'^[^\\s]{1,}$\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID/@schemeID != \'\'',
      ),
    ),
    142 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4370\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorPagadorFlete_Tercero\']) > 0',
      ),
    ),
    143 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4423\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
        1 => 'string-length(cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName) > 250 ',
      ),
    ),
    144 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4423\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'expresion' => 'true()',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
        1 => 'string-length(translate(cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName,\' \',\'\')) = 0 ',
      ),
    ),
    145 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4423\'',
        'node' => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:OriginatorCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName != \'\'',
      ),
    ),
    146 => 
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
    147 => 
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
    148 => 
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
    149 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4186\'',
        'node' => '$desNota',
        'regexp' => '\'^[^\\n\\t\\r\\f]{2,}$\'',
        'isError' => 'false()',
      ),
      'context' => 'cbc:Note',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    150 => 
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
    151 => 
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
    152 => 
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
    153 => 
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
    154 => 
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
    155 => 
    array (
      'primitive' => 'findElementInCatalog61tProperty',
      'params' => 
      array (
        'catalogo' => '\'61\'',
        'propiedad' => '\'gre-t\'',
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
    156 => 
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
    157 => 
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
    158 => 
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
    159 => 
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
    160 => 
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
    161 => 
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
    162 => 
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
    163 => 
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
    164 => 
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
    165 => 
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
    166 => 
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
    167 => 
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
    168 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(?!0+$)([0-9]{1,20})$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'80\'',
      ),
    ),
    169 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^[0-9]{3}-[0-9]{4}-([1][0]|[4][0])-[0-9]{1,6}$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'50\']',
      ),
    ),
    170 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^(([V][A-Z0-9]{3}|[E][G][0][3]|[E][G][0][4])-(?!0+$)([0-9]{1,8}))$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode = \'31\'',
      ),
    ),
    171 => 
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
        0 => 'cbc:DocumentTypeCode[text() = \'82\' or text() = \'65\' or text() = \'66\' or text() = \'67\' or text() = \'68\' or text() = \'69\']',
        1 => 'string-length(cbc:ID) > 100 or string-length(cbc:ID) < 1 ',
      ),
    ),
    172 => 
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
        0 => 'cbc:DocumentTypeCode[text() = \'82\' or text() = \'65\' or text() = \'66\' or text() = \'67\' or text() = \'68\' or text() = \'69\']',
      ),
    ),
    173 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3441\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^([a-zA-Z0-9\\-\\/]{1,35})$\'',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode[text() = \'93\' or text() = \'94\' or text() = \'95\']',
      ),
    ),
    174 => 
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
        0 => 'cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'31\' or text() = \'48\']',
      ),
    ),
    175 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3381\'',
        'node' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID',
        'expresion' => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != $root/cac:Shipment/cac:Delivery/cac:Despatch/cac:DespatchParty/cac:PartyIdentification/cbc:ID',
        'descripcion' => 'concat(\'Documento Relacionado : \', cbc:DocumentTypeCode,\'-\',cbc:ID)',
      ),
      'context' => 'cac:AdditionalDocumentReference',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != \'\' and substring(cbc:ID, 1, 1) != \'0\' and substring(cbc:ID, 1, 1) != \'1\' and substring(cbc:ID, 1, 1) != \'2\' and substring(cbc:ID, 1, 1) != \'3\'                  and substring(cbc:ID, 1, 1) != \'4\' and substring(cbc:ID, 1, 1) != \'5\' and substring(cbc:ID, 1, 1) != \'6\' and substring(cbc:ID, 1, 1) != \'7\' and substring(cbc:ID, 1, 1) != \'8\' and substring(cbc:ID, 1, 1) != \'9\' ',
        1 => 'cbc:DocumentTypeCode = \'09\' ',
      ),
    ),
    176 => 
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
        0 => 'cac:IssuerParty/cac:PartyIdentification/cbc:ID != \'\' and substring(cbc:ID, 1, 1) != \'0\' and substring(cbc:ID, 1, 1) != \'1\' and substring(cbc:ID, 1, 1) != \'2\' and substring(cbc:ID, 1, 1) != \'3\'                  and substring(cbc:ID, 1, 1) != \'4\' and substring(cbc:ID, 1, 1) != \'5\' and substring(cbc:ID, 1, 1) != \'6\' and substring(cbc:ID, 1, 1) != \'7\' and substring(cbc:ID, 1, 1) != \'8\' and substring(cbc:ID, 1, 1) != \'9\' ',
        1 => 'cbc:DocumentTypeCode = \'31\'',
      ),
    ),
    177 => 
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
        0 => 'cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'31\' or text() = \'48\']',
      ),
    ),
    178 => 
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
    179 => 
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
    180 => 
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
    181 => 
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
    182 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4399\'',
        'node' => 'cac:ApplicableTransportMeans/cbc:RegistrationNationalityID',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Vehiculo secundario: \',cbc:ID)',
      ),
      'context' => 'cac:Shipment/cac:TransportHandlingUnit/cac:TransportEquipment/cac:AttachedTransportEquipment',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID != \'\'',
      ),
    ),
    183 => 
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
    184 => 
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
    185 => 
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
    186 => 
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
    187 => 
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
    188 => 
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
    189 => 
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
    190 => 
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
    191 => 
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
    192 => 
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
    193 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3362\'',
        'node' => 'cac:IdentityDocumentReference/cbc:ID',
        'expresion' => 'count(key(\'by-conductores\',cac:IdentityDocumentReference/cbc:ID )) > 1',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor)',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[ text() = \'Secundario\']',
        1 => 'cac:IdentityDocumentReference/cbc:ID != \'\' ',
      ),
    ),
    194 => 
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
        1 => '(cbc:JobTitle[text() = \'Principal\']) or (cbc:JobTitle[text() = \'Secundario\'] and cac:IdentityDocumentReference/cbc:ID != \'\') or (cbc:JobTitle[text() = \'Secundario\'] and cbc:ID/@schemeID != \'\')',
      ),
    ),
    195 => 
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
        1 => 'cbc:JobTitle[text() = \'Principal\']',
      ),
    ),
    196 => 
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
        1 => 'cbc:JobTitle[text() = \'Secundario\'] and cbc:ID != \'\'',
      ),
    ),
    197 => 
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
        1 => '(cbc:JobTitle[text() = \'Principal\']) or (cbc:JobTitle[text() = \'Secundario\'] and cbc:ID/@schemeID != \'\')',
      ),
    ),
    198 => 
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
        1 => '(cbc:JobTitle[text() = \'Principal\']) or (cbc:JobTitle[text() = \'Secundario\'] and cbc:ID/@schemeID != \'\')',
      ),
    ),
    199 => 
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
    200 => 
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
    201 => 
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
    202 => 
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
    203 => 
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
    204 => 
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
    205 => 
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
        1 => '(cbc:JobTitle[text() = \'Principal\']) or (cbc:JobTitle[text() = \'Secundario\'] and cac:IdentityDocumentReference/cbc:ID != \'\')',
      ),
    ),
    206 => 
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
        1 => '(cbc:JobTitle[text() = \'Principal\']) or (cbc:JobTitle[text() = \'Secundario\'] and cac:IdentityDocumentReference/cbc:ID != \'\')',
      ),
    ),
    207 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FirstName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres\')',
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
    208 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FirstName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres\')',
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
    209 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FirstName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Nombres\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FirstName != \'\'',
      ),
    ),
    210 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FamilyName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos\')',
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
    211 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FamilyName',
        'expresion' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos\')',
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
    212 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4409\'',
        'node' => 'cbc:FamilyName',
        'regexp' => '\'^[^\\n\\t\\r\\f]{1,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Tipo de conductor \',$tipoConductor,\' - Apellidos\')',
      ),
      'context' => 'cac:Shipment/cac:ShipmentStage/cac:DriverPerson',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:JobTitle[text() = \'Principal\' or text() = \'Secundario\']',
        1 => 'cbc:FamilyName != \'\'',
      ),
    ),
    213 => 
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
        1 => 'cbc:JobTitle[text() = \'Principal\'] or (cbc:JobTitle[text() = \'Secundario\'] and cbc:ID != \'\')',
      ),
    ),
    214 => 
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
    215 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2023\'',
        'errorCodeValidate' => '\'2023\'',
        'node' => 'cbc:ID',
        'regexp' => '\'^\\d{1,4}$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    216 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2752\'',
        'node' => 'cbc:ID',
        'expresion' => 'count(key(\'by-despatchLine-id\', number(cbc:ID))) > 1',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    217 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3458\'',
        'node' => 'cbc:ID',
        'expresion' => 'cbc:ID = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'09\'] and (substring(cbc:ID, 1, 1) = \'0\' or substring(cbc:ID, 1, 1) = \'1\' or substring(cbc:ID, 1, 1) = \'2\' or substring(cbc:ID, 1, 1) = \'3\'                  or substring(cbc:ID, 1, 1) = \'4\' or substring(cbc:ID, 1, 1) = \'5\' or substring(cbc:ID, 1, 1) = \'6\' or substring(cbc:ID, 1, 1) = \'7\' or substring(cbc:ID, 1, 1) = \'8\' or substring(cbc:ID, 1, 1) = \'9\')] ) = 0)                        and (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'82\']]) = 0)                 and (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text()=\'04\'] and (substring(cbc:ID, 1, 1) = \'0\' or substring(cbc:ID, 1, 1) = \'1\' or substring(cbc:ID, 1, 1) = \'2\' or substring(cbc:ID, 1, 1) = \'3\'                  or substring(cbc:ID, 1, 1) = \'4\' or substring(cbc:ID, 1, 1) = \'5\' or substring(cbc:ID, 1, 1) = \'6\' or substring(cbc:ID, 1, 1) = \'7\' or substring(cbc:ID, 1, 1) = \'8\' or substring(cbc:ID, 1, 1) = \'9\')] ) = 0                   or count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0)                and (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'03\' or text()=\'12\' or text()=\'48\']]) = 0 or count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0) ',
      ),
    ),
    218 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2580\'',
        'node' => 'cbc:DeliveredQuantity',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0)                 or (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 )',
      ),
    ),
    219 => 
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
        0 => '(count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0)                 or (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 )',
      ),
    ),
    220 => 
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
        0 => '(count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0)                 or (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 )',
      ),
    ),
    221 => 
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
        0 => '(count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0 and $bienControlado > 0)                 or (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 and $bienControlado > 0)',
      ),
    ),
    222 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3426\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7022\']',
        'expresion' => 'count(cac:Item/cac:AdditionalItemProperty[cbc:NameCode = \'7020\']) = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7022\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0 and $bienControlado > 0)                 or (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 and $bienControlado > 0)',
      ),
    ),
    223 => 
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
      ),
    ),
    224 => 
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
        0 => 'cbc:DeliveredQuantity/@unitCode != \'\'',
        1 => 'count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']]) = 0',
      ),
    ),
    225 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'4320\'',
        'idCatalogo' => 'cbc:DeliveredQuantity/@unitCode',
        'catalogo' => '\'65\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DeliveredQuantity/@unitCode != \'\'',
        1 => 'count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'50\' or text() = \'52\']]) > 0',
      ),
    ),
    226 => 
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
    227 => 
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
    228 => 
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
        0 => 'cbc:ID != 0 and cac:Item/cbc:Description',
        1 => 'string-length(cac:Item/cbc:Description) > 500 or string-length(cac:Item/cbc:Description) < 3 ',
      ),
    ),
    229 => 
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
        0 => 'cbc:ID != 0 and cac:Item/cbc:Description',
        1 => 'string-length(translate(cac:Item/cbc:Description,\' \',\'\')) = 0 ',
      ),
    ),
    230 => 
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
        0 => 'cbc:ID != 0 and cac:Item/cbc:Description',
      ),
    ),
    231 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4430\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID = 0 and cac:Item/cbc:Description != \'\'',
        1 => 'string-length(cac:Item/cbc:Description) > 500 or string-length(cac:Item/cbc:Description) < 3 ',
      ),
    ),
    232 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4430\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => 'true()',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID = 0 and cac:Item/cbc:Description != \'\'',
        1 => 'string-length(translate(cac:Item/cbc:Description,\' \',\'\')) = 0 ',
      ),
    ),
    233 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4430\'',
        'node' => 'cac:Item/cbc:Description',
        'regexp' => '\'^(?!\\s*$)[\\S\\s]{3,}$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea)',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:ID = 0 and cac:Item/cbc:Description != \'\'',
      ),
    ),
    234 => 
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
    235 => 
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
    236 => 
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
    237 => 
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
    238 => 
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
        0 => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode != \'\' ',
        1 => '$bienControlado > 0',
      ),
    ),
    239 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4254\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode/@listID',
        'regexp' => '\'^(UNSPSC)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea,\' Codigo de producto SUNAT \')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    240 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4251\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode/@listAgencyName',
        'regexp' => '\'^(GS1 US)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea,\' Codigo de producto SUNAT \')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    241 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'4252\'',
        'node' => 'cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode/@listName',
        'regexp' => '\'^(Item Classification)$\'',
        'isError' => 'false()',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea,\' Codigo de producto SUNAT \')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    242 => 
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
    243 => 
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
    244 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3426\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7022\']',
        'expresion' => 'not(cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7020\'])',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7022\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\']]) > 0 and count($root/cac:Shipment/cbc:SpecialInstructions[text() = \'SUNAT_Envio_IndicadorTrasladoTotal\']) = 0)                 or (count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 )',
        1 => '$bienControlado > 0 ',
      ),
    ),
    245 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3379\'',
        'node' => 'cac:Item/cac:AdditionalItemProperty/cbc:NameCode[text() = \'7022\']',
        'expresion' => 'count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'80\']]) = 0',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: 7022\')',
      ),
      'context' => 'cac:DespatchLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '$bienControlado > 0 and count($root/cac:AdditionalDocumentReference[cbc:DocumentTypeCode[text() = \'01\' or text() = \'03\' or text() = \'04\' or text() = \'09\' or text() = \'12\' or text() = \'48\' or text() = \'50\' or text() = \'52\' or text() = \'82\']]) = 0 ',
      ),
    ),
    246 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'4235\'',
        'node' => 'cbc:Name',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
        'isError' => 'false()',
      ),
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:Name',
      ),
    ),
    247 => 
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
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    248 => 
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
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    249 => 
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
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
      ),
    ),
    250 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'3064\'',
        'node' => 'cbc:Value',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode[text() = \'7020\' or text()=\'7022\']',
      ),
    ),
    251 => 
    array (
      'primitive' => 'regexpValidateElementIfExist',
      'params' => 
      array (
        'errorCodeValidate' => '\'3377\'',
        'node' => 'cbc:Value',
        'regexp' => '\'^(?!0+$)([0-9]{1,10})$\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7020\'',
      ),
    ),
    252 => 
    array (
      'primitive' => 'findElementInCatalog',
      'params' => 
      array (
        'errorCodeValidate' => '\'3429\'',
        'idCatalogo' => 'cbc:Value',
        'catalogo' => '\'62\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7020\'',
        1 => '$bienControlado > 0',
      ),
    ),
    253 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'3396\'',
        'node' => 'cbc:Value',
        'expresion' => 'cbc:Value != \'0\' and cbc:Value != \'1\'',
        'descripcion' => 'concat(\'Error en la linea: \', $nroLinea, \' Concepto: \', cbc:NameCode)',
      ),
      'context' => 'cac:DespatchLine/cac:Item/cac:AdditionalItemProperty',
      'mode' => 'linea',
      'conditions' => 
      array (
        0 => 'cbc:NameCode = \'7022\'',
      ),
    ),
  ),
);
