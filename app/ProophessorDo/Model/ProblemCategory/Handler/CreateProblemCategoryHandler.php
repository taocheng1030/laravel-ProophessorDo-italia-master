<?php


namespace App\ProophessorDo\Model\ProblemCategory\Handler;


use App\ProophessorDo\Model\ProblemCategory\Command\CreateProblemCategory;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategory;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryRepository;

class CreateProblemCategoryHandler
{
    /**
     * @var ProblemCategoryRepository
     */
    private $repository;

    public function __construct(ProblemCategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateProblemCategory $command)
    {
        $problemCategory = ProblemCategory::create(
            $command->problemCategoryId(),
            $command->problemId(),
            $command->categoryId()
        );
        $this->repository->add($problemCategory);
    }
}