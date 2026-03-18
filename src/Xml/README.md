# XML SUNAT (UBL 2.1) — Generación con Blade + XSD + Firma (Laravel 5.7 / PHP 7.4)

Este módulo genera XML UBL para SUNAT usando:

- **Blade templates** (ej: `invoice.blade.php`)
- **Normalización de tipo** (`DocTypeNormalizer`)
- **Validación XSD** (`XsdValidator`)
- **Reglas de negocio** (`BusinessRulesValidator`)
- **Firma XMLDSig** (`Signed` + `SignedXml` con XMLSecLibs)

---

## Flujo de generación

1) **Render** del XML con Blade (`XmlTemplateRenderer`) según `type` (invoice, credit_note, etc.)
2) **Formateo** del XML antes de firmar (`XmlFormatter::format`) *(solo antes del firmado)*
3) **Firmado** (inserta `ds:Signature` dentro de `ext:ExtensionContent`)
4) **Validación final** XSD + Reglas sobre el XML final (firmado)

> Importante: **no reformatear** el XML luego de firmar, porque cambia el contenido firmado y puede invalidar la firma.

---

## Uso desde controlador (ejemplo)

```php
/** @var \App\ESolutions\Xml\Contracts\XmlDocumentGeneratorContract $gen */
$gen = app(\App\ESolutions\Xml\Contracts\XmlDocumentGeneratorContract::class);

$result = $gen->generate(
  'invoice',      // type: invoice|credit_note|debit_note|...
  $payload,       // payload completo (ver abajo)
  $certPath,      // opcional (pem/pfx/p12). null => demo certificate.pem
  $certPassword,  // opcional (requerido en pfx/p12)
  true            // sign
);

$xml = $result->getXml();                 // XML final firmado (o no)
$ok  = $result->getValidation()->isOk();  // true/false
$errs = $result->getValidation()->getErrors();
```

---

## Payload — Estructura general

```php
$payload = [
  'doc' => [ ... ],
  'currency' => 'PEN',

  'ublExtensionsXml' => '',

  'notes' => [ ... ],
  'relatedDocuments' => [ ... ],

  'signature' => [ ... ],
  'supplier' => [ ... ],
  'customer' => [ ... ],

  'delivery' => null,
  'detraction' => null,
  'paymentTerms' => null,
  'installments' => [],

  'retention' => null,

  'prepaidPayments' => [],
  'globalAllowances' => [],

  'taxTotal' => [ ... ],
  'monetaryTotal' => [ ... ],

  'lines' => [ ... ],
];
```

---

# Campos por sección (documentación completa)

> Esta documentación corresponde a los campos **usados por tu template actual** `invoice.blade.php`
> y por el flujo de firmado/validación.

## 1) doc — Cabecera

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `id` | string | ✅ | Número doc: `F001-123`, `B001-55` |
| `issueDate` | string | ✅ | `YYYY-MM-DD` |
| `issueTime` | string | ✅ | `HH:MM:SS` |
| `dueDate` | string\|null | opc | Vencimiento. Si no aplica: `-` o `null` |
| `invoiceTypeCode` | string | ✅ | Tipo doc (cat 01): `01` factura, `03` boleta |
| `operationTypeId` | string | ✅ | Tipo operación (cat 51), ej: `0101` |
| `retentionEnabled` | string\|int | opc | `'1'` imprime bloque retención, `'0'` no |

Ejemplo:

```php
'doc' => [
  'id' => 'F001-123',
  'issueDate' => '2025-12-13',
  'issueTime' => '16:10:00',
  'dueDate' => '-',
  'invoiceTypeCode' => '01',
  'operationTypeId' => '0101',
  'retentionEnabled' => '0',
],
```

---

## 2) currency

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `currency` | string | ✅ | `PEN`, `USD`, etc. |

---

## 3) ublExtensionsXml (opcional)

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `ublExtensionsXml` | string | opc | String XML a inyectar dentro de `ext:UBLExtensions`. Si no envías nada, igual debe existir `ext:UBLExtension/ext:ExtensionContent` para la firma. |

---

## 4) signature — Metadata UBL para firma (desde payload)

> Esto NO es la firma criptográfica. Sirve para completar `cac:Signature`:
> `cbc:ID`, `cbc:Note`, `cbc:URI` (consistente con `#<signatureId>`).

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `signatureUri` | string | ✅ | Recomendado `#SIGN` |
| `facturerId` | string | ✅ | Se usa como `cbc:Note` |
| `signatureId` | string | opc | Si lo envías, se usa directo |
| `note` | string | opc | Alternativa a `facturerId` |

Ejemplo:

