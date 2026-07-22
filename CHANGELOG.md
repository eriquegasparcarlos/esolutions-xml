# Changelog

## v2.4.0 — 2026-07-22

### Nuevo — Liquidación de compra (04)

Se agrega el tipo **04 (liquidación de compra)**, aceptado en homologación SUNAT
beta (CDR aceptada, `L001-2/3`). La empresa (con RUC) compra a un proveedor sin
RUC (persona natural: DNI u otro doc del catálogo 06) y emite el comprobante.

Es un **UBL `SelfBilledInvoice`** (auto-facturación), no un `Invoice`:

- Plantilla nueva `purchase-settlement.blade.php` (XSD `UBL-SelfBilledInvoice-2.1`).
- **Partes invertidas**: `cac:AccountingCustomerParty` = la empresa emisora;
  `cac:AccountingSupplierParty` = el proveedor. El XSD ordena Customer **antes**
  que Supplier.
- **`cac:DeliveryTerms`** con el lugar de la operación (dónde se adquirieron los
  bienes).
- Envío por `sendBill` (el resolver reconoce la raíz `SelfBilledInvoice`).
- Nuevo tipo normalizado `purchase_settlement` (alias `04`, `liquidacion`,
  `liquidacion_compra`, `self_billed_invoice`), esquema de payload propio,
  cobertura en la API español (`generateFromEs('04', …)`), y fixtures interno +
  español.

**Hallazgos que solo el envío en vivo destapó** (incorporados al fixture):

| Código | Causa | Corrección |
|---|---|---|
| **0151** (nombre ZIP incorrecto) | serie `E001` + `tipoOperacion 0101` | serie **`L001`** + **`operation_type_id 0501`** ("Compra interna", cat. 51 `liquidacion=1`) |
| **2457** (tipo de domicilio del vendedor) | `AddressTypeCode` del proveedor = `0000` (código de establecimiento del emisor, no del vendedor) | usar un valor del **catálogo 60** (p. ej. `01`) — `0000` es solo para el emisor |
| **2456** (falta tipo de domicilio) | omitir el `AddressTypeCode` del proveedor | es **obligatorio**: emitir `01` |
| **4332/4337** (UNSPSC) | código de producto genérico / inexistente | usar un UNSPSC real de catálogo 25 a nivel de clase (p. ej. `50192601`) |

Queda una observación **4312 nivel INFO** (no rechaza): SUNAT emite una nota
informativa sobre el `PayableAmount` en el LC gravado; el comprobante se acepta.

### Reglas

- `OwnRules` (3294/3305, código de producto) ahora también aplica a
  `SelfBilledInvoice` (comparte TaxTotal/LegalMonetaryTotal/InvoiceLine).
- `SunatRulesValidator`: `04` → `liquidacion` (ruleset propio, vacío por ahora —
  SUNAT no publica XSL de LC; se poblará desde rechazos reales).

## v2.2.0 — 2026-07-16

### Fix — notas de crédito/débito rechazadas por SUNAT (2135)

`cac:DiscrepancyResponse/cbc:Description` se emitía con un `-` cuando el payload
traía `note_description` en null. La regla oficial (`ValidaExprRegNC-2.0.1.xsl`,
regexp `^(?!\s*$)[^\s].{1,499}$`) exige entre **2 y 500** caracteres, así que ese
guion de un solo carácter producía un rechazo 2135 — y el paquete lo generaba en
silencio, sin avisar al consumidor.

- Las plantillas `credit-note` y `debit-note` ya no aplican ese fallback.
- `document.note_description` pasa de `present` a `non_empty` en los esquemas de
  `credit_note` y `debit_note`: la generación falla temprano con un mensaje claro
  en vez de producir un XML que SUNAT rechaza.

**Migración:** si tu consumidor podía enviar `note_description` en null o vacío,
dale un valor — lo natural es el nombre del tipo de nota del catálogo 09/10
(p. ej. "Anulación de la operación"). Si no, `generate()` devolverá
`GenerationResult::failed()` en lugar de un XML inválido.

### PayloadValidator — nueva sección `non_empty`

Los esquemas aceptan una tercera sección además de `required` y `present`:

| Sección | Exige |
|---|---|
| `present` | que la clave exista (null permitido) |
| `required` | que exista y no sea null |
| `non_empty` | que exista y no sea null, cadena vacía/solo espacios, ni array vacío |

Compatible hacia atrás: un esquema sin `non_empty` se comporta igual que antes.

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
