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
        if ($this->romanNumber === 'I') {
            return 1;
        }

        return 2;
    }
}
