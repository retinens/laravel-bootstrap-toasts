<?php

namespace Retinens\LaravelBootstrapToasts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Retinens\LaravelBootstrapToasts\LaravelBootstrapToasts
 */
class LaravelBootstrapToasts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-bootstrap-toasts';
    }
}
