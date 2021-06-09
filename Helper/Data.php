<?php

namespace Overdose\Testimonials\Helper;

use Magento\Framework\App\Helper\Context;

/**
 * Class Data
 * @package Overdose\Testimonials\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Overdose\Testimonials\Model\ResourceModel\Bundlepotimage\CollectionFactory
     */
    protected $imageCollectionFactory;

    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $urlBuilder;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param \Overdose\Testimonials\Model\ResourceModel\Bundlepotimage\CollectionFactory $imageCollectionFactory
     * @param \Magento\Framework\UrlInterface $urlBuilder
     */
    public function __construct(
        Context $context,
        \Overdose\Testimonials\Model\ResourceModel\Bundlepotimage\CollectionFactory $imageCollectionFactory,
        \Magento\Framework\UrlInterface $urlBuilder
    ) {
        $this->urlBuilder = $urlBuilder;
        $this->imageCollectionFactory = $imageCollectionFactory;
        parent::__construct($context);
    }

    /**
     * @param $selectionId
     *
     * @return string
     */
    public function getImageUrl($selectionId) {
        $url='';
        $collection = $this->imageCollectionFactory->create();
        $collection->addFieldToFilter('selection_id', $selectionId);

        foreach ($collection as $item) {
            $image = $item->getData('bundle_pot_image');
            $url = $this->urlBuilder->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . 'bundlepotimage'.$image;
            break;
        }

        return $url;
    }
}
