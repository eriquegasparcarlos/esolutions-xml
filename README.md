# esolutions/xml

Generación, firma, validación y envío SUNAT/OSE de comprobantes electrónicos peruanos (XML UBL) para proyectos Laravel. **Independiente del proyecto consumidor**: la entrada es un array payload documentado y la configuración entra por objetos propios — sin dependencias a modelos Eloquent externos.

## Tipos de documento soportados

| Documento | Código | Plantilla | UBL | Envío |
|---|---|---|---|---|
| Factura / Boleta | 01 / 03 | `invoice` | 2.1 | `sendBill` (síncrono, CDR inmediato) |
| Nota de crédito | 07 | `credit-note` | 2.1 | `sendBill` |
| Nota de débito | 08 | `debit-note` | 2.1 | `sendBill` |
| Guía de remisión — remitente | 09 | `despatch` | 2.1 | **REST GRE 2022** (`GreRestClient`) |
| Guía de remisión — transportista | 31 | `despatch-carrier` | 2.1 | **REST GRE 2022** |
| Retención | 20 | `retention` | 2.0 | `sendBill` (endpoint propio) |
| Percepción | 40 | `perception` | 2.0 | `sendBill` (endpoint propio) |
| Resumen diario | RC | `summary` | 2.0 | `sendSummary` → ticket → `getStatus` |
| Comunicación de baja | RA | `voided` | 2.0 | `sendSummary` → ticket → `getStatus` |

**Envíos verificados en homologación** (SUNAT beta / Nubefact): factura/boleta, guía remitente (todas las variantes de motivo + múltiples conductores/vehículos), guía transportista (pipeline), exportación con DAM, resumen, baja, retención y percepción — todos aceptados con CDR. Ver [`docs/sending-verified.md`](docs/sending-verified.md).

## Dos entradas: contrato interno o API español

```php
use ESolutions\Xml\Contracts\XmlDocumentGeneratorContract;

$gen = app(XmlDocumentGeneratorContract::class);

// 1) Contrato interno (todos los tipos)
$res = $gen->generate('01', $payload);

// 2) API en español, estilo Greenter/camelCase (todos los tipos)
$res = $gen->generateFromEs('01', $payloadEs);   // tipoDoc, serie, client{}, details[]...

if ($res->isOk()) {
    $signedXml = $res->xml;
} else {
    $errores = $res->validation->errors;   // [PAYLOAD] / [XSD] / reglas
}
```

El payload interno se documenta por tipo en [`docs/payloads/`](docs/payloads/); el camelCase del API español, en [`docs/spanish-api.md`](docs/spanish-api.md). El mapeo desde tus modelos vive en **tu** proyecto (patrón anti-corruption).

## Validación (XSD + reglas SUNAT + reconciliaciones)

- **XSD** oficial UBL 2.0/2.1.
- **Reglas SUNAT del cliente** (`SunatRulesValidator`): extraídas del XSLT del SFS de SUNAT (motor de primitivas + catálogos), por tipo de documento.
- **`OwnRules`**: reconciliaciones server-side que el XSLT no trae (3294 sumatoria de impuestos, 3305 total precio venta) y reglas **fechadas** (ver abajo).
- **Catálogo de códigos**: `error-codes.php` (2077 códigos oficiales del Excel de SUNAT) superpuesto sobre `CatalogoErrores.xml`.

## Enviar a SUNAT / OSE

```php
use ESolutions\Xml\Sending\{DocumentSender, SenderConfig, FilenameBuilder};

$config = SenderConfig::fromArray([
    'provider' => 'sunat',            // 'sunat' | 'nubefact'
    'environment' => 'demo',          // 'demo' (beta) | 'production'
    'username' => '20123456789MODDATOS',
    'password' => 'moddatos',
    'gre_client_id' => '...',         // solo GRE (guías); en demo usa las beta públicas
    'gre_client_secret' => '...',
]);

$sender = new DocumentSender($config);
$result = $sender->send($filename, $signedXml);   // resuelve sendBill vs sendSummary

if ($result->isAccepted()) {
    $cdrXml = $result->getCdrXml();
} elseif ($result->isRejected()) {
    $motivo = $result->getMessage();
}
```

- **Resúmenes/bajas** (async): `sendSummary()` → ticket → `getStatus($ticket)` (`isInProcess()` = 98).
- **Guías (GRE 2022)**: `GreRestClient::fromSenderConfig($config)->sendDespatch($filename, $xml)` → ticket → `getStatus()`. Ver [`docs/gre.md`](docs/gre.md).
- **Reconsulta de CDR** (caso 1033): `ConsultCdrService::getStatusCdr(...)`.

