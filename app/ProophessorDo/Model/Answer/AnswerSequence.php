<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer;

class AnswerSequence
{

    /**
     * @var int
     */
    protected $sequence;

    public static function fromString($sequence)
    {
        return new self((int)$sequence);
    }

    private function __construct(int $sequence)
    {
        $this->sequence = $sequence;
    }

    public function toString()
    {
        return $this->sequence;
    }
}