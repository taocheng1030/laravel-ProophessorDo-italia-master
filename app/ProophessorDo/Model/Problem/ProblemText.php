<?php


namespace Prooph\ProophessorDo\Model\Problem;


class ProblemText
{

    private $text;

    public static function fromString(string $text)
    {
        return new self($text);
    }

    private function __construct(string $text)
    {
        $this->text = $text;
    }

    public function toString()
    {
        return $this->text;
    }

}