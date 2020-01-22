<?php

namespace Tests\Unit\EventSourcing\Model\Student\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Student\Command\CreateStudent;
use Prooph\ProophessorDo\Model\Student\StudentId;
use Prooph\ProophessorDo\Model\User\UserId;
use Tests\Unit\TestCase;

class CreateStudentTest extends TestCase
{
    /**
     * @var CreateStudent
     */
    protected $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreateStudent::withData(
            StudentId::generate()->toString(),
            UserId::generate()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testStudentId()
    {
        self::assertInstanceOf(StudentId::class, $this->command->studentId());
    }

    public function testUserId()
    {
        self::assertInstanceOf(UserId::class, $this->command->userId());
    }
}
