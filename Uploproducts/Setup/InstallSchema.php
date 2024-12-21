<?php
/**
 * Grid Schema Setup.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2016 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */

namespace Uplo\Uploproducts\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\DB\Ddl\Table;


/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;

        $installer->startSetup();

        /*
         * Create table 'uplo_file_uploads'
         */

        $table = $installer->getConnection()->newTable(
            $installer->getTable('uplo_file_uploads')
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

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
