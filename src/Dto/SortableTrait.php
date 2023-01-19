<?php

namespace VolodymyrKlymniuk\LazyResultLib\Dto;

trait SortableTrait {
    /**
     * @api(type="array", items="string", collectionFormat=multi, description="Pattern: <b>sort[<i>:field:</i>]=ASK|DESC</b> <br> Example: <b>sort[username]=DESC</b> <br> Elastic doc: https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-sort.html")
     *
     * @var array
     */
    protected $sort = ['id' => 'ASC'];

    public function getSort(): array
    {
        return $this->sort;
    }

    public function setSort(array $sort): self
    {
        $this->sort = $sort;

        return $this;
    }
}