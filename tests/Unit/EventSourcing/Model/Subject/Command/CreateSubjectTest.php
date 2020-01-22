<?php

namespace Tests\Unit\EventSourcing\Model\Subject\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Subject\SubjectName;
use Tests\Unit\TestCase;

class CreateSubjectTest extends TestCase
{
    /**
     * @var CreateSubject
     */
    protected $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreateSubject::withData(
            SubjectId::generate()->toString(),
            SubjectName::fromString('test')->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testSubjectId()
    {
        self::assertInstanceOf(SubjectId::class, $this->command->subjectId());
    }

    public function testSubjectName()
    {
        self::assertInstanceOf(SubjectName::class, $this->command->subjectName());
    }
}
