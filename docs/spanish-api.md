# API en español (payload camelCase) — spec y roadmap

El paquete tiene **dos entradas** equivalentes:

| Entrada | Formato de payload | Tipos | Estado |
|---|---|---|---|
| `generate($type, $payload)` | contrato interno (inglés: `date_of_issue`, `total_value`…) | **todos** | estable |
| `generateFromEs($type, $payloadEs)` | **API español** (camelCase estilo Greenter: `tipoDoc`, `serie`, `client`…) | ver checklist ↓ | **en construcción** |

`generateFromEs()` traduce el payload español al contrato interno con
[`EsPayloadMapper`](../src/Payload/EsPayloadMapper.php) y luego llama a `generate()`.
Objetivo: que el API en español cubra **todos los tipos y todos los campos**.

## Convención de nombres (camelCase, estilo Greenter/tefacturo)

- Cabecera: `tipoDoc`, `serie`, `correlativo`, `fechaEmision`, `horaEmision`,
  `tipoMoneda`, `formaPago` (`Contado|Credito`), `tipoOperacion`, `fechaVencimiento`.
- Emisor: `company: { ruc, razonSocial, nombreComercial, address: { ubigeo,
  departamento, provincia, distrito, direccion, codLocal, codigoPais } }`.
- Cliente: `client: { tipoDoc, numDoc, rznSocial, address: { ubigeo, direccion } }`.
- Líneas: `details: [{ descripcion, cantidad, unidad, mtoValorUnitario, tipAfeIgv,
  porcentajeIgv, isc, porcentajeIsc, icbper, factorIcbper, codProducto,
  codProductoSunat, gratuito }]`.
- Totales (opcional; si faltan se derivan de las líneas): `totales: { gravado,
  exonerado, inafecto, exportacion, gratuito, igv, isc, icbper, descuentos,
  cargos, anticipos, total }`.
- Estructuras: `descuentos[]`, `cargos[]`, `cuotas[]`, `detraccion{}`,
  `retencion{}`, `percepcion{}`, `anticipos[]`, `leyendas[]`, `documentoAfectado{}`
  (NC/ND), `codMotivo`/`desMotivo` (NC/ND).

Aceptar **alias** donde ayude (`tipoDoc|tipoDocumento`, `client|cliente`,
`details|items`, `numDoc|numero`, etc.) para tolerar variantes del ecosistema.

## Cómo se verifica que "cubre todo" (oráculo = fixtures)

Los fixtures internos (`tests/fixtures/payloads/**`) ya pasan XSD + reglas. Por cada
uno se crea su **gemelo en español** en `tests/fixtures/payloads-es/**` y el test
`EsPayloadFixturesTest`:

1. carga el gemelo español,
2. lo pasa por `generateFromEs($type, $payloadEs)`,
3. exige que el XML resultante **pase XSD + reglas** (igual que el interno).

Si el gemelo español de un caso genera el mismo resultado válido, queda **probado**
que el mapper cubre todos los campos de ese caso. Agregar cobertura = agregar el
gemelo español + completar el mapper hasta que el test pase.

## Checklist de cobertura del mapper

Marca un tipo cuando su gemelo español pase XSD + reglas.

- [ ] **01 Factura** — falta: anticipos, cargos, percepción a nivel comprobante
- [ ] **03 Boleta** — depende de 01
- [ ] **07 Nota de crédito** — doc afectado + tipos de nota (cat. 09)
- [ ] **08 Nota de débito** — doc afectado + tipos de nota (cat. 10)
- [ ] **09 Guía remitente** — `motivoTraslado`, `pesoTotal`, `modalidadTraslado`,
      `conductor{}`, `transportista{}`, `puntoPartida{}`, `puntoLlegada{}`,
      `destinatario{}`, establecimientos anexos, M1L, traslado total DAM
- [ ] **31 Guía transportista** — transportista emisor, remitente, vehículos
      principal+secundarios (placa/TUC), conductores principal+secundarios
- [ ] **RC Resumen diario** — `fechaReferencia`, `documentos[]` con estado y totales
- [ ] **RA Comunicación de baja** — `documentos[]` con serie/número/motivo
- [ ] **20 Retención** — `proveedor{}`, `tasa`, `documentos[]` (importe, retención)
- [ ] **40 Percepción** — `cliente{}`, `tasa`, `documentos[]` (importe, percepción)

## Guía para agregar/completar un tipo

1. Mira el schema interno del tipo en `src/Payload/Schemas/<tipo>.php` (required + present).
2. En `EsPayloadMapper`, agrega la rama que produce ese `document` desde camelCase.
3. Crea el gemelo español del/los fixture(s) de ese tipo en `tests/fixtures/payloads-es/`.
4. Corre `composer test` hasta 0 hallazgos.
5. Marca el tipo en el checklist de arriba.

> Nota: el mapper NO debe acoplarse a ningún proyecto (nada de `App\...`). Recibe
> arrays y devuelve arrays. Los defaults deben ser seguros (SUNAT válidos).
