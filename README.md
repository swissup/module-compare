# Swissup Compare

    `Magento2 extension`

### Features

 - [x] Changing default magento **Products compare** page look
     - [x] Add Sticky header
     - [x] Add Sticky attributes sidebar
 - [x] Adding option to **Disable** compare functionality in **Magento**
 - [ ] Add "Show All / Show Differences" option

### Installation

```bash
cd <magento_root>
composer config repositories.swissup composer https://docs.swissuplabs.com/packages/
composer require swissup/module-compare

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
