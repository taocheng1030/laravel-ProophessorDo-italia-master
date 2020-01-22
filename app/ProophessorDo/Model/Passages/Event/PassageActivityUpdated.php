<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\PassageActive;
use App\ProophessorDo\Model\Passages\PassageId;
use Prooph\EventSourcing\AggregateChanged;

class PassageActivityUpdated extends AggregateChanged
{

    /**
     * @var PassageId
     */
    private $passageId;

    /**
     * @var PassageActive
     */
    private $active;

    public static function withData(
        PassageId $passageId,
        PassageActive $oldActivity,
        PassageActive $activity
    ) {
        $event = self::occur(
            $passageId->toString(),
            [
                'old_activity' => $oldActivity->toString(),
                'activity' => $activity->toString()
            ]
        );
        return $event;
    }

    public function passageId(): PassageId
    {
        if (!$this->passageId) {
            $this->passageId = PassageId::fromString($this->aggregateId());
        }
        return $this->passageId;
    }

    public function active()
    {
        if ($this->active) {
            $this->active = PassageActive::fromString($this->payload['activity']);
        }
        return $this->active;
    }
}