<?php
declare(strict_types=1);
Namespace Prooph\ProophessorDo\Model\Test\Command;

use App\ProophessorDo\Model\Test\Test;
use App\ProophessorDo\Model\Test\TestRepository;

class CreateTestHandler
{
    /**
     * @var TestRepository
     */
    private $repository;

    public function __construct(TestRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateTest $command)
    {
        $test = Test::create(
            $command->testId(),
            $command->name()
        );
        $this->repository->add($test);
    }
}