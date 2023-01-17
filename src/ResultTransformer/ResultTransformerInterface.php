<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\ResultTransformer;

use Doctrine\Common\Collections\Collection;

interface ResultTransformerInterface
{
    /**
     * @param iterable $response
     *
     * @return Collection
     */
    public function transform(iterable $response): Collection;
}