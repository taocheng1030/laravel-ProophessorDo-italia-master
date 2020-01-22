<?php
namespace App\ProophessorDo\Model\Test;

use App\ProophessorDo\Model\Test\Event\TestWasCreated;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;

class Test extends AggregateRoot
{
    use AggregateRootTrait;
    /**
     * @var TestId
     */
    private $testId;

    /**
     * @var TestName
     */
    private $name;

    public static function create(TestId $testId, TestName $name)
    {
        $self = new self();
        $self->recordThat(
            TestWasCreated::withData(
                $testId,
                $name
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->testId->toString();
    }

    public function whenTestWasCreated(TestWasCreated $event)
    {
        $this->testId = $event->testId();
        $this->name = $event->name();
    }
}