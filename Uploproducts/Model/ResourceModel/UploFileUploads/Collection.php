<?php

namespace Uplo\Uploproducts\Model\ResourceModel\UploFileUploads;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{


    protected function _construct()
    {
        $this->_init(
            \Uplo\Uploproducts\Model\UploFileUploads::class,
            \Uplo\Uploproducts\Model\ResourceModel\UploFileUploads::class
        );
    }

    
}
