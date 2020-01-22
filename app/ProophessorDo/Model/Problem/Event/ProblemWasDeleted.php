<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemWasDeleted extends AggregateChanged
{
    /**
     * @var ProblemId
     */
    private $problemId;

    public static function withData(ProblemId $problemId)
    {
        $event = self::occur(
            $problemId->toString()
        );
        return $event;
    }

    public function problemId(): ProblemId
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;
    }
}