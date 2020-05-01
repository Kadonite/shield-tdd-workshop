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
            [10, 'X'],
            [11, 'XI'],
            [49, 'IL'],
            [45, 'XLV'],
            [100, 'C'],
            [99, 'IC'],
            [90, 'XC'],
            [87, 'LXXXVII'],
            [98, 'XCVIII'],
            [1000, 'M'],
            [999, 'IM'],
            [992, 'XMII'],
            [950, 'CML'],
            [900, 'CM'],
        ];
    }
}
