<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\EventSourcing\AggregateChanged;

class PassageTestUpdated extends AggregateChanged
{

    /**
     * @var TestId
     */
    private $testId;

    /**
     * @var PassageId
     */
    private $passageId;

    public static function withData(PassageId $passageId, TestId $oldTestId, TestId $testId)
    {
       $event = self::occur(
            $passageId->toString(),
            [
                'old_test_id' => $oldTestId,
                'test_id' => $testId
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

    public function testId(): TestId
    {
        if (!$this->testId) {
            $this->testId = TestId::fromString($this->payload['test_id']);
        }
        return $this->testId;
    }
}