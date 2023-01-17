<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\Dto;

interface SortableInterface
{
    public function getSort(): array;
}