```php
'signature' => [
  'signatureUri' => '#SIGN',
  'facturerId' => 'SIGN',
],
```

---

## 5) supplier — Emisor

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `documentType` | string | ✅ | Tipo doc (cat 06). Emisor SUNAT: RUC = `6` |
| `documentNumber` | string | ✅ | RUC |
| `commercialName` | string | opc | Nombre comercial (puede ser vacío) |
| `legalName` | string | ✅ | Razón social |
| `address` | array | ✅ | Dirección fiscal |

### supplier.address

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `addressTypeCode` | string | opc | Si no tienes: `-` o `0000` |
| `urbanization` | string | opc | Urbanización |
| `province` | string | ✅ | Provincia |
| `department` | string | ✅ | Departamento |
| `ubigeo` | string | ✅ | Ubigeo (6 dígitos) |
| `district` | string | ✅ | Distrito |
| `line` | string | ✅ | Dirección completa |
| `countryCode` | string | ✅ | `PE` |

---

## 6) customer — Receptor

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `documentType` | string | ✅ | DNI=`1`, RUC=`6`, etc. |
| `documentNumber` | string | ✅ | Número |
| `legalName` | string | ✅ | Nombre / Razón social |
| `address` | array | opc | Se imprime solo si `line` y `ubigeo != '-'` |

### customer.address
Mismos campos que `supplier.address`.

---

## 7) notes — Leyendas

Cada item:

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `code` | string | ✅ | Código (ej: `1000`) |
| `text` | string | ✅ | Texto |

Ej:

```php
'notes' => [
  ['code' => '1000', 'text' => 'SON ... SOLES'],
],
```

---

## 8) relatedDocuments — Documentos relacionados

Cada item:

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `ind` | string | ✅ | `1` guía, `2` anticipo, `3` orden, `99` adicional |
| `docType` | string | ✅ | Catálogo según bloque (01 o 12) |
| `docNumber` | string | ✅ | Número doc |

Extras para anticipo (`ind=2` y `docType` en `02/03`):

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `schemeId` | string | opc | schemeID en `cbc:ID` |
| `prepaidId` | string | opc | `cbc:DocumentStatusCode` |
| `issuerDocType` | string | opc | Tipo doc emisor anticipo |
| `issuerDocNumber` | string | opc | Número doc emisor anticipo |

---

## 9) delivery (opcional)

Se imprime solo si:
- `delivery.address.line` no vacío
- `delivery.address.ubigeo != '-'`

```php
'delivery' => [
  'address' => [
    'line' => 'DIRECCION ENTREGA',
    'ubigeo' => '150101',
    'countryCode' => 'PE',
  ],
],
```

---

## 10) detraction (opcional)

Se imprime solo si `bankAccount != '-'`.

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `bankAccount` | string | ✅ | Cuenta detracción |
| `paymentMeansCode` | string | ✅ | Catálogo 59 |
| `detractionCode` | string | ✅ | Catálogo 54 |
| `percent` | string\|numeric | ✅ | Porcentaje |
| `amount` | string\|numeric | ✅ | Monto |
| `currency` | string | ✅ | Moneda |

---

## 11) paymentTerms + installments

### paymentTerms (opcional)

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `id` | string | opc | Default `FormaPago` |
| `paymentMeansId` | string | ✅ | `Contado` / `Credito` |
| `amount` | string\|numeric | opc | Monto |
| `currency` | string | opc | Moneda |

### installments (cuotas)

Cada item:

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `id` | string | opc | Default `FormaPago` |
| `paymentMeansId` | string | ✅ | Identificador |
| `amount` | string\|numeric | ✅ | Monto |
| `currency` | string | ✅ | Moneda |
| `dueDate` | string | opc | `YYYY-MM-DD` |

---

## 12) retention (opcional)

Se imprime si `(string)(doc.retentionEnabled) === '1'`.

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `chargeIndicator` | bool | ✅ | true/false |
| `reasonCode` | string | ✅ | Catálogo 53 |
| `multiplierFactorNumeric` | string\|numeric | ✅ | Factor |
| `amount` | string\|numeric | ✅ | Monto |
| `baseAmount` | string\|numeric | ✅ | Base |
| `currency` | string | opc | Moneda |

---

## 13) prepaidPayments (opcional)

Cada item:

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `id` | string | ✅ | Identificador |
| `paidAmount` | string\|numeric | ✅ | Monto |
| `currency` | string | ✅ | Moneda |

---

## 14) globalAllowances (descuentos/cargos globales)

Cada item (se imprime si `reasonCode != '-'`):

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `chargeIndicator` | bool | ✅ | true=cargo, false=descuento |
| `reasonCode` | string | ✅ | Catálogo 53 |
| `multiplierFactorNumeric` | string\|numeric | ✅ | Factor |
| `amount` | string\|numeric | ✅ | Monto |
| `baseAmount` | string\|numeric | ✅ | Base |
| `currency` | string | opc | Moneda |

