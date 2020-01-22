<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Problem\Handler;

use App\ProophessorDo\Model\Problem\Command\AddCategoryToProblem;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategory;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryId;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryRepository;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;
use Prooph\ProophessorDo\Model\Category\CategoryId;

class AddCategoryToProblemHandler
{
    /**
     * @var AnswerRepository
     */
    private $repository;

    /**
     * AddCategoryToProblemHandler constructor.
     * @param ProblemCategoryRepository $repository
     */
    public function __construct(ProblemCategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(AddCategoryToProblem $command)
    {
        $categories = $command->categories();
        foreach($categories as $category) {
            $problemCategory = ProblemCategory::create(
                ProblemCategoryId::generate(),
                $command->problemId(),
                CategoryId::fromString($category)
            );
            $this->repository->add($problemCategory);
        }
    }
}