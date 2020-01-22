<?php

namespace Tests\Unit\EventSourcing\Model\Passages\Command;

use App\ProophessorDo\Model\Passages\Command\AddPassage;
use App\ProophessorDo\Model\Passages\PassageActive;
use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageNotes;
use App\ProophessorDo\Model\Passages\PassageText;
use App\ProophessorDo\Model\Passages\PassageTitle;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonName;
use Prooph\ProophessorDo\Model\Lesson\LessonType;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Tests\Unit\TestCase;

class AddPassageTest extends TestCase
{
    /**
     * @var AddPassage
     */
    protected $command;

    public function setUp()
    {
        parent::setUp();
        $this->command = AddPassage::withData(
            PassageId::generate()->toString(),
            PassageText::fromString('Passage text')->toString(),
            PassageTitle::fromString('This is a passage title that takes up two lines.')->toString(),
            TestId::generate()->toString(),
            SectionId::generate()->toString(),
            SubjectId::generate()->toString(),
            PassageActive::active()->toString(),
            PassageNotes::fromString('this is a note')->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testPassageId()
    {
        self::assertInstanceOf(PassageId::class, $this->command->passageId());
    }

    public function testPassageText()
    {
        self::assertInstanceOf(PassageText::class, $this->command->passageText());
    }

    public function testPassageTitle()
    {
        self::assertInstanceOf(PassageTitle::class, $this->command->passageTitle());
    }

    public function testTestId()
    {
        self::assertInstanceOf(TestId::class, $this->command->testId());
    }

    public function testSubjectId()
    {
        self::assertInstanceOf(PassageSubjectId::class, $this->command->subjectId());
    }

    public function testPassageActive()
    {
        self::assertInstanceOf(PassageActive::class, $this->command->passageActive());
    }

    public function testPassageNotes()
    {
        self::assertInstanceOf(PassageNotes::class, $this->command->notes());
    }
}
