<?php

namespace Jeyelscott\MyFirstPackage;

class MyFirstPackageClass
{
    public static function kilometers(float $kilometers): self
    {
        return new static($kilometers);
    }

    public function __construct(protected float $kilometers)
    {
    }

    public function toMiles(): float
    {
        return $this->kilometers * 0.62137;
    }
}
