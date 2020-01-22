<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems\Event;

use App\EventSourcing\Model\LessonProblems\LessonProblemActive;
use App\EventSourcing\Model\LessonProblems\LessonProblemId;
use App\EventSourcing\Model\LessonProblems\LessonProblemPage;
use App\EventSourcing\Model\LessonProblems\LessonProblemSequence;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemWasAddedToLesson extends AggregateChanged
{

    /**
     * @var LessonProblemId
     */
    private $lessonProblemId;

    /**
     * @var LessonId
     */
    private $lessonId;

    /**
     * @var ProblemId
     */
    private $problemId;

    /**
     * @var LessonTypeId
     */
    private $lessonTypeId;

    /**
     * @var LessonProblemSequence
     */
    private $sequence;

    /**
     * @var LessonProblemPage
     */
    private $page;

    /**
     * @var LessonProblemActive
     */
    private $active;

    public static function withData(
        LessonProblemId $lessonProblemId,
        LessonId $lessonId,
        ProblemId $problemId,
        LessonTypeId $lessonTypeId,
        LessonProblemSequence $sequence,
        LessonProblemPage $page,
        LessonProblemActive $active
    ) {
        $event = self::occur(
            $lessonProblemId->toString(),
            [
                'lesson_id' => $lessonId->toString(),
                'problem_id' => $problemId->toString(),
                'lesson_type_id' => $lessonTypeId->toString(),
                'sequence' => $sequence->toString(),
                'page' => $page->toString(),
                'active' => $active->toString()
            ]
        );
        return $event;
    }

    public function lessonProblemId(): LessonProblemId
    {
        if (!$this->lessonProblemId) {
            $this->lessonProblemId = LessonProblemId::fromString($this->aggregateId());
        }
        return $this->lessonProblemId;
    }

    public function lessonId(): LessonId
    {
        if (!$this->lessonId) {
            $this->lessonId = LessonId::fromString($this->payload['lesson_id']);
        }
        return $this->lessonId;
    }

    public function problemId(): ProblemId
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->payload['problem_id']);
        }
        return $this->problemId;
    }

    public function lessonTypeId(): LessonTypeId
    {
        if (!$this->lessonTypeId) {
            $this->lessonTypeId = LessonTypeId::fromString($this->payload['lesson_type_id']);
        }
        return $this->lessonTypeId;
    }

    public function sequence(): LessonProblemSequence
    {
        if (!$this->sequence) {
            $this->sequence = LessonProblemSequence::fromString($this->payload['sequence']);
        }
        return $this->sequence;
    }

    public function page(): LessonProblemPage
    {
        if (!$this->page) {
            $this->page = LessonProblemPage::fromString($this->payload['page']);
        }
        return $this->page;
    }

    public function active(): LessonProblemActive
    {
        if (!$this->active) {
            $this->active = LessonProblemActive::fromString($this->payload['active']);
        }
        return $this->active;
    }
}