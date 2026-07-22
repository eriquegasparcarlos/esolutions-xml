<?php

/*
 * Reglas cliente SFS para la LIQUIDACIÓN DE COMPRA (04, UBL SelfBilledInvoice).
 *
 * SUNAT NO publica un XSLT ValidaExprReg propio para la liquidación de compra
 * (el SFS la valida en servidor). Por eso este ruleset arranca VACÍO: la
 * cobertura pre-envío del tipo 04 se apoya en
 *   - la validación XSD (UBL-SelfBilledInvoice-2.1.xsd), y
 *   - OwnRules (3294/3305, habilitadas para SelfBilledInvoice),
 * y las reglas específicas se irán AGREGANDO aquí a partir de los rechazos
 * reales capturados por el bucle de feedback (RejectionAnalyzer), igual que se
 * hizo con NC/ND. No es un archivo generado por tools/extract_rules.php.
 */
return [
    'source' => 'own:liquidacion',
    'globals' => [],
    'rules' => [],
];
