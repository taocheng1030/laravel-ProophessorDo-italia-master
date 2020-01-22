<?php

namespace Tests\Unit\EventSourcing\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\Event\PassageWasAdded;
use App\ProophessorDo\Model\Passages\Passage;
use App\ProophessorDo\Model\Passages\PassageActive;
use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageNotes;
use App\ProophessorDo\Model\Passages\PassageText;
use App\ProophessorDo\Model\Passages\PassageTitle;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Tests\Unit\TestCase;

class PassageWasAddedTest extends TestCase
{
    public function testProblemWasAdded()
    {
        $passageId = PassageId::generate();
        $passageText = PassageText::fromString('This is passage text');
        $passageTitle = PassageTitle::fromString('This is a passage title');
        $testId = TestId::generate();
        $subjectId = PassageSubjectId::generate();
        $active = PassageActive::active();
        $notes = PassageNotes::fromString('This is passage notes');

        $passage = Passage::create(
            $passageId,
            $passageText,
            $passageTitle,
            $testId,
            $subjectId,
            $active,
            $notes
        );
        self::assertInstanceOf(Passage::class, $passage);
        $events = $this->popRecordedEvent($passage);
        self::assertCount(1, $events);

        /**
         * @var PassageWasAdded $event
         */
        $event = $events[0];
        self::assertInstanceOf(AggregateChanged::class, $event);
        self::assertInstanceOf(PassageWasAdded::class, $event);

        $expectedResult = [
            'text' => $passageText->toString(),
            'testId' => $testId->toString(),
            'subjectId' => $subjectId->toString(),
            'active' => $active->toString(),
            'notes' => $notes->toString(),
            'title' => $passageTitle->toString()
        ];
        self::assertEquals($expectedResult, $event->payload());
        self::assertInstanceOf(PassageText::class, $event->passageText());
        self::assertInstanceOf(PassageTitle::class, $event->passageTitle());
        self::assertInstanceOf(TestId::class, $event->testId());
        self::assertInstanceOf(PassageSubjectId::class, $event->subjectId());
        self::assertInstanceOf(PassageActive::class, $event->passageActive());
        self::assertInstanceOf(PassageNotes::class, $event->passageNotes());

    }
}
