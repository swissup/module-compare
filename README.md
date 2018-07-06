# Swissup Compare

    `Magento2 extension`

### Features

 *  Changing default magento **Products compare** page look
 *  Adding option to **Disable** compare functionality in **Magento**

### Installation

```bash
cd <magento_root>
composer config repositories.swissup composer https://docs.swissuplabs.com/packages/
composer require swissup/compare

bin/magento module:enable Swissup_Compare
bin/magento setup:upgrade
```

### Admin location

    `Swissup > Compare`

### Options

 *  Enable **Alternative "Compare page"** design
    _(Default = NO)_
 *  Hide default Magento **"Compare"** functionality
    _(Default = NO)_


### Documentation
