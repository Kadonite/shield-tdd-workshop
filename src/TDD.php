<?php
namespace TDD;

class TDD
{
    /**
     * @var string
     */
    private $stringNumber;

    public function __construct(string $stringNumber)
    {
        $this->stringNumber = $stringNumber;
    }

    public function toDecimal()
    {
        return 1;
    }
}
