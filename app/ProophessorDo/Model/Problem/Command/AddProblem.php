<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Video\VideoId;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemCreatedOn;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemText;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\User\UserId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class AddProblem extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $problemId,
        string $text,
        int $referenceNumber,
        string $subject,
        string $format,
        int $difficulty,
        string $createdBy,
        string $createdOn,
        string $section,
        string $tags,
        string $notes,
        string $answerChoices,
        bool $active
    ) {
        return new self(
            [
                'phone_id' => $problemId,
                'problem_text' => $text,
                'reference_number' => $referenceNumber,
                'subject_id' => $subject,
                'format_id' => $format,
                'difficulty_id' => (int) $difficulty,
                'created_by' => $createdBy,
                'created_on' => $createdOn,
                'section_id' => $section,
                'tags' => $tags,
                'notes' => $notes,
                'answer_choices' => $answerChoices,
                'active' => $active
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['phone_id']);
    }

    public function text()
    {
        return ProblemText::fromString($this->payload['problem_text']);
    }

    public function referenceNumber()
    {
        return ProblemReferenceNumber::fromString($this->payload['reference_number']);
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subject_id']);
    }

    public function formatId()
    {
        return ProblemFormat::fromString($this->payload['format_id']);
    }

    public function difficultyId()
    {
        return ProblemDifficulty::fromInt($this->payload['difficulty_id']);
    }

    public function createdBy()
    {
        return UserId::fromString($this->payload['created_by']);
    }

    public function createdOn()
    {
        return ProblemCreatedOn::fromString($this->payload['created_on']);
    }

    public function section()
    {
        return SectionId::fromString($this->payload['section_id']);
    }

    public function categories()
    {
        return Categories::fromArray(json_decode($this->payload['tags']));
    }

    public function notes()
    {
        return ProblemNotes::fromString($this->payload['notes']);
    }

    public function answers()
    {
        return Answers::fromArray(json_decode($this->payload['answer_choices']));
    }

    public function active()
    {
        return ProblemActive::fromString($this->payload['active']);
    }
}