<?php

namespace Retinens\LaravelBootstrapToasts\Http\Components;

use Illuminate\View\Component;

class ToastrComponent extends Component
{
    public function __construct(
        public string $x_position = '',
        public string $y_position = '',
        public bool $autoHide = true,
    ) {
        $this->x_position = config('bootstrap-toasts.position_x', 'end');
        $this->y_position = config('bootstrap-toasts.position_y', 'bottom');
        $this->autoHide = config('bootstrap-toasts.auto_hide', true);
    }

    public function render()
    {
        return view('bootstrap-toasts::message');
    }
}
