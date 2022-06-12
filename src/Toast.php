<?php

namespace Retinens\LaravelBootstrapToasts;

use ArrayAccess;

class Toast implements ArrayAccess
{
    public string $title;

    public string $message;

    public string $level = 'info';

    public bool $autoHide;

    public function __construct(array $attributes = [])
    {
        $this->autoHide = config('bootstrap-toasts.auto_hide', true);
        $this->update($attributes);
    }

    public function update($attributes = []): static
    {
        $attributes = array_filter($attributes);

        foreach ($attributes as $key => $attribute) {
            $this->$key = $attribute;
        }

        return $this;
    }

    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        //
    }
}
