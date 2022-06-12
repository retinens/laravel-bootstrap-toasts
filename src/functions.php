<?php

if (! function_exists('toast')) {
    function toast($message = null, $title = null, $level = 'info')
    {
        $toaster = app(\Retinens\LaravelBootstrapToasts\LaravelBootstrapToastsServiceProvider::class);
        if (! is_null($message)) {
            return $toaster->toast($message, $level, $title);
        }

        return $toaster;
    }
}
