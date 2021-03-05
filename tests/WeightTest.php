<?php

namespace Curder\PhpPackageDemo\Tests;

use Curder\PhpPackageDemo\Weight;
use PHPUnit\Framework\TestCase;

/**
 * Class WeightTest
 *
 * @package Curder\PhpPackageDemo\Tests
 */
class WeightTest extends TestCase
{
    /** @test */
    public function it_can_covert_kilograms_to_labs(): void
    {
        $labs = Weight::fromKilograms(100)->toLabs();

        self::assertEquals(220.4623, $labs);
    }
}
