<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;

class ProblemReferenceNumberWasUpdated extends AggregateChanged
{

    /**
     * @var ProblemReferenceNumber
     */
    protected $referenceNumber;

    /**
     * @var ProblemId
     */
    protected $problemId;

    public static function withData(ProblemId $problemId, ProblemReferenceNumber $oldReferenceNumber, ProblemReferenceNumber $referenceNumber)
    {
        $event = self::occur(
            $problemId->toString(),
            [
                'oldReferenceNumber' => $oldReferenceNumber->toString(),
                'referenceNumber' => $referenceNumber->toString()
            ]
        );
        $event->referenceNumber = $referenceNumber;
        return $event;
    }

    public function problemId()
    {

        if (!$this->problemId) {
            $this->problemId =  ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;

    }

    public function referenceNumber()
    {
        if (!$this->referenceNumber) {
            $this->referenceNumber = ProblemReferenceNumber::fromString($this->payload['referenceNumber']);
        }
        return $this->referenceNumber;
    }
}