<?php

namespace Tests\Unit\EventSourcing\Model\Lesson\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Subject\Handler\CreateSubjectHandler;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Subject\SubjectName;
use Prooph\ProophessorDo\Model\Subject\SubjectRepository;
use Tests\Unit\TestCase;

class CreateSubjectHandlerTest extends TestCase
{
    /**
     * @var SubjectRepository|Mockery\Mock
     */
    protected $repository;

    /**
     * @var CreateSubjectHandler
     */
    protected $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(SubjectRepository::class);
        $this->handler = new CreateSubjectHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreateSubject::withData(
            SubjectId::generate()->toString(),
            SubjectName::fromString('test')->toString()
        );
        $this->repository->shouldReceive('add');
        self::assertNull($this->handler->__invoke($command));
    }
}
