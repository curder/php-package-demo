<?php

namespace Curder\PhpPackageDemo;

class Weight
{
    private float $kilograms;

    /**
     * Weight constructor.
     *
     * @param  float  $kilograms
     */
    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    /**
     * @param  float  $kilograms
     *
     * @return static
     */
    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    /**
     * @return float
     */
    public function toLabs() : float
    {
        return $this->kilograms * 2.204623;
    }
}
