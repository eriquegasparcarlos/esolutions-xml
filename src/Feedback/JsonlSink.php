<?php

namespace ESolutions\Xml\Feedback;

/**
 * Persiste los rechazos en un archivo JSONL (una línea JSON por rechazo).
 * Cero infraestructura: cualquier proyecto que instale el paquete puede
 * capturar huecos de validación sin base de datos ni migraciones. El mismo
 * archivo se lee luego para el reporte de huecos.
 */
class JsonlSink implements RejectionSink
{
    public function __construct(private readonly string $path)
    {
    }

    public function store(RejectionReport $report): void
    {
        $dir = dirname($this->path);
        if (!is_dir($dir)) {
            @mkdir($dir, 0775, true);
        }
        $row = $report->toArray();
        $row['at'] = date('c');
        $line = json_encode($row, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n";
        file_put_contents($this->path, $line, FILE_APPEND | LOCK_EX);
    }

    /**
     * Lee todos los rechazos registrados.
     *
     * @return array<int,array<string,mixed>>
     */
    public function all(): array
    {
        if (!is_file($this->path)) {
            return [];
        }
        $out = [];
        foreach (file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [] as $line) {
            $row = json_decode($line, true);
            if (is_array($row)) {
                $out[] = $row;
            }
        }
        return $out;
    }

    /**
     * Agrega los rechazos por código y resalta los HUECOS (los que nuestro
     * validador local no atrapó). Esos códigos son candidatos a OwnRules.
     * Ordenado por cantidad de huecos, luego por total.
     *
     * @return array<string,array{code:string,total:int,caught:int,missed:int,description:?string}>
     */
    public function gaps(): array
    {
        $agg = [];
        foreach ($this->all() as $r) {
            $code = (string) ($r['code'] ?? '');
            if ($code === '') {
                continue;
            }
            if (!isset($agg[$code])) {
                $agg[$code] = [
                    'code' => $code,
                    'total' => 0,
                    'caught' => 0,
                    'missed' => 0,
                    'description' => $r['description'] ?? null,
                ];
            }
            $agg[$code]['total']++;
            if (!empty($r['caught_locally'])) {
                $agg[$code]['caught']++;
            } else {
                $agg[$code]['missed']++;
            }
        }
        uasort($agg, fn ($a, $b) => ($b['missed'] <=> $a['missed']) ?: ($b['total'] <=> $a['total']));
        return $agg;
    }
}