### Origen del error (conexión / sistema / SUNAT)

Los results exponen `errorSource()` para decidir la acción sin combinar banderas:

```php
$result->errorSource();
// 'conexion' → no llegó a SUNAT       → REINTENTAR
// 'sunat'    → respondió y rechazó     → CORREGIR el comprobante
// 'sistema'  → llegó pero falló parseo → REVISAR
// null       → aceptado / en proceso
```

## Bucle de mejora de validaciones (feedback)

`RejectionAnalyzer` + `RejectionSink` (JSONL o Eloquent propio) capturan los rechazos **reales** de SUNAT y marcan si el validador local los habría atrapado — los que no, son los huecos a agregar a `OwnRules`. Ver [`docs/feedback-loop.md`](docs/feedback-loop.md).

## Cambios de reglas SUNAT fechados (date-gating)

SUNAT publica cambios con **fecha de vigencia** y valida cada comprobante según su **fecha de emisión**. El paquete convive ambas eras en una sola versión: cada regla/campo nuevo se aplica solo a documentos con `fechaEmision >= vigencia`. Las fechas son **configurables** (`config('esolutions_xml.rule_dates')`) por si SUNAT posterga. Los cambios con vigencia 2026-08-01 (código de producto obligatorio, tipo 13 de ND, gratuitas desagregadas en el resumen, etc.) ya están implementados. Ver [`docs/sunat-changes-2026-08.md`](docs/sunat-changes-2026-08.md).

La fuente autoritativa es el Excel oficial de reglas de SUNAT; [`tools/extract_from_excel.php`](tools/extract_from_excel.php) extrae los códigos de retorno y hace inventario de reglas por documento — re-correr en cada Excel nuevo + `git diff`.

## Tests

Suite PHPUnit + Orchestra Testbench que recorre los fixtures JSON (que también son ejemplos de payload) y valida generación + XSD + reglas por cada tipo:

```bash
composer install
composer test        # o vendor/bin/phpunit
```

Ver [`docs/testing.md`](docs/testing.md). Los fixtures viven en `tests/fixtures/payloads/` (interno) y `tests/fixtures/payloads-es/` (español).

## Firma

XMLDSig enveloped (RSA-SHA1 + C14N) en el `<ext:ExtensionContent/>` vacío del template. Certificado por `config('esolutions_xml.signing')`; sin configurar usa el **demo de SUNAT beta** (RUC 10417844398, solo homologación). Los `.pfx/.p12` se convierten a PEM al vuelo.

## Índice de documentación

- [`docs/spanish-api.md`](docs/spanish-api.md) — API en español (camelCase) + roadmap de cobertura.
- [`docs/gre.md`](docs/gre.md) — Guías de remisión REST (GRE 2022).
- [`docs/sending-verified.md`](docs/sending-verified.md) — matriz de envíos probados en homologación.
- [`docs/feedback-loop.md`](docs/feedback-loop.md) — captura de rechazos → mejora de reglas.
- [`docs/sunat-changes-2026-08.md`](docs/sunat-changes-2026-08.md) — cambios fechados + date-gating.
- [`docs/testing.md`](docs/testing.md) — suite PHPUnit + fixtures.
- [`docs/payloads/`](docs/payloads/) — contrato de payload interno por tipo.

## Requisitos e instalación

```bash
composer require esolutions/xml
php artisan vendor:publish --tag=esolutions-xml-config   # opcional
```

PHP `^8.2`, Laravel `^11|^12|^13`, extensiones `dom`, `libxml`, `openssl`, `soap`, `zip`. Provider por auto-discovery.

## Limitaciones conocidas

- **Guía transportista (31)** en homologación: el pipeline (envío/ticket/CDR) está probado, pero la aceptación requiere un RUC registrado como transportista con autorización MTC (dato real, no fabricable en beta demo).
- **Importación (08)** de guía: estructura DAM completa; la aceptación requiere un establecimiento aduanero de tercero registrado en SUNAT.
- Los certificados `.pem` empaquetados son los **demo públicos de SUNAT beta** — nunca en producción.
- El sender nunca lanza excepciones de conexión (retorna `errorSource() = 'conexion'`); el consumidor decide el reintento (no hay cola integrada).
