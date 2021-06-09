<?php

namespace Overdose\Testimonials\Model\ResourceModel\Bundlepotimage;

/**
 * Bundlepotimage resource model collection
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * {@inheritDoc}
     */
    protected function _construct()
    {
        $this->_init(
            \Overdose\Testimonials\Model\Testimonials::class,
            \Overdose\Testimonials\Model\ResourceModel\Bundlepotimage::class
        );
    }
}
