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

    /**
     * Load a model by its primary key
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        // Load data from the database
        return parent::load($object, $value, $field);
    }

    /**
     * Save the model data to the database
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        return parent::save($object);
    }

    /**
     * Delete the model data from the database
     */
    public function delete(\Magento\Framework\Model\AbstractModel $object)
    {
        return parent::delete($object);
    }
}
