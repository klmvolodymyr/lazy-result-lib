<?php

declare(strict_types=1);

namespace VolodymyrKlymniuk\LazyResultLib;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\Collection;
use VolodymyrKlymniuk\LazyResultLib\ResultTransformer\ResultTransformerInterface;

abstract class AbstractLazyResult extends AbstractLazyCollection
{
    /**
     * @var ResultTransformerInterface
     */
    protected $resultTransformer;

    /**
     * @var mixed
     */
    protected $response;

    /**
     * @param ResultTransformerInterface $resultTransformer
     */
    public function __construct(ResultTransformerInterface $resultTransformer)
    {
        $this->resultTransformer = $resultTransformer;
    }

    /**
     * @param ResultTransformerInterface $resultTransformer
     *
     * @return AbstractLazyResult
     */
    public function setResultTransformer(ResultTransformerInterface $resultTransformer): self
    {
        if ($this->initialized) {
            throw new \RuntimeException('Cannot set result transformer after initialization');
        }
        $this->resultTransformer = $resultTransformer;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    protected function doInitialize(): void
    {
        $this->response = $this->getResponse();
        $this->collection = $this->transformResponseToCollection();
    }


    abstract protected function getResponse();

    /**
     * @return Collection
     */
    protected function transformResponseToCollection(): Collection
    {
        return $this->resultTransformer->transform($this->response);
    }
}