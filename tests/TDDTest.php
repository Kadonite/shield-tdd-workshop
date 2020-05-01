<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TDD\TDD;

final class TDDTest extends TestCase
{
    public function testNumberOne()
    {
        $romanNumerals = new TDD('I');

        return $this->assertEquals(1, $romanNumerals->toDecimal());
    }
}
