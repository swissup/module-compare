# Swissup Compare

### Features

 - [x] Changing default magento **Products compare** page look
     - [x] Add Sticky header
     - [x] Add Sticky attributes sidebar
 - [x] Adding option to **Disable** compare functionality in **Magento**
 - [ ] Add "Show All / Show Differences" option

## Installation

### For clients

There are several ways to install extension for clients:

 1. If you've bought the product at Magento's Marketplace - use
    [Marketplace installation instructions](https://docs.magento.com/marketplace/user_guide/buyers/install-extension.html)
 2. Otherwise, you have two options:
    - Install the sources directly from [our repository](https://docs.swissuplabs.com/m2/extensions/compare/installation/composer/) - **recommended**
    - Download archive and use [manual installation](https://docs.swissuplabs.com/m2/extensions/compare/installation/manual/)

### For developers

Use this approach if you have access to our private repositories!

```bash
cd <magento_root>
composer config repositories.swissup composer https://docs.swissuplabs.com/packages/
composer require swissup/module-compare --prefer-source
bin/magento module:enable Swissup_Compare
bin/magento setup:upgrade
```

### Admin location

_Stores > Configuration > Swissup > Compare_

### Options

 *  Enable **Alternative "Compare page"** design
    _(Default = NO)_
 *  Hide default Magento **"Compare"** functionality
    _(Default = NO)_
