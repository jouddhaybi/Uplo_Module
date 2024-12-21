<?php
namespace Uplo\Uploproducts\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Exception\LocalizedException;

class CustomModel extends AbstractModel
{
    protected $_idFieldName = 'id';
    // protected $_resourceModel = 'Uplo\Uploproducts\Model\ResourceModel\CustomModel';

    /**
     * @var ResourceConnection
     */
    protected $resource;

    /**
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $connection;

    /**
     * Constructor
     *
     * @param ResourceConnection $resource
     */
    public function __construct(
        ResourceConnection $resource
    ) {
        $this->resource = $resource;
        $this->connection = $this->resource->getConnection();
    }

    /**
     * Save custom data to the database
     *
     * @param array $data
     * @return void
     * @throws LocalizedException
     */
    public function saveCustomData($data)
    {
        try {
            $this->connection->insert(
                $this->resource->getTableName('uplo_file_uploads'), 
                [
                    'upload_date' => $data['upload_date'],
                    'file_name' => $data['file_name'],
                    'validation_result' => $data['validation_result'],
                    'failure_reason' => $data['failure_reason'],
                    'error_lines' => $data['error_lines'],
                ]
            );
        } catch (\Exception $e) {
            throw new LocalizedException(__('Error saving data: %1', $e->getMessage()));
        }
    }
}
