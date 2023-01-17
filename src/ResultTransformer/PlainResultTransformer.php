<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\ResultTransformer;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PlainResultTransformer implements ResultTransformerInterface
{
    /**
     * @param iterable $result
     *
     * @return ArrayCollection
     */
    public function transform(iterable $result): Collection
    {
        $collection = new ArrayCollection();
        foreach ($result as $item) {
            $collection[] = $item;
        }

        return $collection;
    }
}