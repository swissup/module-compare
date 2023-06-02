<?php

namespace Swissup\Compare\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\View\LayoutInterface;

class AddHandles implements ObserverInterface
{
    /**
     * @var Swissup\Compare\Helper\Data
     */
    protected $helper;

    /**
     * @param \Swissup\Compare\Helper\Data $helper
     */
    public function __construct(
        \Swissup\Compare\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * Add handles to the page.
     *
     * @param Observer $observer
     * @event layout_load_before
     *
     * @return void
     */
    public function execute(Observer $observer)
    {
        if (!$this->helper->isEnabled()) {
            /** @var LayoutInterface $layout */
            $layout = $observer->getData('layout');
            $layout->getUpdate()->addHandle('swissup_compare_disable');
        }

        if ($observer->getFullActionName() !== 'catalog_product_compare_index') {
            return;
        }

        if ($this->helper->useAlternativeDesign()) {
            /** @var LayoutInterface $layout */
            $layout = $observer->getData('layout');
            $layout->getUpdate()->addHandle('swissup_compare');
        }
    }
}
