<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class ProblemSubjectIdWasUpdate extends AggregateChanged
{

    /**
     * @var SubjectId
     */
    protected $subjectId;

    /**
     * @var ProblemId
     */
    protected $problemId;

    public static function withData(ProblemId $problemId, SubjectId $oldSubjectId, SubjectId $subjectId)
    {
        $event = self::occur(
            $problemId->toString(),
            [
                'oldSubjectId' => $oldSubjectId->toString(),
                'subjectId' => $subjectId->toString()
            ]
        );
        $event->subjectId = $subjectId;
        return $event;
    }

    public function subjectId()
    {
        if (!$this->subjectId) {
            $this->subjectId = SubjectId::fromString($this->payload['subjectId']);
        }
        return $this->subjectId;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;
    }
}