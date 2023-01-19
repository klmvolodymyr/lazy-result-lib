<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\LazyResultBuilder;

use VolodymyrKlymniuk\LazyResultLib\AbstractLazyResult;
use VolodymyrKlymniuk\LazyResultLib\Dto\FilterableInterface;
use VolodymyrKlymniuk\LazyResultLib\Dto\PaginatableInterface;
use VolodymyrKlymniuk\LazyResultLib\Dto\SortableInterface;

abstract class AbstractLazyResultBuilder implements LazyResultBuilderInterface
{
    /**
     * @var AbstractLazyResult
     */
    protected $lazyResult;

    /**
     * @param object $dto
     *
     * @return AbstractLazyResult
     */
    public function build(object $dto)
    {
        if ($dto instanceof FilterableInterface) {
            $this->filter($dto);
        }
        if ($dto instanceof SortableInterface) {
            $this->sort($dto);
        }
        if ($dto instanceof PaginatableInterface) {
            $this->paginate($dto);
        }

        return $this->getResult();
    }

    public function getResult(): AbstractLazyResult
    {
        return $this->lazyResult;
    }
}