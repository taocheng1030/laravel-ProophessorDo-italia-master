<?php


namespace Prooph\ProophessorDo\Model\Answer;


class AnswerContent
{

    /**
     * @var string
     */
    private $content;

    public static function fromString(string $content)
    {
        return new self($content);
    }

    private function __construct(string $content)
    {
        $this->content = $content;
    }

    public function toString()
    {
        return $this->content;
    }
}