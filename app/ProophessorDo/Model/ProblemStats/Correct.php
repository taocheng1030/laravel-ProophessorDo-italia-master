<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;


class Correct
{

    private $correct;

    public static function fromInt(int $correct)
    {
        return new self($correct);
    }

    private function __construct($correct)
    {
        $this->correct = $correct;
    }

    public function toString()
    {
        return $this->correct;
    }
}