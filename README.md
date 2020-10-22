# Http Auth Strategies

<!-- BADGES_START -->
[![Latest Version][badge-release]][packagist]
[![PHP Version][badge-php]][php]
![tests](https://github.com/JustSteveKing/http-auth-strategies/workflows/tests/badge.svg)
![Check & fix styling](https://github.com/JustSteveKing/http-auth-strategies/workflows/Code%20style/badge.svg)
[![Total Downloads][badge-downloads]][downloads]

[badge-release]: https://img.shields.io/packagist/v/juststeveking/http-auth-strategies.svg?style=flat-square&label=release
[badge-php]: https://img.shields.io/packagist/php-v/juststeveking/http-auth-strategies.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/juststeveking/http-auth-strategies.svg?style=flat-square&colorB=mediumvioletred

[packagist]: https://packagist.org/packages/juststeveking/http-auth-strategies
[php]: https://php.net
[downloads]: https://packagist.org/packages/juststeveking/http-auth-strategies
<!-- BADGES_END -->

A simple PHP package that is used to create different Http Auth Headers.

This is a simple to use library, to install - all you need to do is:

```bash
$ composer require juststeveking/http-auth-strategies
```

Then to use the library all you need to do is:

```php
$strategy = new BasicStrategy(
    base64_encode("username:password")
);

// Get the Auth header as an array - passing through the required Authorization prefix
$strategy->getHeader('Bearer');
// ['Authorization' => 'Bearer dXNlcm5hbWU6cGFzc3dvcmQ=']
```

There is also a NullStrategy for when you want to follow a consistent pattern, but do not want to actually use any auth:

```php
$strategy = new NullStrategy();

// Get the Auth header as an array - passing through the required Authorization prefix
$strategy->getHeader('Bearer');
// []
```
