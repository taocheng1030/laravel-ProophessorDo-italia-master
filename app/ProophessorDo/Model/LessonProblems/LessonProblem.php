<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems;

use App\EventSourcing\Model\LessonProblems\Event\ProblemWasAddedToLesson;
use App\ProophessorDo\Model\Lesson\LessonPage;
use App\ProophessorDo\Model\Lesson\LessonSequence;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class LessonProblem extends AggregateRoot
{
    use AggregateRootTrait;

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
     * @var LessonSequence
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
        $self = new self();
        $self->recordThat(
            ProblemWasAddedToLesson::withData(
                $lessonProblemId,
                $lessonId,
                $problemId,
                $lessonTypeId,
                $sequence,
                $page,
                $active
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->lessonProblemId->toString();
    }

    public function whenProblemWasAddedToLesson(ProblemWasAddedToLesson $event)
    {
        $this->lessonProblemId = $event->lessonProblemId();
        $this->lessonId = $event->lessonId();
        $this->problemId = $event->problemId();
        $this->lessonTypeId = $event->lessonTypeId();
        $this->sequence = $event->sequence();
        $this->page = $event->page();
        $this->active = $event->active();
    }
}