<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\LazyResultBuilder;

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
    public function build($dto)
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

    /**
     * @return AbstractLazyResult
     */
    public function getResult(): AbstractLazyResult
    {
        return $this->lazyResult;
    }
}