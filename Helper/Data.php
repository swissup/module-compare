<?php

namespace Swissup\Compare\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const CONFIG_PATH_ENABLED = 'swissup_compare/general/enabled';
    const CONFIG_PATH_USE_ALTERNATIVE_DESIGN = 'swissup_compare/design/use_alternative_design';
    const CONFIG_PATH_SHOW_ATTRS_LABELS = 'swissup_compare/design/show_attributes_labels';
    const CONFIG_PATH_STICKY_TABLE_HEADER = 'swissup_compare/design/sticky_header';

    /**
     *  @return boolean
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::CONFIG_PATH_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     *  @return boolean
     */
    public function useAlternativeDesign()
    {
        return $this->scopeConfig->isSetFlag(
            self::CONFIG_PATH_USE_ALTERNATIVE_DESIGN,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     *  @return boolean
     */
    public function showAttributesLabels()
    {
        return $this->scopeConfig->isSetFlag(
            self::CONFIG_PATH_SHOW_ATTRS_LABELS,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     *  @return boolean
     */
    public function isStickyEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::CONFIG_PATH_STICKY_TABLE_HEADER,
            ScopeInterface::SCOPE_STORE
        );
    }
}
