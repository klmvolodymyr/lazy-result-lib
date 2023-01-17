<?php
declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib\Dto;

interface PaginatableInterface
{
    public const DEFAULT_LIMIT = 10;

    /**
     * @return int
     */
    public function getOffset(): int;

    /**
     * @return int
     */
    public function getLimit(): int;
}