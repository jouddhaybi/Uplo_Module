<?php

namespace Uplo\Uploproducts\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ID = 'id';
    const FILE_NAME = 'file_name';
    const VALIDATION_RESULT = 'validation_result';
    const FAILURE_REASON = 'failure_reason';
    const ERROR_LINES = 'error_lines';
    const UPLOAD_AT = 'upload_at';

   /**
    * Get Id.
    *
    * @return int
    */
    public function getId();

   /**
    * Set Id.
    */
    public function setId($Id);

   /**
    * Get FileName.
    *
    * @return varchar
    */
    public function getFileName();

   /**
    * Set FileName.
    */
    public function setFileName($fileName);

   /**
    * Get Validation Result.
    *
    * @return varchar
    */
    public function getValidationResult();

   /**
    * Set Validation Result.
    */
    public function setValidationResult($validationResult);

   /**
    * Get Failure Reason.
    *
    * @return varchar
    */
    public function getFailureReason();

   /**
    * Set Failure Reason.
    */
    public function setFailureReason($failureReason);

   /**
    * Get Error Lines.
    *
    * @return varchar
    */
    public function getErrorLines();

   /**
    * Set Error Lines.
    */
    public function setErrorLines($errorLines);

   /**
    * Get Upload Date.
    *
    * @return varchar
    */
    public function getUploadDate();

   /**
    * Set Upload Date.
    */
    public function setUploadDate($uploadDate);

}
