<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageText;
use App\ProophessorDo\Model\Passages\PassageTitle;
use Prooph\EventSourcing\AggregateChanged;

class PassageTitleUpdated extends AggregateChanged
{

    /**
     * @var PassageId
     */
    private $passageId;

    /**
     * @var PassageTitle
     */
    private $title;

    public static function withData(
        PassageId $passageId,
        PassageTitle $oldTitle,
        PassageTitle $title)
    {
        /**
         * @var PassageTitleUpdated $event
         */
        $event = self::occur(
            $passageId->toString(),
            [
                'old_title' => $oldTitle->toString(),
                'title' => $title->toString()
            ]
        );
        $event->title = $title;
        return $event;
    }

    public function passageId(): PassageId
    {
        if (!$this->passageId) {
            $this->passageId = PassageId::fromString($this->aggregateId());
        }
        return $this->passageId;
    }

    public function title()
    {
        if (!$this->title) {
            $this->title = PassageText::fromString($this->payload['title']);
        }
        return $this->title;
    }
}