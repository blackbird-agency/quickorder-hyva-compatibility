# Blackbird Quick Order Hÿva Compatibility

[![Latest Stable Version](https://img.shields.io/packagist/v/blackbird/quickorder-hyva-compatibility.svg?style=flat-square)](https://packagist.org/packages/blackbird/quickorder-hyva-compatibility)
[![License: MIT](https://img.shields.io/github/license/blackbird-agency/quickorder-hyva-compatibility.svg?style=flat-square)](./LICENSE.txt)

Compat module for Blackbird Quick Order on Magento 2 using a Hyvä Theme. The Quick Order page (`/quickorder/`) gets
the same features as on Luma, rewritten with Alpine.js and Tailwind CSS: order by SKU or name with live validation,
CSV/XLSX import with saved column mapping, add to cart, header and customer account links.
This requires:
- A [Hyvä Theme](https://www.hyva.io/) license
- A License to [Blackbird Quick Order](https://store.bird.eu/)

The module is only active on Hyvä themes (Hyvä compat module fallback); a Luma store is not affected.

## Requirements

* PHP >= 8.1
* Hÿva Theme: ^1.3 (header link: Hyvä default theme >= 1.3.2)
* Blackbird Quick Order version: ^100.1

## Setup

Get the package

Composer Package:
```composer require blackbird/quickorder-hyva-compatibility```

Zip Package:
Unzip the package in app/code/Blackbird/QuickOrderHyvaCompatibility, from the root of your Magento instance.


## Install the module

Go to your Magento root directory and run the following magento commands:

```
php bin/magento setup:upgrade
php bin/magento hyva:config:generate
```

Then rebuild the Tailwind CSS of your Hyvä theme (`npm run build` in `web/tailwind`) so the module's templates are
included.

## Support

- If you have any issue with this code, feel free to [open an issue](https://github.com/blackbird-agency/quickorder-hyva-compatibility/issues/new).
- If you want to contribute to this project, feel free to [create a pull request](https://github.com/blackbird-agency/quickorder-hyva-compatibility/compare).

## Contact

For further information, contact us:

- by email: support@bird.eu
- or by form: [https://black.bird.eu/en/contacts/](https://black.bird.eu/contacts/)

## Authors

- [**Blackbird Team**](https://github.com/blackbird-agency) - *Maintainer* -

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE.txt) file for details.

***That's all folks!***
