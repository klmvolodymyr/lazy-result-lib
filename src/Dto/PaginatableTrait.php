<?php

namespace VolodymyrKlymniuk\LazyResultLib\Dto;

trait PaginatableTrait
{
    /**
     * @api(type="integer")
     *
     * @var int
     */
    protected $offset = 0;

    /**
     * @api(type="integer")
     *
     * @var int
     */
    protected $limit = PaginatableInterface::DEFAULT_LIMIT;

    /**
     * @return int
     */
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

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): PaginatableTrait
    {
        $this->limit = $limit;

        return $this;
    }
}