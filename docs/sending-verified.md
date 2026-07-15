# Envíos verificados en homologación (beta/OSE)

Pruebas end-to-end **en vivo** contra el homologador (SUNAT beta / Nubefact
gre-test), con el certificado demo estándar (RUC **10417844398**, usuario
`10417844398MODDATOS` / `moddatos`). Cada flujo: generar → firmar → enviar →
(ticket →) leer CDR/respuesta.

| Tipo | Canal | Resultado | Nota |
|---|---|---|---|
| Factura / Boleta (01/03) | SOAP sendBill | ✅ aceptado | F001-2 aceptada (SUNAT beta + Nubefact OSE) |
| Guía remitente (09) | GRE REST | ✅ **aceptado** (CDR) | ticket → status aceptado |
| Guía transportista (31) | GRE REST | ✅ send+ticket+parse | rechazo 2560: el RUC de prueba no está autorizado como transportista (dato del homologador, no del paquete) |
| Resumen diario (RC) | SOAP ticket | ✅ **aceptado** (CDR) | el `cbc:ID` del RC debe usar la fecha de generación y coincidir con el nombre de archivo |
| Comunicación de baja (RA) | SOAP ticket | ✅ **aceptado** (CDR) | — |
| Retención (20) | SOAP sendBill | ✅ **aceptado** (CDR) | requiere `documents[].payments` (número de pago) — sin él, error 2733 |
| Percepción (40) | SOAP sendBill | ✅ **aceptado** (CDR) | requiere `documents[].payments` (número de cobro) — sin él, error 2697 |

## Hallazgos incorporados a los fixtures

Estos casos pasaban XSD + reglas cliente pero SUNAT los rechazaba; se corrigieron
en los fixtures (internos y español) para que sean válidos de producción:

1. **Retención/percepción** necesitan al menos un **pago** por documento
   (`documents[].payments` / español `documentos[].pagos`), o SUNAT devuelve
   2733/2697. El template ya lo soporta; faltaba el dato.
2. **Resumen (RC)**: el `identifier` (`cbc:ID`) debe ser `RC-{fechaGeneracion}-N`
   y coincidir con la fecha del nombre de archivo, o SUNAT devuelve 2220.

## Cómo reproducir

Con el paquete y un tenant demo, para cada fixture: `generate($type, $payload)`
→ `DocumentSender`/`GreRestClient` con `SenderConfig` demo (`{RUC}MODDATOS` /
`moddatos`) → `sendBill`/`sendSummary`/`sendDespatch` → `getStatus(ticket)`.
El nombre de archivo es `RUC-TIPO-SERIE-NUMERO` (RC/RA: `RUC-RC-YYYYMMDD-N`).
