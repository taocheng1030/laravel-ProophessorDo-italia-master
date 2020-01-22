<?php


namespace Prooph\ProophessorDo\Model\Problem;


class ProblemNotes
{

    /**
     * @var string
     */
    protected $notes;

    public static function fromString(string $notes)
    {
        return new self($notes);
    }

    private function __construct(string $notes)
    {
        $this->notes = $notes;
    }

    public function toString()
    {
        return $this->notes;
    }
}