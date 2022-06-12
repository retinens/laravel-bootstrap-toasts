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
        $this->xPosition ?: config('bootstrap-toasts.position_x', 'end');
        $this->yPosition ?: config('bootstrap-toasts.position_y', 'bottom');
        $this->autoHide = config('bootstrap-toasts.auto_hide', true);
    }

    public function render()
    {
        return view('bootstrap-toasts::message');
    }
}
