<?php

namespace ESolutions\Xml\Support;

use DOMDocument;
use DOMXPath;

class UblXPath
{
    public static function make(DOMDocument $dom): DOMXPath
    {
        $xp = new DOMXPath($dom);

        // UBL namespaces
        $xp->registerNamespace('cbc', 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2');
        $xp->registerNamespace('cac', 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2');
        $xp->registerNamespace('ext', 'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2');

        // Root varía: Invoice-2 / CreditNote-2 / DebitNote-2
        // DOMXPath no necesita prefijo del root si usamos //, pero para rutas absolutas usamos local-name().
        return $xp;
    }

    public static function firstValue(DOMXPath $xp, string $expr): ?string
    {
        $n = $xp->query($expr)->item(0);
        if (!$n) return null;
        return trim((string) $n->textContent);
    }

    public static function firstNode(DOMXPath $xp, string $expr): ?\DOMNode
    {
        return $xp->query($expr)->item(0);
    }

    public static function nodes(DOMXPath $xp, string $expr): \DOMNodeList
    {
        return $xp->query($expr);
    }
}
