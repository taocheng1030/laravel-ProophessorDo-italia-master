<?php


namespace Prooph\ProophessorDo\Model\Problem;


class ProblemReferenceNumber
{

    protected $referenceNumber;

    public static function fromString($referenceNumber)
    {
        return new self($referenceNumber);
    }

    private function __construct($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function toString()
    {
        return $this->referenceNumber;
    }
}