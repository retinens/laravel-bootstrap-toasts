<?php

namespace Retinens\LaravelBootstrapToasts\Http\Components;

use Illuminate\View\Component;

class ToastrComponent extends Component
{
    public function __construct(
        public string $xPosition = '',
        public string $yPosition = '',
        public bool $autoHide = true,
    ) {
        $this->xPosition ?: config('laravel-bootstrap-toasts.position_x', 'top');
        $this->yPosition ?: config('laravel-bootstrap-toasts.position_y', 'end');
        $this->autoHide = config('laravel-bootstrap-toasts.auto_hide', true);
    }

    public function render()
    {
        return view('boostrap-toasts::message');
    }
}
