<?php

namespace App\ESolutions\Xml\Validation\Xml;

class SchemaResolver
{
    public function resolve(string $normalizedType): ?string
    {
        $schemaFile = config('esolutions_xml.schemas.' . $normalizedType);

        if (!$schemaFile) {
            return null;
        }

        $base = rtrim(config('esolutions_xml.paths.xsd_base'), DIRECTORY_SEPARATOR);
        return $base . DIRECTORY_SEPARATOR . $schemaFile;
    }
}
