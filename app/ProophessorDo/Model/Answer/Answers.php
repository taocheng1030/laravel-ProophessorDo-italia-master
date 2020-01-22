<?php
namespace Prooph\ProophessorDo\Model\Answer;

use App\ProophessorDo\Model\Answer\AnswerSequence;

class Answers
{

    /**
     * @var AnswerId[]
     */
    protected $answers;

    public static function fromArray($answers = [])
    {
        return new self($answers);
    }

    public function __construct(array $answers)
    {
        $this->answers = $answers;
    }

    public function addAnswer(AnswerContent $content, AnswerChoice $choice, AnswerSequence $sequence)
    {
        $this->answers[] = [
            'text' => $content->toString(),
            'correct' => $choice->toString(),
            'sequence' => $sequence->toString()
            ];
        return $this;
    }

    public function toString()
    {
        return json_encode($this->answers);
    }

    public function toArray()
    {
        return $this->answers;
    }
}