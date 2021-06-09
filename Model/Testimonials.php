<?php

// @codingStandardsIgnoreFile

namespace Overdose\Testimonials\Model;

/**
 * Class Bundlepotimage
 * @package Overdose\Testimonials\Model
 */
class Testimonials extends \Magento\Framework\Model\AbstractModel
{

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Overdose\Testimonials\Model\ResourceModel\Bundlepotimage');
    }
}
