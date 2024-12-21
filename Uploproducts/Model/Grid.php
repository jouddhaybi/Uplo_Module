<?php

/**
 * Grid Grid Model.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Uplo\Uploproducts\Model;

use Uplo\Uploproducts\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'uplo_file_uploads';

    /**
     * @var string
     */
    protected $_cacheTag = 'uplo_file_uploads';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'uplo_file_uploads';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Uplo\Uploproducts\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Set EntityId.
     */
    public function setId($Id)
    {
        return $this->setData(self::ID, $Id);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getFileName()
    {
        return $this->getData(self::FILE_NAME);
    }

    /**
     * Set Title.
     */
    public function setFileName($fileName)
    {
        return $this->setData(self::FILE_NAME, $fileName);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getValidationResult()
    {
        return $this->getData(self::VALIDATION_RESULT);
    }

    /**
     * Set Content.
     */
    public function setValidationResult($validationResult)
    {
        return $this->setData(self::VALIDATION_RESULT, $validationResult);
    }

    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getFailureReason()
    {
        return $this->getData(self::FAILURE_REASON);
    }

    /**
     * Set PublishDate.
     */
    public function setFailureReason($failureReason)
    {
        return $this->setData(self::FAILURE_REASON, $failureReason);
    }

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getErrorLines()
    {
        return $this->getData(self::ERROR_LINES);
    }

    /**
     * Set IsActive.
     */
    public function setErrorLines($errorLines)
    {
        return $this->setData(self::ERROR_LINES, $errorLines);
    }

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUploadDate()
    {
        return $this->getData(self::UPLOAD_AT);
    }

    /**
     * Set UpdateTime.
     */
    public function setUploadDate($uploadDate)
    {
        return $this->setData(self::UPLOAD_AT, $uploadDate);
    }

}
