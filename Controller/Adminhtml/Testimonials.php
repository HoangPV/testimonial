<?php

namespace Overdose\Testimonials\Controller\Adminhtml;

/**
 * Class Bundlepotimage
 * @package Overdose\Testimonials\Controller\Adminhtml
 */
abstract class Testimonials extends \Magento\Backend\App\Action
{
    /**
     * Init actions
     *
     * @return $this
     */
    protected function _initAction()
    {
        // load layout, set active menu and breadcrumbs
        $this->_view->loadLayout();
        $this->_setActiveMenu(
            'Smartosc_Bundlepotimage::bundlepotimage_manage'
        )->_addBreadcrumb(
            __('bundlepotimage'),
            __('bundlepotimage')
        );
        return $this;
    }

    /**
     * Check the permission to run it
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Smartosc_Bundlepotimage::bundlepotimage');
    }
}
