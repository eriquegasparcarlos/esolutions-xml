# Payload: voided (Comunicación de baja RA)

Contrato de entrada para `generate('RA', $payload)` (o `'voided'`).
Plantilla: `src/Templates/voided.blade.php` · Esquema: `src/Payload/Schemas/voided.php`.
UBL **2.0** / CustomizationID **1.0** — payload propio.
Envío **asíncrono** (igual que summary): `sendSummary()` → ticket → `getStatus()`.

Aplica a facturas (01) y sus NC/ND. Las **boletas se anulan vía Resumen diario
con `status_id = '3'`**, no con RA.

## Cabecera (todas Req)

| Clave | Tipo | Nodo UBL |
|---|---|---|
| `identifier` | `RA-YYYYMMDD-###` | `cbc:ID` |
| `date_of_reference` | `Y-m-d` (emisión de los comprobantes dados de baja) | `cbc:ReferenceDate` |
| `date_of_issue` | `Y-m-d` (generación de la comunicación) | `cbc:IssueDate` |
| `signature_uri` / `signature_note` | string | `cac:Signature` |
| `company_number` / `company_name` | RUC / razón social | `cac:AccountingSupplierParty` |

## Líneas — `documents[]`

| Clave | Tipo | Nodo UBL |
|---|---|---|
| `document_type_id` | `'01'` \| `'07'` \| `'08'` | `cbc:DocumentTypeCode` |
| `series` | string | `sac:DocumentSerialID` |
| `number` | string\|int | `sac:DocumentNumberID` |
| `description` | motivo de la baja (Pres) | `sac:VoidReasonDescription` |

Referencia de mapeo: `Modules/Voided/app/Services/VoidedXmlPayloadBuilder.php` en intipos13.
