<?php
namespace Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage;

use Magento\Backend\App\Action;

/**
 * Class Delete
 * @package Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage
 */
class Delete extends \Overdose\Testimonials\Controller\Adminhtml\Testimonials
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                $model = $this->_objectManager->create(\Overdose\Testimonials\Model\Bundlepotimage::class);
                $model->setId($id);
                $model->load($id);
                $title =  $model->getTitle();
                $model->delete();
                $this->messageManager->addSuccess(__('You deleted the item "%1".', $title));
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        return $resultRedirect->setPath('*/*/');
    }
}
