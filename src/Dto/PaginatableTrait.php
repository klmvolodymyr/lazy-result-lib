<?php

namespace VolodymyrKlymniuk\LazyResultLib\Dto;

trait PaginatableTrait
{
    /**
     * @api(type="integer")
     */
    protected int $offset = 0;

    /**
     * @api(type="integer")
     */
    protected int $limit = PaginatableInterface::DEFAULT_LIMIT;

    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(int $offset): PaginatableTrait
    {
        $this->offset = $offset;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): PaginatableTrait
    {
        $this->limit = $limit;

        return $this;
    }
}