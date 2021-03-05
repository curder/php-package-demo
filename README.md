# A wonderful package to perform unit conversion in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/curder/php-package-demo.svg?style=flat-square)](https://packagist.org/packages/curder/php-package-demo)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/curder/php-package-demo/Tests?label=tests)](https://github.com/curder/php-package-demo/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/curder/php-package-demo.svg?style=flat-square)](https://packagist.org/packages/curder/php-package-demo)


This is a php pacakge demo with study.

- [【Kilograms to Pounds (kg to lbs)】](https://www.metric-conversions.org/weight/kilograms-to-pounds.htm)


## Installation

You can install the package via composer:

```bash
composer require curder/php-package-demo
```

## Usage

```php
use Curder\PhpPackageDemo\Weight;

Weight::fromKilograms(100)->toLabs(); // 220.4623;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Curder](https://github.com/curder)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
