<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;

use App\ProophessorDo\Model\ProblemStats\Event\ProblemStatsCreated;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemStats extends AggregateRoot
{


    use AggregateRootTrait;

    /**
     * @var ProblemStatsId
     */
    protected $problemStatsId;

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var Correct
     */
    protected $correct;

    /**
     * @var Incorrect
     */
    protected $incorrect;

    /**
     * @var Pending
     */
    protected $pending;

    /**
     * @var Skipped
     */
    protected $skipped;

    public static function create(
        ProblemStatsId $problemStatsId,
        ProblemId $problemId,
        Correct $correct,
        Incorrect $incorrect,
        Skipped $skipped,
        Pending $pending
    ) {
        $self = new self();
        $self->recordThat(
            ProblemStatsCreated::withData(
                $problemStatsId,
                $problemId,
                $correct,
                $incorrect,
                $skipped,
                $pending
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->problemStatsId->toString();
    }

    public function whenProblemStatsCreated(ProblemStatsCreated $event)
    {
        $this->problemStatsId = $event->problemStatsId();
        $this->problemId = $event->problemId();
        $this->correct = $event->correct();
        $this->incorrect = $event->incorrect();
        $this->pending = $event->pending();
        $this->skipped = $event->skipped();
    }
}