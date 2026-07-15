<?php

namespace ESolutions\Xml\Payload;

use ESolutions\Xml\Contracts\PayloadValidatorInterface;
use ESolutions\Xml\Results\ValidationError;
use ESolutions\Xml\Results\ValidationResult;

/**
 * Valida el contrato de entrada (array payload) contra el esquema del tipo
 * de documento definido en Payload/Schemas/{tipo}.php.
 *
 * Cada esquema retorna:
 *   'required' => claves en dot-notation que deben existir y no ser null
 *   'present'  => claves que deben existir (null permitido — la plantilla
 *                 las lee con acceso directo, p.ej. @if($document['x']))
 *
 * Soporta comodín '*' para arrays de items: 'document.items.*.quantity'.
 */
class PayloadValidator implements PayloadValidatorInterface
{
    public function validate(string $normalizedType, array $payload): ValidationResult
    {
        $schema = $this->loadSchema($normalizedType);

        // Tipo sin esquema definido: no se bloquea la generación.
        if ($schema === null) {
            return ValidationResult::ok();
        }

        $errors = [];
        $seen = [];

        foreach ($schema['required'] ?? [] as $path) {
            foreach ($this->missingPaths($payload, explode('.', $path), '', false) as $missing) {
                // Varias reglas wildcard comparten padre ('items.*.x', 'items.*.y'):
                // si falta el padre, se reporta una sola vez.
                if (isset($seen[$missing])) {
                    continue;
                }
                $seen[$missing] = true;
                $errors[] = new ValidationError(
                    "Falta la clave requerida '{$missing}' en el payload de '{$normalizedType}' (ver docs/payloads/{$normalizedType}.md).",
                    'PAYLOAD',
                    $missing
                );
            }
        }

        foreach ($schema['present'] ?? [] as $path) {
            foreach ($this->missingPaths($payload, explode('.', $path), '', true) as $missing) {
                if (isset($seen[$missing])) {
                    continue;
                }
                $seen[$missing] = true;
                $errors[] = new ValidationError(
                    "La clave '{$missing}' debe existir en el payload de '{$normalizedType}' aunque sea null (ver docs/payloads/{$normalizedType}.md).",
                    'PAYLOAD',
                    $missing
                );
            }
        }

        return $errors ? ValidationResult::fail($errors) : ValidationResult::ok();
    }

    protected function loadSchema(string $normalizedType): ?array
    {
        $file = __DIR__ . '/Schemas/' . $normalizedType . '.php';

        return is_file($file) ? require $file : null;
    }

    /**
     * Devuelve las rutas concretas que faltan (con índices expandidos para '*').
     *
     * @param array<int, string> $segments
     * @return array<int, string>
     */
    protected function missingPaths(mixed $data, array $segments, string $prefix, bool $allowNull): array
    {
        if ($segments === []) {
            return [];
        }

        $segment = array_shift($segments);

        if ($segment === '*') {
            if (!is_array($data)) {
                return [$this->joinPath($prefix, '*')];
            }
            $missing = [];
            foreach ($data as $index => $item) {
                $missing = array_merge(
                    $missing,
                    $this->missingPaths($item, $segments, $this->joinPath($prefix, (string) $index), $allowNull)
                );
            }
            return $missing;
        }

        $path = $this->joinPath($prefix, $segment);

        if (!is_array($data) || !array_key_exists($segment, $data)) {
            return [$path];
        }

        if ($segments === []) {
            return (!$allowNull && $data[$segment] === null) ? [$path] : [];
        }

        return $this->missingPaths($data[$segment], $segments, $path, $allowNull);
    }

    protected function joinPath(string $prefix, string $segment): string
    {
        return $prefix === '' ? $segment : "{$prefix}.{$segment}";
    }
}
