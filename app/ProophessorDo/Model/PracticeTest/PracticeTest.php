<?php


namespace App\ProophessorDo\Model\PracticeTest;


use App\ProophessorDo\Model\PracticeTest\Event\PracticeTestCreated;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\User\UserId;

class PracticeTest extends AggregateRoot
{
    use AggregateRootTrait;
    /**
     * @var PracticeTestId
     */
    protected $practiceTestId;

    public static function create(
        PracticeTestId $id,
        PracticeTestName $name,
        PracticeTestDescription $description,
        PracticeTestFormCode $formCode,
        PracticeTestReferenceId $referenceId,
        TestId $testId,
        UserId $userId
    )
    {
        $self = new self();
        $self->recordThat(
            PracticeTestCreated::withData(
                $id,
                $name,
                $description,
                $formCode,
                $referenceId,
                $testId,
                $userId
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->practiceTestId->toString();
    }

    public function whenPracticeTestCreated(PracticeTestCreated $event)
    {
        $this->practiceTestId = $event->aggregateId();
    }
}