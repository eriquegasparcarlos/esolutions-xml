<?php

namespace ESolutions\Xml\Sending\Services;

use ESolutions\Xml\Results\Sending\StatusResult;
use ESolutions\Xml\Sending\DocumentSender;

/**
 * Polling del flujo asíncrono (resumen diario / comunicación de baja):
 * sendSummary entrega un ticket; este servicio lo consulta hasta obtener
 * veredicto. Código 98 = aún en proceso ($result->isInProcess()) —
 * el consumidor decide cuándo reintentar (cron/job).
 */
class TicketService
{
    public function __construct(protected DocumentSender $sender)
    {
    }

    public function check(string $ticket): StatusResult
    {
        return $this->sender->getStatus($ticket);
    }
}
