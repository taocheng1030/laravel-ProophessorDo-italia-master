<?php


namespace Prooph\ProophessorDo\Model\Answer;


class AnswerType
{

    /**
     * @var string
     */
    private $type;

    public static function text()
    {
        return new self("text");
    }

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function fromString($type)
    {
        return new self($type);
    }

    public function toString()
    {
        return $this->type;
    }
}