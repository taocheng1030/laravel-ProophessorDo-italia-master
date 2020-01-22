<?php
declare(strict_types=1);
namespace App\ProophessorDo\Model\Test\Event;

use App\ProophessorDo\Model\Test\TestId;
use App\ProophessorDo\Model\Test\TestName;
use Prooph\EventSourcing\AggregateChanged;

class TestWasCreated extends AggregateChanged
{

    /**
     * @var TestId
     */
    private $testId;

    /**
     * @var TestName
     */
    private $name;

    public static function withData(TestId $testId, TestName $name)
    {
        $event = self::occur(
            $testId->toString(),
            [
                'name' => $name->toString()
            ]
        );
        return $event;
    }

    public function testId()
    {
        if (!$this->testId) {
            $this->testId = TestId::fromString($this->aggregateId());
        }
        return $this->testId;
    }

    public function name()
    {
        if (!$this->name) {
            $this->name = TestName::fromString($this->aggregateId());
        }
        return $this->name;
    }
}