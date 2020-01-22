<?php


namespace App\ProophessorDo\Model\Problem\Command;


use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class AddCategoryToProblem extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $problemId,
        string $categories
    )
    {
        return new self(
            [
                'problem_id' => $problemId,
                'answer_choices' => $categories
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }

    public function categories()
    {
        return Categories::fromArray(json_decode($this->payload['categories']));
    }
}