<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems\Command;

use App\EventSourcing\Model\LessonProblems\LessonProblemActive;
use App\EventSourcing\Model\LessonProblems\LessonProblemId;
use App\EventSourcing\Model\LessonProblems\LessonProblemPage;
use App\EventSourcing\Model\LessonProblems\LessonProblemSequence;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class AddProblemToLesson extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $lessonProblemId,
        string $lessonId,
        string $problemId,
        string $lessonTypeId,
        string $sequence,
        string $page,
        string $active
    ) {
        return new self(
            [
                'lesson_problem_id' => $lessonProblemId,
                'lesson_id' => $lessonId,
                'problem_id' => $problemId,
                'lesson_type_id' => $lessonTypeId,
                'sequence' => $sequence,
                'page' => $page,
                'active' => $active
            ]
        );
    }

    public function lessonProblemId()
    {
        return LessonProblemId::fromString($this->payload['lesson_problem_id']);
    }

    public function lessonId()
    {
        return LessonId::fromString($this->payload['lesson_id']);
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }

    public function lessonTypeId()
    {
        return LessonTypeId::fromString($this->payload['lesson_type_id']);
    }

    public function sequence()
    {
        return LessonProblemSequence::fromString($this->payload['sequence']);
    }

    public function page()
    {
        return LessonProblemPage::fromString($this->payload['page']);
    }

    public function active()
    {
        return LessonProblemActive::fromString($this->payload['active']);
    }
}