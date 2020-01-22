<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem;

class PassageProblemSequence
{
    private $sequence;

    public static function fromString($sequence)
    {
        return new self($sequence);
    }

    private function __construct($sequence)
    {
        $this->sequence = $sequence;
    }

    public function toString()
    {
        return $this->sequence;
    }
}