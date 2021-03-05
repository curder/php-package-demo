<?php
namespace Curder\PhpPackageDemo\Tests;

use PHPUnit\Framework\TestCase;
use Curder\PhpPackageDemo\Temperature;

/**
 * Class WeightTest
 *
 * @package Curder\PhpPackageDemo\Tests
 *
 * @see https://www.metric-conversions.org/temperature/celsius-to-fahrenheit.htm
 */
class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_covert_celsius_to_fahrenheit() : void
    {
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();

        self::assertEquals(212, $fahrenheit);
    }
}
