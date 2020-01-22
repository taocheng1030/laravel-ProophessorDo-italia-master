<?php

namespace Tests\Unit\EventSourcing\Model\Problem\Event;

use App\ProophessorDo\Model\Section\SectionId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemWasAdded;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemCreatedOn;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemSection;
use Prooph\ProophessorDo\Model\Problem\ProblemTags;
use Prooph\ProophessorDo\Model\Problem\ProblemText;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\User\UserId;
use Ramsey\Uuid\Uuid;
use Tests\Unit\TestCase;

class ProblemWasAddedTest extends TestCase
{
    public function testProblemWasAdded()
    {
        $problemId = ProblemId::generate();
        $text = ProblemText::fromString('test');
        $referenceNumber = ProblemReferenceNumber::fromString('123abc');
        $subjectId = SubjectId::generate();
        $format =  ProblemFormat::multipleChoice();
        $problemDifficulty = ProblemDifficulty::fromString(1);
        $createdOn = ProblemCreatedOn::generate();
        $createdBy = UserId::generate();
        $section = SectionId::generate();
        $categories = Categories::fromArray()->addCategory(
            CategoryId::generate()
        )->addCategory(CategoryId::generate());
        $notes = ProblemNotes::fromString(2);
        $answers = Answers::fromArray()->addAnswer(
                AnswerContent::fromString('Answer 1'),
                AnswerChoice::correct()
            )->addAnswer(
                AnswerContent::fromString('Answer 2'),
                AnswerChoice::incorrect()
            );
        $active = ProblemActive::active();
        $problem = Problem::create(
            $problemId,
            $text,
            $referenceNumber,
            $subjectId,
            $format,
            $problemDifficulty,
            $createdBy,
            $createdOn,
            $section,
            $categories,
            $notes,
            $answers,
            $active
        );
        self::assertInstanceOf(Problem::class, $problem);
        $events = $this->popRecordedEvent($problem);
        /**
         * @var ProblemWasAdded $event
         */
        $event = $events[0];
        self::assertInstanceOf(ProblemWasAdded::class, $event);
        self::assertInstanceOf(AggregateChanged::class, $event);

        $expectedResult = [
            'text' => $text->toString(),
            'reference_number' => $referenceNumber->toString(),
            'subject_id' => $subjectId->toString(),
            'difficulty' => $problemDifficulty->toString(),
            'created_at' => $createdOn->toString(),
            'created_by' => $createdBy->toString(),
            'section_id' => $section->toString(),
            'categories' => $categories->toString(),
            'notes' => $notes->toString(),
            'answers' => $answers->toString(),
            'active' => $active->toString(),
            'format_id' => $format->toString(),
        ];
        self::assertEquals($expectedResult, $event->payload());
        self::assertInstanceOf(ProblemId::class, $event->problemId());
        self::assertInstanceOf(ProblemCreatedOn::class, $event->createdOn());
        self::assertInstanceOf(ProblemText::class, $event->text());
        self::assertInstanceOf(ProblemReferenceNumber::class, $event->referenceNumber());
        self::assertInstanceOf(SubjectId::class, $event->subjectId());
        self::assertInstanceOf(ProblemFormat::class, $event->format());
        self::assertInstanceOf(ProblemDifficulty::class, $event->difficulty());
        self::assertInstanceOf(UserId::class, $event->createdBy());
        self::assertInstanceOf(SectionId::class, $event->sectionId());
        self::assertInstanceOf(Categories::class, $event->categories());
        self::assertInstanceOf(ProblemNotes::class, $event->notes());
        self::assertInstanceOf(Answers::class, $event->answers());
        self::assertInstanceOf(ProblemActive::class, $event->active());
    }
}
