<?php


namespace Prooph\ProophessorDo\Model\Student\Handler;


use Prooph\ProophessorDo\Model\Student\Command\CreateStudent;
use Prooph\ProophessorDo\Model\Student\Student;
use Prooph\ProophessorDo\Model\Student\StudentRepository;

class CreateStudentHandler
{
    /**
     * @var StudentRepository
     */
    protected $repository;

    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function invoke(CreateStudent $command)
    {
        $student = Student::create(
            $command->studentId(),
            $command->userId()
        );
        $this->repository->add($student);
    }
}