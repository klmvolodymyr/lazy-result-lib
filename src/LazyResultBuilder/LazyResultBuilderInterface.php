<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\LazyResultBuilder;

use VolodymyrKlymniuk\LazyResultLib\AbstractLazyResult;
use VolodymyrKlymniuk\LazyResultLib\Dto\FilterableInterface;
use VolodymyrKlymniuk\LazyResultLib\Dto\PaginatableInterface;
use VolodymyrKlymniuk\LazyResultLib\Dto\SortableInterface;

interface LazyResultBuilderInterface
{
    public function filter(FilterableInterface $dto);
    public function sort(SortableInterface $dto);
    public function paginate(PaginatableInterface $dto);
    public function getResult(): AbstractLazyResult;
}