<?php


namespace App\ProophessorDo\Model\ProblemCategory\Command;


use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class CreateProblemCategory extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $problemCategoryId,
        string $problemId,
        string $categoryId
    ) {
        return new self(
            [
                'problemCategoryId' => $problemCategoryId,
                'problemId' => $problemId,
                'categoryId' => $categoryId
            ]
        );
    }

    public function problemCategoryId()
    {
        return ProblemCategoryId::fromString(
            $this->payload['problemCategoryId']
        );
    }

    public function problemId()
    {
        return ProblemId::fromString(
            $this->payload['problemId']
        );
    }

    public function categoryId()
    {
        return CategoryId::fromString(
            $this->payload['categoryId']
        );
    }
}