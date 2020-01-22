<?php


namespace App\ProophessorDo\Model\Passages;


class PassageNotes
{

    /**
     * @var string
     */
    protected $note;

    public static function fromString(string $note)
    {
        return new self($note);
    }

    private function __construct(string $note)
    {
        $this->note = $note;
    }

    public function toString()
    {
        return $this->note;
    }
}