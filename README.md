# Laravel ULID

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nedmas/laravel-ulid.svg?style=flat-square)](https://packagist.org/packages/nedmas/laravel-ulid)
[![Build Status](https://img.shields.io/travis/nedmas/laravel-ulid/master.svg?style=flat-square)](https://travis-ci.org/nedmas/laravel-ulid)
[![Quality Score](https://img.shields.io/scrutinizer/g/nedmas/laravel-ulid.svg?style=flat-square)](https://scrutinizer-ci.com/g/nedmas/laravel-ulid)
[![Total Downloads](https://img.shields.io/packagist/dt/nedmas/laravel-ulid.svg?style=flat-square)](https://packagist.org/packages/nedmas/laravel-ulid)

This package allows you to easily work with ULIDs (Universally Unique Lexicographically Sortable Identifiers) in your Laravel models.

## Installation

You can install the package via composer:

```bash
composer require nedmas/laravel-ulid
```

## Usage

``` php
use Illuminate\Database\Eloquent\Model;
use Nedmas\Concerns\GeneratesUlid;

class Post extends Model
{
    use GeneratesUlid;
} 
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email nedmas@densham.technology instead of using the issue tracker.

## Credits

- [Tom Densham](https://github.com/nedmas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
