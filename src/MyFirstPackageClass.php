<?php

namespace Jeyelscott\MyFirstPackage;

class MyFirstPackageClass
{
    protected float $kilometers;

    public static function kilometers(float $kilometers): self
    {
        return new static($kilometers);
    }

    public function __construct(float $kilometers)
    {
        $this->kilometers = $kilometers;
    }

    public function toMiles(): float
    {
        return $this->kilometers * 0.62137;
    }
}
