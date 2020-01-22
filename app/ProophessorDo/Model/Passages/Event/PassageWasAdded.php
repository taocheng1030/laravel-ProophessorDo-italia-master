<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\PassageActive;
use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageNotes;
use App\ProophessorDo\Model\Passages\PassageReferenceId;
use App\ProophessorDo\Model\Passages\PassageText;
use App\ProophessorDo\Model\Passages\PassageTitle;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class PassageWasAdded extends AggregateChanged
{

    public static function withData(
        PassageId $passageId,
        PassageReferenceId $referenceId,
        PassageText $passageText,
        PassageTitle $passageTitle,
        TestId $testId,
        PassageSubjectId $subjectId,
        PassageActive $passageActive,
        PassageNotes $notes
    ) {
        $event = self::occur(
            $passageId->toString(),
            [
                'reference_id' => $referenceId->toString(),
                'text' => $passageText->toString(),
                'title' => $passageTitle->toString(),
                'testId' => $testId->toString(),
                'subjectId' => $subjectId->toString(),
                'active' => $passageActive->toString(),
                'notes' => $notes->toString()
            ]
        );
        return $event;
    }

    public function passageId()
    {
        return PassageId::fromString($this->aggregateId());
    }

    public function referenceId()
    {
        return PassageReferenceId::fromString($this->payload['reference_id']);
    }

    public function passageText()
    {
        return PassageText::fromString($this->payload['text']);
    }

    public function passageTitle()
    {
        return PassageTitle::fromString($this->payload['title']);
    }

    public function testId()
    {
        return TestId::fromString($this->payload['testId']);
    }

    public function subjectId()
    {
        return PassageSubjectId::fromString($this->payload['subjectId']);
    }

    public function passageActive()
    {
        return PassageActive::fromString($this->payload['active']);
    }

    public function passageNotes()
    {
        return PassageNotes::fromString($this->payload['notes']);
    }
}