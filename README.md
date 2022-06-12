# Bootstrap 5 flash messages for your Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/retinens/laravel-bootstrap-toasts.svg?style=flat-square)](https://packagist.org/packages/retinens/laravel-bootstrap-toasts)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/retinens/laravel-bootstrap-toasts/run-tests?label=tests)](https://github.com/retinens/laravel-bootstrap-toasts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/retinens/laravel-bootstrap-toasts/Check%20&%20fix%20styling?label=code%20style)](https://github.com/retinens/laravel-bootstrap-toasts/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/retinens/laravel-bootstrap-toasts.svg?style=flat-square)](https://packagist.org/packages/retinens/laravel-bootstrap-toasts)

This package provides an easy interface for using Bootstrap 5+ toast messages in a Laravel app.

## Installation

You can install the package via composer:

```bash
composer require retinens/laravel-bootstrap-toasts
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-bootstrap-toasts-config"
```

This is the contents of the published config file:

```php
return [
    /*
     * Defines the default auto_hide parameter
     */
    'auto_hide' => false,

    /*
     * Defines the position of the toast on the window
     */

    // "top" or "bottom"
    "position_x" => 'top',
    // "start" or "end"
    "position_y" => 'end',
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-bootstrap-toasts-views"
```


## Usage

Bootstrap should be imported in your assets and available in the window variable.

```js
window.bootstrap = require("bootstrap");
```

First, include this snippet in your Blade template

```html
<x-boostrap-toastr/>
```

Then, in your controller, call the `toast()` method to create a toast message.

```php
public function edit()
{
    toast('Post edited!');
    return redirect(route('posts.list'));
}
```

The toast method accepts the title and level as optional arguments :

```php
toast('message','level','title')
```

There are a few quick methods to modify the toast:

- `toast('Message')->success()`: Set the toast level as "success".
- `toast('Message')->info()`: Set the toast level as "info".
- `toast('Message')->error()`: Set the toast level as "danger".
- `toast('Message')->warning()`: Set the toast level as "warning".


- `toast('Message')->title("Toast title")`: Set the toast title.
- `toast('Message')->important()`: Add a close button to the toast.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lucas Houssa](https://github.com/WhereIsLucas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
