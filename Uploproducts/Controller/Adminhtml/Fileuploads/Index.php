<?php

namespace Uplo\Uploproducts\Controller\Adminhtml\Fileuploads;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class Index extends Action
{
    // const ADMIN_RESOURCE = 'Uplo_Uploproducts::file_uploads';

    protected $resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $gridData = $this->_objectManager->create('Uplo\Uploproducts\Model\ResourceModel\UploFileUploads\Collection')->getItems();
    $result = [];
    foreach ($gridData as $data) {
        $result[] = $data->toArray(); // Transform the collection into an array
    }

    return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
    }
}
