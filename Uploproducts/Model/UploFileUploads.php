<?php

namespace Uplo\Uploproducts\Model;

use Magento\Framework\Model\AbstractModel;
use Uplo\Uploproducts\Model\ResourceModel\UploFileUploads as UploFileUploadsResource;

class UploFileUploads extends AbstractModel
{
    protected $_idFieldName = 'id'; // Primary key
    protected $_nameFieldName = 'file_name'; // Name field for easy reference
    protected $_resourceModel = UploFileUploadsResource::class;

    protected function _construct()
    {
        $this->_init(\Uplo\Uploproducts\Model\ResourceModel\UploFileUploads::class);
    }
}
