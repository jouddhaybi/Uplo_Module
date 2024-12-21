<?php

namespace Uplo\Uploproducts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class UploFileUploads extends AbstractDb
{
    /**
     * Define the main table and primary key field
     */
    protected function _construct()
    {
        
        $this->_init('uplo_file_uploads', 'id'); // 'uplo_file_uploads' is the table, 'id' is the primary key
        
    }

    
}
