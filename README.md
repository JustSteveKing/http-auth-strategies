# Http Auth Strategies

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
