<?php
namespace TDD;

use phpDocumentor\Reflection\Types\Integer;

class TDD
{
    /**
     * @var string
     */
    private $romanNumber;

    /**
     * @var array
     */
    private $matches = [
        'IV' => 4,
        'III' => 3,
        'II' => 2,
        'I' => 1,
    ];

    /**
     * TDD constructor.
     *
     * @param string $romanNumber
     */
    public function __construct(string $romanNumber)
    {
        $this->romanNumber = $romanNumber;
    }

    /**
     * Converts to decimal.
     *
     * @return int
     */
    public function toDecimal() : int
    {
        $result = 0;

        foreach ($this->matches as $match => $value) {
            if (strpos($this->romanNumber, $match) !== false) {
                $result += $this->matches[$match];
                $this->romanNumber = str_replace($match, '', $this->romanNumber);
            }
        }

        return $result;
    }
}
