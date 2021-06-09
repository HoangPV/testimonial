<?php

namespace Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage;

use Magento\Backend\App\Action;

/**
 * Class massDelete
 * @package Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage
 */
class massDelete extends \Overdose\Testimonials\Controller\Adminhtml\Testimonials
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $ids = $this->getRequest()->getPost('ids');
        if (!is_array($ids)) {
            $this->messageManager->addError(__('Please select item(s).'));
        } else {
            try {
                foreach ($ids as $id) {
                    $model = $this->_objectManager->create(\Overdose\Testimonials\Model\Bundlepotimage::class)
                        ->load($id)
                        ->delete();
                }
                $this->messageManager->addSuccess(__('Total of %1 record(s) were successfully deleted.', count($ids)));

            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        return $resultRedirect->setPath('*/*/');
    }
}
