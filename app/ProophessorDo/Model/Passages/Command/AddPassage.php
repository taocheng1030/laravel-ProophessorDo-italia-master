<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Command;

use App\ProophessorDo\Model\Passages\PassageActive;
use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageNotes;
use App\ProophessorDo\Model\Passages\PassageReferenceId;
use App\ProophessorDo\Model\Passages\PassageText;
use App\ProophessorDo\Model\Passages\PassageTitle;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\Common\Messaging\Command;

class AddPassage extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $passageId,
        string $passageReferenceId,
        string $passageText,
        string $passageTitle,
        string $testId,
        string $subjectId,
        int $passageActive,
        string $passageNotes
    ) {
        return new self(
            [
                'passage_id' => $passageId,
                'reference_id' => $passageReferenceId,
                'text' => $passageText,
                'title' => $passageTitle,
                'testId' => $testId,
                'subjectId' => $subjectId,
                'active' => $passageActive,
                'notes' => $passageNotes
            ]
        );
    }

    public function passageId()
    {
        return PassageId::fromString($this->payload['passage_id']);
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

    public function passageActive()
    {
        return PassageActive::fromString($this->payload['active']);
    }

    public function subjectId(): PassageSubjectId
    {
        return PassageSubjectId::fromString($this->payload['subjectId']);
    }

    public function notes()
    {
        return PassageNotes::fromString($this->payload['notes']);
    }
}