---

## 15) taxTotal — Impuestos cabecera

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `taxAmount` | string\|numeric | ✅ | Total impuestos |
| `currency` | string | ✅ | Moneda |
| `subtotals` | array[] | ✅ | Subtotales por tributo |

### taxTotal.subtotals[]

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `schemeId` | string | ✅ | `1000` IGV, `2000` ISC, `9999` OTROS, `7152` ICBPER |
| `schemeName` | string | ✅ | Nombre (IGV/ISC/...) |
| `taxTypeCode` | string | ✅ | VAT/EXC/OTH |
| `taxableAmount` | string\|numeric\|null | cond | Requerido si `schemeId != 7152` |
| `taxAmount` | string\|numeric | ✅ | Monto |

---

## 16) monetaryTotal — Totales monetarios

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `lineExtensionAmount` | string\|numeric | ✅ | Subtotal sin impuestos |
| `taxInclusiveAmount` | string\|numeric\|null | opc | Total con impuestos |
| `allowanceTotalAmount` | string\|numeric | ✅ | Total descuentos |
| `chargeTotalAmount` | string\|numeric | ✅ | Total cargos |
| `prepaidAmount` | string\|numeric\|null | opc | Total anticipos |
| `payableAmount` | string\|numeric | ✅ | Total a pagar |
| `currency` | string | ✅ | Moneda |

---

## 17) lines — Detalle

Cada línea:

| Campo | Tipo | Req | Descripción |
|---|---|---:|---|
| `id` | string | ✅ | Correlativo |
| `unitCode` | string | ✅ | Unidad (ej: `NIU`) |
| `quantity` | string\|numeric | ✅ | Cantidad |
| `currency` | string | opc | Moneda (si no, usa la global) |
| `lineExtensionAmount` | string\|numeric | ✅ | Valor venta línea (sin impuestos) |
| `priceAmount01` | string\|numeric | opc | Precio tipo 01 (ojo con XSD/orden) |
| `priceAmount02` | string\|numeric | opc | Precio tipo 02 (ojo con XSD/orden) |
| `allowances` | array[] | opc | Descuentos/cargos línea |
| `taxTotal` | array | ✅ | Impuestos línea |
| `item` | array | ✅ | Item |
| `price` | array | ✅ | Precio unitario |
| `cargoTransport` | array\|null | opc | Bloque transporte |

### lines[].allowances[] (solo reasonCode 00,01,47,48 se imprimen en template)

| Campo | Tipo | Req |
|---|---|---:|
| `chargeIndicator` | bool | ✅ |
| `reasonCode` | string | ✅ |
| `multiplierFactorNumeric` | string\|numeric | ✅ |
| `amount` | string\|numeric | ✅ |
| `baseAmount` | string\|numeric | ✅ |
| `currency` | string | opc |

### lines[].taxTotal

| Campo | Tipo | Req |
|---|---|---:|
| `currency` | string | ✅ |
| `taxAmount` | string\|numeric | ✅ |
| `subtotals` | array[] | ✅ |

Subtotals por línea (extras según template):
- `percent` (si no es ICBPER)
- `exemptionReasonCode` (cat 07)
- `tierRange` (ISC)
- `baseUnitMeasure` + `perUnitAmount` (ICBPER)

### lines[].item

| Campo | Tipo | Req |
|---|---|---:|
| `description` | string | ✅ |
| `sellersItemId` | string | ✅ |
| `commodityCode` | string | opc |
| `properties` | array[] | opc |

### lines[].price

| Campo | Tipo | Req |
|---|---|---:|
| `priceAmount` | string\|numeric | ✅ |

---

# Firmado — Certificados

`Signed::xmlSigned($xml, $certificateFile, $certificatePassword, $signatureMeta)`:

- Si no se envía certificado => usa demo: `app/ESolutions/Xml/Sign/Resources/certificate.pem`
- `.pem` debe incluir **PRIVATE KEY**
- `.pfx/.p12` requiere password

Además toma metadata de `payload.signature` para ajustar `cac:Signature` (ID/Note/URI).

---

# Validación

- **XSD**: `DOMDocument::schemaValidate($xsdPath)`
- **Reglas negocio**: `BusinessRulesValidator` (ej: `SeriesFormatRule`)

---

## Recomendación

En el controlador **no construyas el payload a mano**. Crea un Builder:

- `SaleToSunatPayloadBuilder::build($document): array`

para garantizar consistencia entre factura/boleta/notas.
