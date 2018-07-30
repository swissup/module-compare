<?php

namespace Swissup\Compare\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\View\LayoutInterface;

/**
 * Class AddHandles
 *
 * Add custom layout handles to te page
 *
 * @package Swissup\Compare\Observer
 */
class AddHandles implements ObserverInterface
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
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
        if ($this->isCompareDisabled()) {
            /** @var LayoutInterface $layout */
            $layout = $observer->getData('layout');
            $layout->getUpdate()->addHandle('swissup_compare_disable');
        }

        $action = $observer->getFullActionName();

        if ($this->isStylingEnabled() && $action === 'catalog_product_compare_index') {
            /** @var LayoutInterface $layout */
            $layout = $observer->getData('layout');
            $layout->getUpdate()->addHandle('swissup_compare');
        }
    }

    public function isCompareDisabled()
    {
        return $this->scopeConfig->isSetFlag(
            'swissup_compare/general/disable_magento_compare',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isStylingEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            'swissup_compare/general/enable_compare_design',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
