<?php

namespace Curder\PhpPackageDemo;

/**
 * Class Weight
 *
 * @package Curder\PhpPackageDemo
 */
class Temperature
{
    /**
     * @var float
     */
    private $celsius;

    /**
     * Temperature constructor.
     *
     * @param  float  $celsius
     */
    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    /**
     * @param  float  $celsius
     *
     * @return static
     */
    public static function forCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    /**
     * @return float
     */
    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
