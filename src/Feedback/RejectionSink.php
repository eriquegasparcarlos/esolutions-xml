<?php

namespace ESolutions\Xml\Feedback;

/**
 * Destino donde el consumidor persiste los rechazos analizados. El paquete trae
 * NullSink (descarta) y JsonlSink (log sin infraestructura); un consumidor
 * puede implementar el suyo (Eloquent, telemetría, etc.).
 */
interface RejectionSink
{
    public function store(RejectionReport $report): void;
}
