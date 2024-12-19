<?php

namespace Uplo\Uploproducts\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Psr\Log\LoggerInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Install DB schema for the module.
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        try {
          
            $uploadstable = $setup->getConnection()->newTable(
                $setup->getTable('uplo_file_uploads')
            )->addColumn(
                'id',   
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'ID'
            )->addColumn(
                'upload_date',
                Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                'Date of Upload'
            )->addColumn(
                'file_name',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'File Name'
            )->addColumn(
                'validation_result',
                Table::TYPE_TEXT,
                50,
                ['nullable' => false],
                'Validation Result' 
            )->addColumn(
                'failure_reason',
                Table::TYPE_TEXT,
                '64k',  
                ['nullable' => true],
                'Reason for Failure'
            )->addColumn(
                'error_lines',
                Table::TYPE_INTEGER,
                null,
                ['nullable' => true, 'default' => 0],
                'Number of Lines with Errors'
            )->setComment(
                'File Upload Validation Log Table'
            );

           
            $setup->getConnection()->createTable($uploadstable);
        } catch (\Exception $err) {
            $this->logger->error(__('Schema installation failed: %1', $err->getMessage()));
        }

        $setup->endSetup();
    }
}
