<?php

namespace Retinens\LaravelBootstrapToasts;

use Illuminate\Support\Facades\Blade;
use Retinens\LaravelBootstrapToasts\Http\Components\ToastrComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBootstrapToastsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-bootstrap-toasts')
            ->hasConfigFile()
            ->hasViews();

        Blade::component(ToastrComponent::class, 'boostrap-toastr');

        $this->app->singleton('bootstrap-toaster', function () {
            return $this->app->make(LaravelBootstrapToasts::class);
        });
    }
}
