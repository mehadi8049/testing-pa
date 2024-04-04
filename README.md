# Laravel-test-p
A simple but beautiful unique slug generator for Laravel eloquent model.

---

## Installation

```sh
composer require mehadi/laravel-test-p
```

## Configuration
**Service Provider Registration**
In `config/app.php`, add in `providers` array -

```php
'providers' => [
    // ...
    Mehadi\TestingPa\TestServiceProvider::class,
    // ...
],
```



## Use from Controller

#### Import first the Test facade
```php
use Mehadi\TestingPa\Facades\Test;
```

## Contribution
You're open to create any Pull request.
