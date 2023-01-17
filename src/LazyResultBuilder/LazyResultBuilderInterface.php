<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\LazyResultBuilder;

use VolodymyrKlymniuk\LazyResultLib\AbstractLazyResult;
use VolodymyrKlymniuk\LazyResultLib\Dto\FilterableInterface;
use VolodymyrKlymniuk\LazyResultLib\Dto\PaginatableInterface;
use VolodymyrKlymniuk\LazyResultLib\Dto\SortableInterface;

interface LazyResultBuilderInterface
{
    /**
     * @param FilterableInterface $dto
     *
     * @return self
     */
    public function filter(FilterableInterface $dto);

    /**
     * @param SortableInterface $dto
     *
     * @return self
     */
    public function sort(SortableInterface $dto);

    /**
     * @param PaginatableInterface $dto
     *
     * @return self
     */
    public function paginate(PaginatableInterface $dto);

    /**
     * @return AbstractLazyResult
     */
    public function getResult(): AbstractLazyResult;
}