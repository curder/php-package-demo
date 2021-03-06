# A wonderful package to perform unit conversion in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/curder/php-package-demo.svg?style=flat-square)](https://packagist.org/packages/curder/php-package-demo)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/curder/php-package-demo/Tests?label=tests)](https://github.com/curder/php-package-demo/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/curder/php-package-demo/Check%20&%20fix%20styling?label=code%20style)](https://github.com/curder/php-package-demo/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/curder/php-package-demo.svg?style=flat-square)](https://packagist.org/packages/curder/php-package-demo)


This is a php package is a demo for study.

- [Kilograms to Pounds (kg to lbs)](https://www.metric-conversions.org/weight/kilograms-to-pounds.htm)
- [Pounds to Kilograms (lbs to kg)](https://www.metric-conversions.org/weight/pounds-to-kilograms.htm)

- [Celsius to Fahrenheit (°C to °F)](https://www.metric-conversions.org/temperature/celsius-to-fahrenheit.htm)
- [Celsius to Kelvin](https://www.metric-conversions.org/temperature/celsius-to-kelvin.htm)

This is a php package, and it is a demo for study.

- laravel命令行测试 [curder/laravel-console-command-test-demo](https://github.com/curder/laravel-console-command-test-demo)
- laravel 拓展包 [curder/laravel-package-demo](https://github.com/curder/laravel-package-demo)



## Installation

You can install the package via composer:

```bash
composer require curder/php-package-demo
```

## Usage

```php
use Curder\PhpPackageDemo\Weight;
use Curder\PhpPackageDemo\Temperature;

Weight::fromKilograms(100)->toLabs(); // 220.4623;
Weight::fromLabs(100)->toKilograms(); // 45.35923

Temperature::fromCelsius(100)->toFahrenheit(); // 212;
Temperature::fromCelsius(100)->toKelvin(); // 373.15;
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
