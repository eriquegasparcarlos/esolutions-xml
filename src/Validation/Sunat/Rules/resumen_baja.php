<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegSummaryVoided-1.0.1.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegSummaryVoided-1.0.1.xsl',
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
        'regexp' => '\'^(1.0)$\'',
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
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2299\'',
        'node' => 'cbc:IssueDate',
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
    5 => 
    array (
      'primitive' => 'existElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2303\'',
        'node' => 'cbc:ReferenceDate',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    6 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2221\'',
        'node' => 'cac:AccountingSupplierParty/cbc:CustomerAssignedAccountID',
        'expresion' => '$numeroRuc != cac:AccountingSupplierParty/cbc:CustomerAssignedAccountID',
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
        'errorCodeValidate' => '\'2427\'',
        'node' => 'ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/sac:AdditionalInformation',
        'expresion' => 'count(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/sac:AdditionalInformation) > 1',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    8 => 
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
    9 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2288\'',
        'errorCodeValidate' => '\'2287\'',
        'node' => 'cbc:AdditionalAccountID',
        'regexp' => '\'^(6)$\'',
      ),
      'context' => 'cac:AccountingSupplierParty',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    10 => 
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
    11 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2307\'',
        'errorCodeValidate' => '\'2305\'',
        'node' => 'cbc:LineID',
        'regexp' => '\'^(?!0+(\\d+)$)\\d{1,5}$\'',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    12 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2306\'',
        'node' => 'cbc:LineID',
        'expresion' => 'cbc:LineID < 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
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
        'errorCodeValidate' => '\'2752\'',
        'node' => 'cbc:LineID',
        'expresion' => 'count(key(\'by-invoiceLine-id\', number(cbc:LineID))) > 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    14 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2309\'',
        'errorCodeValidate' => '\'2308\'',
        'node' => 'cbc:DocumentTypeCode',
        'regexp' => '\'^01|07|08|14$\'',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    15 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2311\'',
        'errorCodeValidate' => '\'2310\'',
        'node' => 'sac:DocumentSerialID',
        'regexp' => '\'(^[FS][A-Z0-9]{3}$)|(^[\\d]{1,4}$)\'',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
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
        'errorCodeNotExist' => '\'2311\'',
        'errorCodeValidate' => '\'2345\'',
        'node' => 'sac:DocumentSerialID',
        'regexp' => '\'(^[F][A-Z0-9]{3}$)|(^[\\d]{1,4}$)\'',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode=\'01\'',
      ),
    ),
    17 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2311\'',
        'errorCodeValidate' => '\'2345\'',
        'node' => 'sac:DocumentSerialID',
        'regexp' => '\'(^[S][A-Z0-9]{3}$)|(^[\\d]{1,4}$)\'',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:DocumentTypeCode=\'14\'',
      ),
    ),
    18 => 
    array (
      'primitive' => 'existAndRegexpValidateElement',
      'params' => 
      array (
        'errorCodeNotExist' => '\'2313\'',
        'errorCodeValidate' => '\'2312\'',
        'node' => 'sac:DocumentNumberID',
        'regexp' => '\'^\\d{1,8}$\'',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
    19 => 
    array (
      'primitive' => 'isTrueExpresion',
      'params' => 
      array (
        'errorCodeValidate' => '\'2752\'',
        'node' => 'cbc:LineID',
        'expresion' => 'count(key(\'by-Billing-in-line\', concat(cbc:LineID,cbc:DocumentTypeCode,sac:DocumentSerialID, number(sac:DocumentNumberID)))) > 1',
        'descripcion' => 'concat(\'Error en la linea:\', position(), \'. \')',
      ),
      'context' => 'sac:VoidedDocumentsLine',
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
        'errorCodeNotExist' => '\'2315\'',
        'errorCodeValidate' => '\'2314\'',
        'node' => 'sac:VoidReasonDescription',
        'regexp' => '\'^(?!\\s*$)[^\\s].{2,}$\'',
        'descripcion' => 'concat(\'Error en la linea:\', $nroLinea, \'. \')',
        'isError' => 'false()',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
      ),
    ),
  ),
);
