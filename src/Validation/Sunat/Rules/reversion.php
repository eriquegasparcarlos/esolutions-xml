<?php

// GENERADO por tools/extract_rules.php desde ValidaExprRegOtrosVoided-1.0.1.xsl — NO EDITAR A MANO.

return array (
  'source' => 'ValidaExprRegOtrosVoided-1.0.1.xsl',
  'globals' => 
  array (
    'fileName' => '$nombreArchivoEnviado',
    'rucFilename' => 'substring($fileName,1,11)',
    'cbcID' => 'cbc:ID',
    'issueDate' => 'cbc:IssueDate',
    'fechaFilename' => 'substring($fileName,16,8)',
    'fechaEmisionDDMMYYYY' => 'concat(substring(./cbc:ReferenceDate,9,2),"-",substring(./cbc:ReferenceDate,6,2),"-",substring(./cbc:ReferenceDate,1,4))',
    'fechaRangos' => './cbc:ReferenceDate',
    'currentdate' => 'date:date()',
    'fechaEmisionComDDMMYYYY' => 'concat(substring(./cbc:IssueDate,9,2),"-",substring(./cbc:IssueDate,6,2),"-",substring(./cbc:IssueDate,1,4))',
  ),
  'rules' => 
  array (
    0 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2217',
        'errorMessage' => '\'2217 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cac:AccountingSupplierParty/cbc:CustomerAssignedAccountID))',
      ),
    ),
    1 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2217',
        'errorMessage' => '\'Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cac:AccountingSupplierParty/cbc:CustomerAssignedAccountID))',
      ),
    ),
    2 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2216',
        'errorMessage' => '\'2216 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./cac:AccountingSupplierParty/cbc:CustomerAssignedAccountID,"^[0-9]{11}$"))',
      ),
    ),
    3 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2284',
        'errorMessage' => '\'2284 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cbc:ID))',
      ),
    ),
    4 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2673',
        'errorMessage' => '\'2673 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./cbc:ID,"[R][R]-[0-9]{8}-[0-9]{1,5}"))',
      ),
    ),
    5 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2220\'',
        'errorMessage' => 'concat(\'Validation Filename error, name: \', $fileName,\'; cbc:ID: \', $cbcID)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'substring-before($fileName,\'.\') != concat($rucFilename, \'-\', $cbcID)',
      ),
    ),
    6 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2073',
        'errorMessage' => '\'2073 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cbc:CustomizationID))',
      ),
    ),
    7 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2072',
        'errorMessage' => '\'2072 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(./cbc:CustomizationID="1.0")',
      ),
    ),
    8 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2075',
        'errorMessage' => '\'2075 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cbc:UBLVersionID))',
      ),
    ),
    9 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2074',
        'errorMessage' => '\'2074 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(./cbc:UBLVersionID="2.0")',
      ),
    ),
    10 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2288',
        'errorMessage' => '\'2288 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cac:AccountingSupplierParty/cbc:AdditionalAccountID))',
      ),
    ),
    11 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2287',
        'errorMessage' => '\'2287 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./cac:AccountingSupplierParty/cbc:AdditionalAccountID,"^[6]{1}$"))',
      ),
    ),
    12 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2229',
        'errorMessage' => '\'2229 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName))',
      ),
    ),
    13 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2228',
        'errorMessage' => '\'2228 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName,"^(.{1,100})$"))',
      ),
    ),
    14 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2303',
        'errorMessage' => '\'2303 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(not(./cbc:ReferenceDate))',
      ),
    ),
    15 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2302',
        'errorMessage' => '\'2302 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./cbc:ReferenceDate,"^[0-9]{4}-[0-9]{2}-[0-9]{2}$"))',
      ),
    ),
    16 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2304',
        'errorMessage' => '\'2304 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match($fechaEmisionDDMMYYYY,"^(?:(?:0?[1-9]|1\\d|2[0-8])(\\/|-)(?:0?[1-9]|1[0-2]))(\\/|-)(?:[1-9]\\d\\d\\d|\\d[1-9]\\d\\d|\\d\\d[1-9]\\d|\\d\\d\\d[1-9])$|^(?:(?:31(\\/|-)(?:0?[13578]|1[02]))|(?:(?:29|30)(\\/|-)(?:0?[1,3-9]|1[0-2])))(\\/|-)(?:[1-9]\\d\\d\\d|\\d[1-9]\\d\\d|\\d\\d[1-9]\\d|\\d\\d\\d[1-9])$|^(29(\\/|-)0?2)(\\/|-)(?:(?:0[48]00|[13579][26]00|[2468][048]00)|(?:\\d\\d)?(?:0[48]|[2468][048]|[13579][26]))$"))',
      ),
    ),
    17 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2299',
        'errorMessage' => '\'2299 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => '(not(./cbc:IssueDate))',
      ),
    ),
    18 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2298',
        'errorMessage' => '\'2298 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./cbc:IssueDate,"^[0-9]{4}-[0-9]{2}-[0-9]{2}$"))',
      ),
    ),
    19 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2346\'',
        'errorMessage' => 'concat(\'Validation Filename error, fecha archivo: \', $fechaFilename,\'; cbc:IssueDate: \', $issueDate)',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'translate($issueDate, \'-\', \'\') != $fechaFilename',
      ),
    ),
    20 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2300',
        'errorMessage' => '\'2300 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match($fechaEmisionComDDMMYYYY,"^(?:(?:0?[1-9]|1\\d|2[0-8])(\\/|-)(?:0?[1-9]|1[0-2]))(\\/|-)(?:[1-9]\\d\\d\\d|\\d[1-9]\\d\\d|\\d\\d[1-9]\\d|\\d\\d\\d[1-9])$|^(?:(?:31(\\/|-)(?:0?[13578]|1[02]))|(?:(?:29|30)(\\/|-)(?:0?[1,3-9]|1[0-2])))(\\/|-)(?:[1-9]\\d\\d\\d|\\d[1-9]\\d\\d|\\d\\d[1-9]\\d|\\d\\d\\d[1-9])$|^(29(\\/|-)0?2)(\\/|-)(?:(?:0[48]00|[13579][26]00|[2468][048]00)|(?:\\d\\d)?(?:0[48]|[2468][048]|[13579][26]))$"))',
      ),
    ),
    21 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2076',
        'errorMessage' => '\'2076 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not((cac:Signature/cbc:ID))',
      ),
    ),
    22 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2077',
        'errorMessage' => '\'2077 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(cac:Signature/cbc:ID,"^(?!\\s*$).{1,3000}"))',
      ),
    ),
    23 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2079',
        'errorMessage' => '\'2079 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(cac:Signature/cac:SignatoryParty/cac:PartyIdentification/cbc:ID)',
      ),
    ),
    24 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2081',
        'errorMessage' => '\'2081 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(cac:Signature/cac:SignatoryParty/cac:PartyName/cbc:Name)',
      ),
    ),
    25 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2080',
        'errorMessage' => '\'2080 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(cac:Signature/cac:SignatoryParty/cac:PartyName/cbc:Name,"^[^\\s].{1,100}"))',
      ),
    ),
    26 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2083',
        'errorMessage' => '\'2083 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(cac:Signature/cac:DigitalSignatureAttachment/cac:ExternalReference/cbc:URI)',
      ),
    ),
    27 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2084',
        'errorMessage' => '\'2084 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/@Id,"^[^\\s].{1,100}"))',
      ),
    ),
    28 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2087',
        'errorMessage' => '\'2087 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:CanonicalizationMethod/@Algorithm)',
      ),
    ),
    29 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2086',
        'errorMessage' => '\'2086 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:CanonicalizationMethod/@Algorithm,"^[^\\s].{1,100}"))',
      ),
    ),
    30 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2089',
        'errorMessage' => '\'2089 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:SignatureMethod/@Algorithm)',
      ),
    ),
    31 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2088',
        'errorMessage' => '\'2088 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:SignatureMethod/@Algorithm,"^[^\\s].{1,100}"))',
      ),
    ),
    32 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2091',
        'errorMessage' => '\'2091 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:Reference/@URI)',
      ),
    ),
    33 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2090',
        'errorMessage' => '\'2090 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'string(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:Reference/@URI)',
      ),
    ),
    34 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2093',
        'errorMessage' => '\'2093 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:Reference/ds:Transforms/ds:Transform/@Algorithm)',
      ),
    ),
    35 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2092',
        'errorMessage' => '\'2092 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:Reference/ds:Transforms/ds:Transform/@Algorithm,"^[^\\s].{1,100}"))',
      ),
    ),
    36 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2095',
        'errorMessage' => '\'2095 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:Reference/ds:DigestMethod/@Algorithm)',
      ),
    ),
    37 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2094',
        'errorMessage' => '\'2094 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:Reference/ds:DigestMethod/@Algorithm,"^[^\\s].{1,100}"))',
      ),
    ),
    38 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2097',
        'errorMessage' => '\'2097 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignedInfo/ds:Reference/ds:DigestValue)',
      ),
    ),
    39 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2099',
        'errorMessage' => '\'2099 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignatureValue)',
      ),
    ),
    40 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2098',
        'errorMessage' => '\'2098 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:SignatureValue,"[A-Za-z0-9+/=\\s]{100,}"))',
      ),
    ),
    41 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2101',
        'errorMessage' => '\'2101 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:KeyInfo/ds:X509Data/ds:X509Certificate)',
      ),
    ),
    42 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2100',
        'errorMessage' => '\'2100 Error resumen diario de reversiones\'',
      ),
      'context' => '/*',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/ds:Signature/ds:KeyInfo/ds:X509Data/ds:X509Certificate,"[A-Za-z0-9+/=\\s]{100,}"))',
      ),
    ),
    43 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2307',
        'errorMessage' => '\'2307 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(cbc:LineID))',
      ),
    ),
    44 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2305',
        'errorMessage' => '\'2305 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./cbc:LineID,\'^[0-9]{1,5}?$\'))',
      ),
    ),
    45 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2306',
        'errorMessage' => '\'2306 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'cbc:LineID < 1',
      ),
    ),
    46 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2752\'',
        'errorMessage' => 'concat(\'El numero de item esta duplicado: \', cbc:LineID)',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(key(\'by-document-line-id\', cbc:LineID)) > 1',
      ),
    ),
    47 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2309',
        'errorMessage' => '\'2309 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./cbc:DocumentTypeCode))',
      ),
    ),
    48 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2308',
        'errorMessage' => '\'2308 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(./cbc:DocumentTypeCode = \'20\' or ./cbc:DocumentTypeCode = \'40\')',
      ),
    ),
    49 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2311',
        'errorMessage' => '\'2311 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./sac:DocumentSerialID))',
      ),
    ),
    50 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2674',
        'errorMessage' => '\'2674 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => './cbc:DocumentTypeCode=\'20\' and not(regexp:match(./sac:DocumentSerialID,\'(^[R][A-Z0-9]{3}|^[\\d]{4})?$\'))',
      ),
    ),
    51 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2675',
        'errorMessage' => '\'2675 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => './cbc:DocumentTypeCode=\'40\' and not(regexp:match(./sac:DocumentSerialID,\'(^[P][A-Z0-9]{3}|^[\\d]{4})?$\'))',
      ),
    ),
    52 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2313',
        'errorMessage' => '\'2313 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./sac:DocumentNumberID))',
      ),
    ),
    53 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2312',
        'errorMessage' => '\'2312 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./sac:DocumentNumberID,"^[0-9]{1,8}?$"))',
      ),
    ),
    54 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '\'2348\'',
        'errorMessage' => 'concat(\'El documento esta duplicado: \', cbc:DocumentTypeCode, \'-\', sac:DocumentSerialID, \'-\', sac:DocumentNumberID)',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'count(key(\'by-document-id\', concat(cbc:DocumentTypeCode, \' \', sac:DocumentSerialID, \' \', sac:DocumentNumberID))) > 1',
      ),
    ),
    55 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2315',
        'errorMessage' => '\'2315 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(string(./sac:VoidReasonDescription))',
      ),
    ),
    56 => 
    array (
      'primitive' => 'rejectCall',
      'params' => 
      array (
        'errorCode' => '2314',
        'errorMessage' => '\'2314 Error resumen diario de reversiones\'',
      ),
      'context' => 'sac:VoidedDocumentsLine',
      'mode' => NULL,
      'conditions' => 
      array (
        0 => 'not(regexp:match(./sac:VoidReasonDescription,"^(.{3,100})$"))',
      ),
    ),
  ),
);
