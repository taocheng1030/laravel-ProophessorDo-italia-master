<?php

namespace Tests\Unit\EventSourcing\Model\Unit\Command;

use App\ProophessorDo\Model\Unit\UnitMultiLineLabel;
use App\ProophessorDo\Model\Unit\UnitReferenceId;
use DateTimeImmutable;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Unit\Command\CreateUnit;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\Unit\UnitLabel;
use Prooph\ProophessorDo\Model\User\UserId;
use Tests\Unit\TestCase;

class CreateUnitTest extends TestCase
{
    /**
     * @var CreateUnit
     */
    protected $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreateUnit::withData(
            UnitId::generate()->toString(),
            UnitLabel::fromString('Unit #1')->toString(),
            UnitReferenceId::fromString('SUM6')->toString(),
            UnitMultiLineLabel::fromString('This is a description')->toString(),
            UserId::generate()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testUnitId()
    {
        self::assertInstanceOf(UnitId::class, $this->command->unitId());
    }

    public function testUnitName()
    {
        self::assertInstanceOf(UnitLabel::class, $this->command->name());
    }

    public function testReferenceId()
    {
        self::assertInstanceOf(UnitReferenceId::class, $this->command->referenceId());
    }

    public function testDescriptionId()
    {
        self::assertInstanceOf(UnitMultiLineLabel::class, $this->command->description());
    }

    public function testUserId()
    {
        self::assertInstanceOf(UserId::class, $this->command->createdBy());
    }

    public function testCreateAt()
    {
        self::assertInstanceOf(DateTimeImmutable::class, $this->command->createdAt());
    }
}
