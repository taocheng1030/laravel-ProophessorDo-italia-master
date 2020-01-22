<?php

namespace Prooph\ProophessorDo\Model\Category\Handler;

use Prooph\ProophessorDo\Model\Category\Category;
use Prooph\ProophessorDo\Model\Category\CategoryRepository;
use Prooph\ProophessorDo\Model\Category\Command\CreateCategory;

class CreateCategoryHandler
{
    /**
     * @var CategoryRepository
     */
    protected $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateCategory $command)
    {

        $tag = Category::create(
            $command->tagId(),
            $command->tagName(),
            $command->subjectId()
        );


        $this->repository->add($tag);
    }
}