<?php
declare(strict_types=1);

namespace Tests\Unit\EventSourcing\Model\Unit\Event;

use App\ProophessorDo\Model\Unit\UnitMultiLineLabel;
use App\ProophessorDo\Model\Unit\UnitReferenceId;
use DateTimeImmutable;
use Prooph\ProophessorDo\Model\Unit\Event\UnitWasCreated;
use Prooph\ProophessorDo\Model\Unit\Unit;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\Unit\UnitLabel;
use Prooph\ProophessorDo\Model\User\UserId;
use Tests\Unit\TestCase;

class UnitWasCreatedTest extends TestCase
{
    public function testUnitWasCreated()
    {
        $unitId = UnitId::generate();
        $name = UnitLabel::fromString('Unit #1');
        $referenceId = UnitReferenceId::fromString('abc1');
        $description = UnitMultiLineLabel::fromString('This is a description');
        $createdBy = UserId::generate();
        $unit = Unit::create(
            $unitId,
            $name,
            $referenceId,
            $description,
            $createdBy
        );
        self::assertInstanceOf(Unit::class, $unit);
        $events = $this->popRecordedEvent($unit);
        self::assertCount(1, $events);

        /**
         * @var UnitWasCreated $event
         */
        $event = $events[0];
        self::assertInstanceOf(UnitWasCreated::class, $event);

        $expectedResult = [
            'name' => $name->toString(),
            'referenceId' => $referenceId->toString(),
            'description' => $description->toString(),
            'createdBy' => $createdBy->toString()
        ];
        self::assertEquals($expectedResult, $event->payload());

        self::assertInstanceOf(UnitId::class, $event->unitId());
        self::assertInstanceOf(UnitLabel::class, $event->name());
        self::assertInstanceOf(UnitReferenceId::class, $event->referenceId());
        self::assertInstanceOf(UnitMultiLineLabel::class, $event->description());
        self::assertInstanceOf(UserId::class, $event->createBy());
        self::assertInstanceOf(DateTimeImmutable::class, $event->createdAt());
    }
}
