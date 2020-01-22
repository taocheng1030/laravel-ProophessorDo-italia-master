<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use Prooph\EventSourcing\AggregateChanged;

class PassageSubjectUpdated extends AggregateChanged
{
    /**
     * @var PassageId
     */
    private $passageId;

    /**
     * @var PassageSubjectId
     */
    private $passageSubjectId;

    public static function withData(
        PassageId $passageId,
        PassageSubjectId $oldPassageSubjectId,
        PassageSubjectId $passageSubjectId)
    {
        $event = self::occur(
            $passageId->toString(),
            [
                'old_passage_subject_id' => $oldPassageSubjectId->toString(),
                'passage_subject_id' => $passageSubjectId->toString()
            ]
        );
        return $event;
    }

    public function passageId()
    {
        if (!$this->passageId) {
            $this->passageId = PassageId::fromString($this->aggregateId());
        }
        return $this->passageId;
    }

    public function passageSubjectId()
    {
        if (!$this->passageSubjectId) {
            $this->passageSubjectId = PassageSubjectId::fromString($this->payload['passage_subject_id']);
        }
        return $this->passageSubjectId;
    }
}