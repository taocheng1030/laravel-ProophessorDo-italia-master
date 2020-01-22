<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Answer;

class AnswerChoice
{

    /**
     * @var bool
     */
    private $correctChoice;

    public static function correct()
    {
        return new self(true);
    }

    private function __construct(bool $choice)
    {
        $this->correctChoice = $choice;
    }

    public static function fromString($choice)
    {
        return new self($choice);
    }

    public static function incorrect()
    {
        return new self(false);
    }

    public function toString()
    {
        return $this->correctChoice;
    }
}