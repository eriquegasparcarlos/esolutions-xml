# esolutions/xml

Generación, firma, validación y envío SUNAT/OSE de comprobantes electrónicos peruanos (XML UBL 2.1) para proyectos Laravel.

Cubre las dos mitades del mismo flujo de facturación electrónica:

- **`Xml/`** — arma el XML UBL a partir de un payload, lo firma (XMLDSig) y lo valida (XSD + reglas de negocio).
- **`SunatOSEIntegration/`** — envía ese XML a SUNAT (o a un OSE como Nubefact) por SOAP y parsea la respuesta (CDR).

## Instalación

Este paquete no está en Packagist — se consume como repositorio `path` o `vcs` de Composer.

```json
{
    "repositories": [
        { "type": "vcs", "url": "https://github.com/eriquegasparcarlos/esolutions-xml" }
    ],
    "require": {
        "esolutions/xml": "^1.0"
    }
}
```

O, si trabajás con una copia local del repo (desarrollo activo):

```json
{
    "repositories": [
        { "type": "path", "url": "../esolutions-xml" }
    ]
}
```

```bash
composer require esolutions/xml
```

Requiere PHP `^8.2` y Laravel `^11.0|^12.0|^13.0`. La firma XMLDSig depende de [`robrichards/xmlseclibs`](https://github.com/robrichards/xmlseclibs) (`^3.0`), que tu proyecto debe requerir aparte.

## Registrar el Service Provider

El paquete no se auto-descubre todavía (sin `extra.laravel.providers` en su `composer.json`). Registralo manualmente:

```php
// bootstrap/providers.php (Laravel 11+)
return [
    // ...
    App\ESolutions\Xml\XmlServiceProvider::class,
];
```

El provider necesita `config/esolutions_xml.php` en tu app (hace `mergeConfigFrom` sobre esa ruta). Como mínimo:

```php
// config/esolutions_xml.php
return [
    'signing' => [
        'default_certificate_file' => null,     // null => usa el .pem demo incluido
        'default_certificate_password' => null, // requerido si usás .pfx/.p12
        'signature_uri' => 'SIGN',
        'signature_note' => 'SIGN',
    ],
    'views' => [
        'invoice' => 'esxml::invoice',
        'credit_note' => 'esxml::credit-note',
        'debit_note' => 'esxml::debit-note',
    ],
];
```

## Uso rápido

```php
/** @var \App\ESolutions\Xml\Contracts\XmlDocumentGeneratorContract $generator */
$generator = app(\App\ESolutions\Xml\Contracts\XmlDocumentGeneratorContract::class);

$result = $generator->generate(
    'invoice',      // invoice | credit_note | debit_note
    $payload,       // array — ver estructura completa en src/Xml/README.md
    null,           // ruta a certificado (.pem/.pfx/.p12); null = demo
    null,           // password del certificado (requerido en .pfx/.p12)
);

$xml = $result->getXml();
$isValid = $result->getValidation()->isOk();
$errors = $result->getValidation()->getErrors();
```

El flujo interno: **Render** (Blade → XML) → **Formateo** → **Firma** (`ds:Signature` dentro de `ext:ExtensionContent`) → **Validación** (XSD + reglas de negocio) sobre el XML ya firmado. Documentación completa del payload en [`src/Xml/README.md`](src/Xml/README.md).

## Envío a SUNAT / OSE

```php
$sender = new \App\ESolutions\SunatOSEIntegration\DocumentSender(
    provider: 'sunat',       // 'sunat' | 'nubefact'
    username: $solUser,
    password: $solPassword,
    environment: 'demo',    // 'demo' | 'production'
    company: $company,       // instancia de App\Models\User (ver nota abajo)
    documentTypeId: '01',
);

$response = $sender->sendBill([
    'filename' => 'F001-123',
    'content' => base64_encode($xmlFirmado),
]);
// $response: ['success' => bool, 'cdr' => ..., 'code' => ..., 'description' => ...]

$sender->sendSummary($params);   // resúmenes diarios / comunicación de baja
$sender->getStatus($params);     // consulta de ticket (resúmenes async)
```

`DocumentSender` resuelve el endpoint SOAP correcto según `provider` + `environment` + `documentTypeId` (detecta retenciones/percepciones automáticamente para SUNAT).

## Qué builders/templates están listos

| Tipo de documento | Builder | Template Blade | Estado |
|---|---|---|---|
| Factura / Boleta | `InvoicePayloadBuilder` | `invoice.blade.php` | ✅ Completo |
| Nota de crédito | `CreditNotePayloadBuilder` | `credit-note.blade.php` | ✅ Completo |
| Nota de débito | `DebitNotePayloadBuilder` | `debit-note.blade.php` | ✅ Completo |
| Resumen diario | `SummaryPayloadBuilder` | — | ⚠️ Builder existe, falta template |
| Comunicación de baja | `VoidedPayloadBuilder` | — | ⚠️ Builder existe, falta template |
| Guía de remisión | — | — | ❌ No implementado |

Los builders `*PayloadBuilder` (`src/Xml/Builders/Document/`) están escritos contra un modelo `Modules\Document\Models\Document` con relaciones (`company`, `customer`, `invoice`, `currencyType`, etc.) — **verificá que tu propio modelo `Document` las tenga**, o escribí tu propio builder que arme el mismo array de payload (no depende de ningún Eloquent model en particular, es solo un array).

`SaleToSunatPayloadBuilder` (`src/Xml/Builders/`) es un builder de referencia alternativo, pensado para un `Document` con esas mismas relaciones — úsalo de guía si tu esquema no calza 1:1, en vez de copiarlo literal.

## Limitaciones conocidas

- Los parsers de CDR (`SunatCdrParser`, `NubefactCdrParser`) llaman a `LogHelper::store(...)` — esa clase **no existe** en ningún paquete `esolutions/*` publicado todavía. Si vas a usar el envío SOAP, o quitás esas llamadas o implementás `App\ESolutions\Helpers\LogHelper::store()` en tu app antes de invocar `DocumentSender`.
- `DocumentSender` tipa el parámetro `$company` como `App\Models\User` — probablemente debería ser tu modelo de compañía/tenant, no `User`. Ajustalo si tu dominio no calza.
- Certificados en `src/*/Resources/*.pem` son los de **demo/homologación de SUNAT** (incluyen clave privada) — solo válidos para el ambiente `beta`, nunca para producción.

## Estructura

```
src/
├── Xml/
│   ├── Builders/          # arman el payload array desde un Document (o el modelo que uses)
│   ├── Contracts/         # XmlDocumentGeneratorContract
│   ├── Rendering/         # Blade → XML string
│   ├── Sign/               # firma XMLDSig (XMLSecLibs)
│   ├── Templates/          # invoice.blade.php, credit-note.blade.php, debit-note.blade.php
│   ├── Validation/         # XSD (XsdValidator) + reglas de negocio
│   ├── Resources/xsd/      # esquemas UBL 2.1 completos (SUNAT + estándar OASIS)
│   └── XmlServiceProvider.php
└── SunatOSEIntegration/
    ├── DocumentSender.php   # orquesta sendBill / sendSummary / getStatus
    ├── Soap/                # cliente SOAP + WS-Security
    ├── Endpoints/           # URLs SUNAT y Nubefact (beta/producción)
    ├── Parsers/             # interpretan la respuesta SOAP + extraen CDR
    └── Resources/            # certificados demo + WSDL
```

## Licencia

Propietario — Carlos Erique Gaspar.
