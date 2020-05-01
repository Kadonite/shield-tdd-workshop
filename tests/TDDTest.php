<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TDD\TDD;

final class TDDTest extends TestCase
{
    /**
     * @param int $expected
     * @param string $romanNumber
     * @dataProvider romanNumbers
     */
    public function testRomanToDecimals($expected, $romanNumber)
    {
        $romanNumerals = new TDD($romanNumber);

        return $this->assertEquals($expected, $romanNumerals->toDecimal());

    }

    /**
     * @return array
     */
    public function romanNumbers()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [9, 'IX'],
        ];
    }
}
