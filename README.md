# Filament Import

[![Latest Version on Packagist](https://img.shields.io/packagist/v/halcyon-agile/filament-import.svg?style=flat-square)](https://packagist.org/packages/halcyon-agile/filament-import)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/halcyon-agile/filament-import/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/halcyon-agile/filament-import/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/halcyon-agile/filament-import/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/halcyon-agile/filament-import/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/halcyon-agile/filament-import.svg?style=flat-square)](https://packagist.org/packages/halcyon-agile/filament-import)

## Installation

You can install the package via composer:

```bash
composer require halcyon-agile/filament-import"
```


You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-import-config"
```

This is the contents of the published config file:

```php
return [

    'temporary_files' => [

        'disk' => null,

        'base_directory' => 'filament-import',
    ],

    'expires_in_minute' => 1_440, // 1 day, in-case of large import filze via queue
];
```

## Usage

```php
# TODO:
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Halcyon Agile](https://github.com/halcyon-agile)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
