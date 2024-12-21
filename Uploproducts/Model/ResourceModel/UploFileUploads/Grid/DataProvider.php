<?php

namespace Uplo\Uploproducts\Model\ResourceModel\Grid;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider as UiDataProvider;

class DataProvider extends UiDataProvider
{
    /**
     * Constructor
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param \Magento\Framework\Api\Search\SearchResultInterface $collection
     * @param \Magento\Framework\Api\Search\AggregationInterface|null $aggregations
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Uplo\Uploproducts\Model\ResourceModel\Uploproducts\Collection $collection,
        \Magento\Framework\Api\Search\AggregationInterface $aggregations = null,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collection;
        $this->aggregations = $aggregations;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Retrieve data for the grid
     *
     * @return array
     */
    public function getData()
    {
        $items = $this->collection->toArray();
        print_r($items);
        exit;
        return $items;
    }
}
