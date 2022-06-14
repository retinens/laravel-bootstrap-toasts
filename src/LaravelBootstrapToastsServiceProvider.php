<?php

namespace Retinens\LaravelToastr;

use Illuminate\Support\Facades\Blade;
use Retinens\LaravelToastr\Http\Components\ToastrComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelToastrServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-toastr')
            ->hasConfigFile()
            ->hasViews();

        Blade::component(ToastrComponent::class, 'boostrap-toastr');

        $this->app->singleton('bootstrap-toaster', function () {
            return $this->app->make(LaravelToastr::class);
        });
    }
}
