<?php

namespace Retinens\LaravelToastr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Retinens\LaravelToastr\LaravelToastr
 */
class LaravelToastr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-toastr';
    }
}
