<?php

namespace Swissup\Compare\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const CONFIG_PATH_ENABLED = 'swissup_compare/general/enabled';
    const CONFIG_PATH_USE_ALTERNATIVE_DESIGN = 'swissup_compare/general/use_alternative_design';

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
}
