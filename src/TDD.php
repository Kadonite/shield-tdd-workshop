<?php
namespace TDD;

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
        'V' => 5,
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
            while (strpos($this->romanNumber, $match) === 0) {
                $result += $value;
                $this->romanNumber = substr($this->romanNumber, strlen($match));
            }
        }
        return $result;
    }
}

