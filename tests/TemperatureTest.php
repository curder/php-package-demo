<?php
namespace Curder\PhpPackageDemo\Tests;

use Curder\PhpPackageDemo\Temperature;
use PHPUnit\Framework\TestCase;

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
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        self::assertEquals(212, $fahrenheit);
    }

    /** @test */
    public function it_can_covert_celsius_to_kelvin(): void
    {
        $kelvin = Temperature::fromCelsius(100)->toKelvin();

        self::assertEquals(373.15, $kelvin);
    }
}
