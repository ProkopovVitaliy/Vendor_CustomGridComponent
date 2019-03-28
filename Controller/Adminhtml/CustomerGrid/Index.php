<?php

namespace Vendor\CustomGridComponent\Controller\Adminhtml\CustomerGrid;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}