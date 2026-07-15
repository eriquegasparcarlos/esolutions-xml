<?php

namespace ESolutions\Xml\Feedback;

/** Sink por defecto: descarta los reportes (no persiste nada). */
class NullSink implements RejectionSink
{
    public function store(RejectionReport $report): void
    {
    }
}
