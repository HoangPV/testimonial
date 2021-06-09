<?php

namespace Overdose\Testimonials\Block\Adminhtml;

/**
 * Class Bundlepotimage
 * @package Overdose\Testimonials\Block\Adminhtml
 */
class Testimonials extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Block constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_bundlepotimage';
        $this->_blockGroup = 'Smartosc_Bundlepotimage';
        $this->_headerText = __('Manage Preview Images');
        $this->_addButtonLabel = __('Add Image');
        parent::_construct();
    }
}
