<?php

namespace ESolutions\Xml\Validation\Sunat;

/**
 * Lector de los catálogos SUNAT (cat_01.xml … cat_66.xml del SFS).
 * Formato: <l><c id="10" igv="1" gra="1">Descripción</c>…</l>.
 *
 * Reemplaza a las primitivas XSLT findElementInCatalog / *Property:
 *   - has('07', '10')            → ¿existe el id en el catálogo?
 *   - property('07', '17', 'iva')→ valor del atributo (o null)
 *
 * Cada catálogo se parsea una vez por proceso (cache estático).
 */
class SunatCatalog
{
    /** @var array<string, array<string, array<string,string>>> catalogo => id => [attr => valor] */
    private static array $cache = [];

    private string $dir;

    public function __construct(?string $dir = null)
    {
        $this->dir = $dir ?: dirname(__DIR__, 2) . '/Resources/sunat/catalogos';
    }

    /** ¿El valor existe como <c id="..."> en el catálogo indicado? */
    public function has(string $catalog, ?string $id): bool
    {
        if ($id === null || $id === '') {
            return false;
        }

        return isset($this->load($catalog)[$id]);
    }

    /** Valor de un atributo del elemento (p.ej. cat_07 id=17 → iva="1"), o null. */
    public function property(string $catalog, ?string $id, string $attr): ?string
    {
        if ($id === null || $id === '') {
            return null;
        }

        return $this->load($catalog)[$id][$attr] ?? null;
    }

    /**
     * @return array<string, array<string,string>> id => atributos
     */
    private function load(string $catalog): array
    {
        $key = strtolower($catalog);
        if (isset(self::$cache[$key])) {
            return self::$cache[$key];
        }

        // Acepta '07' | '7' | 'cat_07' | '62A' → nombre de archivo cat_XX.xml
        $name = preg_replace('/^cat_/i', '', $catalog);
        $file = $this->dir . '/cat_' . $name . '.xml';
        if (!is_file($file)) {
            // Algunos catálogos usan otra convención (Catalogo005.xml, etc.)
            $alt = $this->dir . '/Catalogo' . str_pad($name, 3, '0', STR_PAD_LEFT) . '.xml';
            $file = is_file($alt) ? $alt : $file;
        }

        $out = [];
        if (is_file($file)) {
            $prev = libxml_use_internal_errors(true);
            $xml = simplexml_load_file($file);
            libxml_clear_errors();
            libxml_use_internal_errors($prev);

            if ($xml !== false) {
                foreach ($xml->c as $c) {
                    $id = (string) $c['id'];
                    if ($id === '') {
                        continue;
                    }
                    $attrs = [];
                    foreach ($c->attributes() as $a => $v) {
                        $attrs[(string) $a] = (string) $v;
                    }
                    $out[$id] = $attrs;
                }
            }
        }

        return self::$cache[$key] = $out;
    }
}
