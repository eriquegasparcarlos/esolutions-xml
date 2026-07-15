# Changelog

## v2.0.0 — 2026-07-15

Reestructuración completa del paquete como librería independiente de cualquier proyecto consumidor. Inspirada en Greenter (capas modelo/xml/ws), el Facturalo legacy (envío/CDR probado en producción) y el flujo PSE de xml.apiperu.dev.

### Breaking changes (guía de migración v1 → v2)

| v1 | v2 |
|---|---|
| Namespace `App\ESolutions\...` | `ESolutions\Xml\...` (PSR-4 sobre `src/`) |
| `App\ESolutions\Xml\Contracts\XmlDocumentGeneratorContract` | `ESolutions\Xml\Contracts\XmlDocumentGeneratorContract` |
| `App\ESolutions\Xml\Support\UblTextSanitizer` | `ESolutions\Xml\Support\UblTextSanitizer` |
| Registro manual del provider | Auto-discovery (`extra.laravel.providers`) — puede quitarse de `bootstrap/providers.php` |
| Config obligatoria en la app (`mergeConfigFrom(config_path(...))`) | Defaults completos en el paquete; la app solo sobreescribe (`vendor:publish --tag=esolutions-xml-config`). Ojo: el merge es superficial — definir una sección la reemplaza completa |
| `paths.xsd_base`/`templates_path` apuntando a `vendor/...` | `null` => defaults internos del paquete; `schemas.*` ahora incluye la versión (`2.1/maindoc/UBL-Invoice-2.1.xsd`) |
| `DocumentSender(provider, user, pass, env, App\Models\User $company, docType)` | `new DocumentSender(SenderConfig $config)` — sin Eloquent; credenciales/endpoint por value object |
| `sendBill(array $params)` con zip armado por el consumidor | `sendBill(string $filename, string $signedXml)` — zip interno (`ZipFly`); retorna `BillResult` tipado (antes array) |
| Parsers CDR con `Redis::hget('sunat:codes',...)` y `LogHelper` (inexistente) | `ErrorCodeCatalogInterface` (+`FileErrorCodeCatalog` con CodeErrors.xml empaquetado); LogHelper eliminado |
| `credit-note`/`debit-note` con variables sueltas (`$doc`, `$supplier`...) | Convención unificada: un solo array `$document` en las 8 plantillas |
| `Xml\Builders\*PayloadBuilder` acoplados a `Modules\Document\Models\Document` | **Eliminados** — el mapeo modelo→payload vive en el consumidor (docs/payloads/*) |
| `'03'` normalizaba a `'boleta'` (sin vista/XSD) | `'03'` → `'invoice'`; nuevos: `09/20/40/RC/RA/RR` |

### Nuevo

- **PayloadValidator**: valida el contrato de entrada antes del render; errores `[PAYLOAD]` claros vía `GenerationResult::failed()`.
- **Plantillas nuevas**: `summary` (RC), `voided` (RA), `despatch` (09), `retention` (20), `perception` (40) + XSD UBL 2.0 empaquetados.
- **NC/ND reescritas**: `DiscrepancyResponse` (cat. 09/10) + `BillingReference`, orden de elementos verificado contra XSD (en `*NoteLine` el `TaxTotal` va antes de `AllowanceCharge`; en ND header el `AllowanceCharge` antes de `PaymentTerms`).
- **Pipeline de envío**: `DocumentSender::send()` (resuelve sendBill/sendSummary por el XML), results tipados con `isAccepted()/isPending()/isRejected()`, `TicketService`, `ConsultCdrService` (flujo 1033), `FilenameBuilder`, `XmlTypeResolver`, `ZipFly` en memoria.
- **`GreRestClient`** (stub documentado): API REST GRE 2022 — implementación en v2.1.
- `composer.json` declara `robrichards/xmlseclibs` y las extensiones requeridas (antes faltaban).

### Corregido

- Deprecation PHP 8.4 en `SignedXml::getPublicKey()` (nullable implícito).
- `SeriesFormatRule`: solo aplica a 01/03/07/08, lee `document.affected_document.document_type_id` y ya no hace `Log::info` del payload completo.
- Certificado demo resuelto relativo al paquete (no `app_path()`).

Verificado contra SUNAT beta real: boleta aceptada con CDR (sendBill), resumen diario RC aceptado vía ticket (sendSummary + getStatus), y XML byte-idéntico a v1 para facturas/boletas existentes.

## v1.0.0 — 2026-07-14

Versión inicial (ex `esolutions/sunat`): generación de invoice UBL 2.1 con firma XMLDSig y validación XSD, más la capa de envío SOAP heredada.
