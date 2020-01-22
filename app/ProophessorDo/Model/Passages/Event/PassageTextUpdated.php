<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageText;
use Prooph\EventSourcing\AggregateChanged;

class PassageTextUpdated extends AggregateChanged
{

    /**
     * @var PassageId
     */
    protected $passageId;

    /**
     * @var PassageText
     */
    protected $text;

    public static function withData(
        PassageId $passageId,
        PassageText $oldText,
        PassageText $newText
    ) {
        /**
         * @var PassageTextUpdated $event
         */
        $event = self::occur(
            $passageId->toString(),
            [
                'old_test' => $oldText->toString(),
                'text' => $newText->toString()
            ]
        );
        $event->text =$newText;
        return $event;
    }

    public function passageId(): PassageId
    {
        if (!$this->passageId) {
            $this->passageId = PassageId::fromString($this->aggregateId());
        }
        return $this->passageId;
    }

    public function text(): PassageText
    {
        if (!$this->text) {
            $this->text = PassageText::fromString($this->payload['text']);
        }
        return $this->text;
    }
}