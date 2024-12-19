<?php

namespace Uplo\Uploproducts\Model;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProviderInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Uplo\Uploproducts\Model\ResourceModel\UploFileUploads\Collection;

class UploFileUploadsDataProvider extends AbstractDataProvider implements DataProviderInterface
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        Collection $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        return $this->collection->toArray();
    }
}
