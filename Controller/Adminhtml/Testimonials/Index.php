<?php
namespace Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage;

use Magento\Backend\App\Action;

/**
 * Class Index
 * @package Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage
 */
class Index extends \Overdose\Testimonials\Controller\Adminhtml\Testimonials
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $this->_initAction();
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Manage Preview Images'));
        $this->_view->renderLayout();
    }
}
