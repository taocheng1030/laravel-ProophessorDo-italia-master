<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem;

use App\ProophessorDo\Model\PassageProblem\Event\PassageProblemSequenceWasChanged;
use App\ProophessorDo\Model\PassageProblem\Event\ProblemAddedToPassage;
use App\ProophessorDo\Model\Passages\PassageId;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class PassageProblem extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var PassageProblemSequence
     */
    private $sequence;

    /**
     * @var PassageProblemId
     */
    private $passageProblemId;

    /**
     * @var PassageId
     */
    private $passageId;

    /**
     * @var ProblemId
     */
    private $problemId;

    public static function create(
        PassageProblemId $passageProblemId,
        PassageId $passageId,
        ProblemId $problemId,
        PassageProblemSequence $sequence
    ) {
        $self = new self();
        $self->recordThat(
            ProblemAddedToPassage::withData(
                $passageProblemId,
                $passageId,
                $problemId,
                $sequence
            )
        );
        return $self;
    }

    public function changeSequence($sequence)
    {
        $this->recordThat(
            PassageProblemSequenceWasChanged::withData(
                $this->passageProblemId,
                $this->sequence,
                $sequence
            )
        );
    }

    protected function aggregateId(): string
    {
        return $this->passageProblemId->toString();
    }

    public function whenProblemAddedToPassage(ProblemAddedToPassage $event) {
        $this->passageProblemId = $event->passageProblemId();
        $this->passageId = $event->passageId();
        $this->problemId = $event->problemId();
        $this->sequence = $event->sequence();
    }
}