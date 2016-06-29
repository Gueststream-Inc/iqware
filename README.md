# IQWare SOAP API Wrapper

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

The IQWare Property Management Software SOAP API is a bit complicated so this library exists to abstract the complication out of implementing simple connectivity with an IQWare SOAP API. 

Please note that IQWare property management software seems to have many different APIs so this may or may not work for your application.  This was created to support an on-site IQWare server.  Documentation for this server/service was never sourced and we do not know the version of the API.

## Install

Via Composer

``` bash
$ composer require gueststream/iqware
```

## Usage

``` php
$iqwareClient = new \Gueststream\PMS\IQWare\Client('https://www.my-iqware-server/IQWareWebRes.asmx?WSDL');
$properties = $iqwareClient->getProperties();
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email support@gueststream.com instead of using the issue tracker.

## Credits

- [Gueststream][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/gueststream/iqware.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Gueststream-Inc/iqware/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/gueststream-inc/iqware.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/gueststream-inc/iqware.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/gueststream/iqware.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/gueststream/iqware
[link-travis]: https://travis-ci.org/Gueststream-Inc/iqware
[link-scrutinizer]: https://scrutinizer-ci.com/g/gueststream-inc/iqware/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/gueststream-inc/iqware
[link-downloads]: https://packagist.org/packages/gueststream/iqware
[link-author]: https://github.com/gueststream-Inc
[link-contributors]: ../../contributors
