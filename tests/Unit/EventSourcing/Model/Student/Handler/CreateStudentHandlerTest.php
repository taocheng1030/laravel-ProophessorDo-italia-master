<?php

namespace Tests\Unit\EventSourcing\Model\Student\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Student\Command\CreateStudent;
use Prooph\ProophessorDo\Model\Student\Handler\CreateStudentHandler;
use Prooph\ProophessorDo\Model\Student\StudentId;
use Prooph\ProophessorDo\Model\Student\StudentRepository;
use Prooph\ProophessorDo\Model\User\UserId;
use Tests\Unit\TestCase;

class CreateStudentHandlerTest extends TestCase
{
    /**
     * @var StudentRepository|Mockery\Mock
     */
    protected $repository;

    /**
     * @var CreateStudentHandler
     */
    protected $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(StudentRepository::class);
        $this->handler = new CreateStudentHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreateStudent::withData(
            StudentId::generate()->toString(),
            UserId::generate()->toString()
        );
        $this->repository->shouldReceive('add');
        self::assertNull($this->handler->invoke($command));
    }
}
