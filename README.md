# Laravel-ModelBaseEntity

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Tobias Wanders``` ```stereoide``` ```https://github.com/stereoide``` ```Stereoide@gmail.com``` ```Stereoide``` ```Laravel-ModelBaseEntity``` ```Creates a entities table/model and uses that to ensure a sequential id to different models instead of each model having its own incrementing id``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require stereoide/laravel-model-base-entity
```

## Usage

``` php
$skeleton = new Stereoide\ModelBaseEntity();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email Stereoide@gmail.com instead of using the issue tracker.

## Credits

- [Tobias Wanders][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Stereoide/Laravel-ModelBaseEntity.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Stereoide/Laravel-ModelBaseEntity/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Stereoide/Laravel-ModelBaseEntity.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Stereoide/Laravel-ModelBaseEntity.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Stereoide/Laravel-ModelBaseEntity.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Stereoide/Laravel-ModelBaseEntity
[link-travis]: https://travis-ci.org/Stereoide/Laravel-ModelBaseEntity
[link-scrutinizer]: https://scrutinizer-ci.com/g/Stereoide/Laravel-ModelBaseEntity/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Stereoide/Laravel-ModelBaseEntity
[link-downloads]: https://packagist.org/packages/Stereoide/Laravel-ModelBaseEntity
[link-author]: https://github.com/stereoide
[link-contributors]: ../../contributors
