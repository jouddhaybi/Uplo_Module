<?php
namespace Uplo\Uploproducts\Controller\Adminhtml\Index;


use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Stdlib\DateTime\DateTime;

class Upload extends \Magento\Framework\App\Action\Action
{
    protected $jsonResultFactory;

    public function __construct(
        Context $context,
        JsonFactory $jsonResultFactory
    ) {
        $this->jsonResultFactory = $jsonResultFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $objectManager = ObjectManager::getInstance();
        $dateTime = $objectManager->create(DateTime::class);

        $query = $this->getRequest()->getContent('testdata');
        $jsonPart = strstr($query, '&form_key', true);
        $data = json_decode($jsonPart, true);

        if (is_array($data) ) {
            $currentDateTime = $dateTime->gmtDate();
            $fileName = $data[0]['fileName'];
            $validation = $data[0]['validation'];
            $failureReason = $data[0]['failureReason'];
            $errorLines = $data[0]['errorLines'];

            $data = [
                'upload_date' => $currentDateTime,
                'file_name' => $fileName,
                'validation_result' =>$validation,
                'failure_reason' => $failureReason,
                'error_lines' => $errorLines,
            ];

            $model = $this->_objectManager->create('Uplo\Uploproducts\Model\CustomModel');
            $model->saveCustomData($data);
            
            $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/joud.log');
            $logger = new \Zend\Log\Logger();
            $logger->addWriter($writer);
            $logger->info(print_r($data,true));
        } else {
            echo 'Validation failed not found!';
        }

        

        $response = ['message' => 'Success!'];
        return $this->jsonResultFactory->create()->setData($response);
    }
}
