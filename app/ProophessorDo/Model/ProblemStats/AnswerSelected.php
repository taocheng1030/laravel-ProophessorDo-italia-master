<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;

class AnswerSelected
{

    private $answerSelected;

    public static function fromInt($answersSelected)
    {
        return new self($answersSelected);
    }

    private function __construct(int $answersSelected)
    {
        $this->answerSelected = $answersSelected;
    }

    public function toString()
    {
        return $this->answerSelected;
    }
}