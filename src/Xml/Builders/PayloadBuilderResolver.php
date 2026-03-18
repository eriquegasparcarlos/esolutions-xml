<?php

namespace App\ESolutions\Xml\Builders;

use App\ESolutions\Xml\Builders\Contracts\PayloadBuilderContract;
use App\ESolutions\Xml\Support\DocTypeNormalizer;
use InvalidArgumentException;

class PayloadBuilderResolver
{
    /** @var PayloadBuilderContract[] */
    protected array $builders = [];

    /**
     * @param PayloadBuilderContract[] $builders
     */
    public function __construct(array $builders = [])
    {
        foreach ($builders as $b) {
            if ($b instanceof PayloadBuilderContract) {
                $this->builders[$b->supports()] = $b;
            }
        }
    }

    public function resolve(string $type): PayloadBuilderContract
    {
        $normalized = DocTypeNormalizer::normalize($type);

        if (isset($this->builders[$normalized])) {
            return $this->builders[$normalized];
        }

        throw new InvalidArgumentException("No payload builder registered for type: {$normalized}");
    }
}
