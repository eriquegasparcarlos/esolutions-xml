# esolutions/xml

Generación, firma, validación y envío SUNAT/OSE de comprobantes electrónicos peruanos (XML UBL) para proyectos Laravel. **Independiente del proyecto consumidor**: la entrada es un array payload documentado y la configuración entra por objetos propios — sin dependencias a modelos Eloquent externos.

## Tipos de documento soportados

| Documento | Código | Plantilla | UBL | Envío |
|---|---|---|---|---|
| Factura / Boleta | 01 / 03 | `invoice` | 2.1 | `sendBill` (síncrono, CDR inmediato) |
| Nota de crédito | 07 | `credit-note` | 2.1 | `sendBill` |
| Nota de débito | 08 | `debit-note` | 2.1 | `sendBill` |
| Guía de remisión | 09 | `despatch` | 2.1 | REST GRE 2022 (stub, v2.1) |
| Retención | 20 | `retention` | 2.0 | `sendBill` (endpoint propio) |
| Percepción | 40 | `perception` | 2.0 | `sendBill` (endpoint propio) |
| Resumen diario | RC | `summary` | 2.0 | `sendSummary` → ticket → `getStatus` |
| Comunicación de baja | RA | `voided` | 2.0 | `sendSummary` → ticket → `getStatus` |

## Instalación

```bash
composer require esolutions/xml
```

Disponible en [Packagist](https://packagist.org/packages/esolutions/xml). Requiere PHP `^8.2`, Laravel `^11|^12|^13` y las extensiones `dom`, `libxml`, `openssl`, `soap`, `zip`. El provider se registra por auto-discovery; la config es publicable:

```bash
php artisan vendor:publish --tag=esolutions-xml-config
```

## Generar un XML (render + firma + validación XSD y reglas)

```php
use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;

$generator = app(XmlDocumentGeneratorContract::class);
$result = $generator->generate('01', $payload);   // acepta 01/03/07/08/09/20/40/RC/RA o alias (invoice, credit-note...)

if ($result->isOk()) {
    $signedXml = $result->xml;
    $hash = $result->getHash();       // DigestValue para el PDF/QR
} else {
    $errores = $result->validation->errors;   // [PAYLOAD] / [XSD] / reglas de negocio
}
```

El **payload** es un array plano documentado por tipo en [`docs/payloads/`](docs/payloads/). Antes del render se valida contra `src/Payload/Schemas/{tipo}.php`: si faltan claves, `isOk()` es `false` con errores `[PAYLOAD]` claros (nunca un "Undefined array key" dentro de la plantilla). El mapeo desde tus modelos hacia el payload vive en **tu** proyecto (patrón anti-corruption; ver `SaleXmlPayloadBuilder` de intipos13 como referencia).

## Enviar a SUNAT / OSE

```php
use ESolutions\Xml\Sending\{DocumentSender, SenderConfig, FilenameBuilder};

$config = SenderConfig::fromArray([
    'provider' => 'sunat',            // 'sunat' | 'nubefact'
    'environment' => 'demo',          // 'demo' (beta) | 'production'
    'username' => '20123456789MODDATOS',
    'password' => 'moddatos',
    'endpoint' => null,               // URL OSE/PSE propia (override total)
]);

$sender = new DocumentSender($config);
$filename = FilenameBuilder::forDocument('20123456789', '01', 'F001', 123);

// Fachada: resuelve sendBill vs sendSummary inspeccionando el XML firmado
$result = $sender->send($filename, $signedXml);

if ($result->isAccepted()) {          // aceptado u observado (código 0 / >=4000)
    $cdrXml = $result->getCdrXml();   // ApplicationResponse ya extraído del ZIP
    $notas = $result->getNotes();
} elseif ($result->isRejected()) {    // 2000-3999
    $motivo = $result->getMessage();  // traducido por el catálogo local de códigos
}
```

- **Resúmenes/bajas** (asíncrono): `sendSummary()` retorna `SummaryResult` con `getTicket()`; luego `getStatus($ticket)` retorna `StatusResult` (`isInProcess()` = código 98, reintentar).
- **Reconsulta de CDR** (caso 1033 "ya fue enviado"): `ConsultCdrService::getStatusCdr($ruc, $tipo, $serie, $numero)`.
- Todos los results envuelven el mismo array uniforme (`toArray()`): `success` (técnico), `connection`, `sunat_success` (veredicto), `state_label` (`aceptado|observado|rechazado|en_proceso|indeterminado`).
- Los códigos SUNAT se traducen con `FileErrorCodeCatalog` (1474 códigos empaquetados); puedes re-bindear `ErrorCodeCatalogInterface` para usar tu propio catálogo (p.ej. Redis).

## Firma

XMLDSig enveloped (RSA-SHA1 + C14N, requisito SUNAT) insertada en el `<ext:ExtensionContent/>` vacío del template. Certificado por config:

```php
'signing' => [
    'default_certificate_file' => env('SUNAT_CERTIFICATE_FILE'),      // .pem (cert+key) o .pfx/.p12
    'default_certificate_password' => env('SUNAT_CERTIFICATE_PASSWORD'),
],
```

Sin certificado configurado se usa el **demo de SUNAT beta** empaquetado (solo válido en homologación). Los `.pfx/.p12` se convierten a PEM al vuelo (`openssl_pkcs12_read`).

## Estructura

```
src/
├─ Contracts/     # XmlDocumentGeneratorContract, PayloadValidatorInterface, ErrorCodeCatalogInterface, ZipCompressorInterface, CdrResponseParserInterface
├─ Generator/     # XmlDocumentGenerator (valida payload → render → format → sign → valida XML)
├─ Payload/       # PayloadValidator + Schemas/{tipo}.php
├─ Rendering/     # XmlTemplateRenderer (Blade, namespace esxml::)
├─ Templates/     # 8 plantillas UBL en convención $document
├─ Sign/          # Signed, SignedXml (xmlseclibs), Certificate/, Hash/
├─ Validation/    # XSD (XsdValidator + SchemaResolver) + Rules (SeriesFormatRule...)
├─ Results/       # GenerationResult, ValidationResult + Sending/ (BillResult, SummaryResult, StatusResult)
├─ Sending/       # DocumentSender, SenderConfig, FilenameBuilder, Soap/, Cdr/, Zip/ (ZipFly en memoria), Catalog/, Services/ (Ticket, ConsultCdr), Gre/ (stub REST)
├─ Support/       # DocTypeNormalizer, FunctionTribute, UblTextSanitizer, XmlFormatter...
└─ Resources/     # wsdl/, xsd/2.0 y 2.1, certs demo, data/CodeErrors.xml
```

## Limitaciones conocidas

- El envío de **guías de remisión** por API REST (GRE 2022) es un stub — llega en v2.1; el canal SOAP de guías está deprecado por SUNAT.
- Los certificados `.pem` empaquetados son los **demo públicos de SUNAT beta** — nunca usarlos en producción.
- No hay cola/reintentos automáticos: el sender nunca lanza excepciones de conexión (retorna `success=false, connection=false`) y el consumidor decide el reintento.
