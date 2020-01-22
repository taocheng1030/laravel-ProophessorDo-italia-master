<?php


namespace App\ProophessorDo\Model\PracticeTest\Handler;


use App\ProophessorDo\Model\PracticeTest\Command\CreatePracticeTest;
use App\ProophessorDo\Model\PracticeTest\PracticeTest;
use App\ProophessorDo\Model\PracticeTest\PracticeTestRepository;

class CreatePracticeTestHandler
{
    /**
     * @var PracticeTestRepository
     */
    private $repository;

    public function __construct(PracticeTestRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreatePracticeTest $command)
    {
        $practiceTest = PracticeTest::create(
            $command->practiceTestId(),
            $command->name(),
            $command->description(),
            $command->formCode(),
            $command->referenceId(),
            $command->testId(),
            $command->userId()
        );
        $this->repository->add($practiceTest);

    }
}