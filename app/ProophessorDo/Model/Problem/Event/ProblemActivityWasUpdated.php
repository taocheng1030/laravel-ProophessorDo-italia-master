<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemActivityWasUpdated extends AggregateChanged
{

    /**
     * @var ProblemActive
     */
    protected $active;

    /**
     * @var ProblemId
     */
    protected $problemId;

    public static function withData(ProblemId $problemId, ProblemActive $oldActivity, ProblemActive $activity)
    {
        $event = self::occur(
            $problemId->toString(),
            [
                'oldActive' => $oldActivity->toString(),
                'active' => $activity->toString()
            ]
        );
        $event->active = $activity;
        return $event;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;
    }

    public function active()
    {
        if (!$this->active) {
            $this->active = ProblemActive::fromString($this->payload['active']);
        }
        return $this->active;
    }
}