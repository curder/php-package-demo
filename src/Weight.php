<?php

namespace Curder\PhpPackageDemo;

/**
 * Class Weight
 *
 * @package Curder\PhpPackageDemo
 */
class Weight
{
    /**
     * @var float
     */
    private $value;

    /**
     * Weight constructor.
     *
     * @param  float  $value
     */
    public function __construct(float $value)
    {
        $this->value = $value;
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
     * @param  float  $labs
     *
     * @return static
     */
    public static function fromLabs(float $labs): self
    {
        return new static($labs);
    }

    /**
     * @return float
     */
    public function toKilograms(): float
    {
        return round($this->value / 2.204623, 5);
    }

    /**
     * @return float
     */
    public function toLabs() : float
    {
        return $this->value * 2.204623;
    }
}
