<?php

namespace Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage;

/**
 * Class NewAction
 * @package Overdose\Testimonials\Controller\Adminhtml\Bundlepotimage
 */
class NewAction extends \Overdose\Testimonials\Controller\Adminhtml\Testimonials
{
    /**
     * Create new customer action
     *
     * @return \Magento\Backend\Model\View\Result\Forward
     */
    public function execute()
    {
        // the same form is used to create and edit
        $this->_forward('edit');
    }
}
