<?php

namespace Tests\Unit\EventSourcing\Model\Tag\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Category\Command\CreateCategory;
use Prooph\ProophessorDo\Model\Category\Handler\CreateCategoryHandler;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\CategoryName;
use Prooph\ProophessorDo\Model\Category\CategoryRepository;
use Tests\Unit\TestCase;

class CreateCategoryHandlerTest extends TestCase
{
    /**
     * @var CategoryRepository|Mockery\Mock
     */
    protected $repository;

    /**
     * @var CreateCategoryHandler
     */
    protected $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(CategoryRepository::class);
        $this->handler = new CreateCategoryHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreateCategory::withData(
            CategoryId::generate()->toString(),
            CategoryName::fromString('Test Tag')->toString(),
            SubjectId::generate()->toString(),
            CategoryId::generate()->toString()
        );
        $this->repository->shouldReceive('add')->once();
        $this->handler->__invoke($command);
    }
}
