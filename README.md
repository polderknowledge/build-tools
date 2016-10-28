# build-tools

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package contains a default set of [Phing](https://www.phing.info/) targets 
used by our php-projects. We are aiming to cover all tools required for php 
builds. You can enable and disable targets by adding a build.properties file to 
your project. But only do this if you have very good reasons! It is not 
recommended to disable or override any of the targets!

## Install

Via Composer

``` bash
$ composer require polderknowledge/build-tools
```

## Usage

Execute `php vendor/bin/pk-init-build.php` in your projects root. This will create a default build.xml.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please report them via [HackerOne](https://hackerone.com/polderknowledge) 
instead of using the issue tracker or e-mail.

## Community

We have an IRC channel where you can find us every now and then. We're on the Freenode network in the
channel #polderknowledge.

## Credits

- [Polder Knowledge][link-author]
- [All Contributors][link-contributors]

## License

Please see [LICENSE.md][link-license] for the license of this application.

[ico-version]: https://img.shields.io/packagist/v/polderknowledge/build-tools.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/polderknowledge/build-tools/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/polderknowledge/build-tools.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/polderknowledge/build-tools.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/polderknowledge/build-tools.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/polderknowledge/build-tools
[link-travis]: https://travis-ci.org/polderknowledge/build-tools
[link-scrutinizer]: https://scrutinizer-ci.com/g/polderknowledge/build-tools/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/polderknowledge/build-tools
[link-downloads]: https://packagist.org/packages/polderknowledge/build-tools
[link-author]: https://polderknowledge.com
[link-contributors]: ../../contributors
[link-license]: LICENSE.md
