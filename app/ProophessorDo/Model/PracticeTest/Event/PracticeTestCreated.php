<?php


namespace App\ProophessorDo\Model\PracticeTest\Event;


use App\ProophessorDo\Model\PracticeTest\PracticeTestDescription;
use App\ProophessorDo\Model\PracticeTest\PracticeTestFormCode;
use App\ProophessorDo\Model\PracticeTest\PracticeTestId;
use App\ProophessorDo\Model\PracticeTest\PracticeTestName;
use App\ProophessorDo\Model\PracticeTest\PracticeTestReferenceId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\User\UserId;

class PracticeTestCreated extends AggregateChanged
{

    public static function withData(
        PracticeTestId $id,
        PracticeTestName $name,
        PracticeTestDescription $description,
        PracticeTestFormCode $formCode,
        PracticeTestReferenceId $referenceId,
        TestId $testId,
        UserId $userId
    ) {
        $event = self::occur(
            $id->toString(),
            [
                'name' => $name->toString(),
                'description' => $description->toString(),
                'formCode' => $formCode->toString(),
                'referenceId' => $referenceId->toString(),
                'testId' => $testId->toString(),
                'createdBy' => $userId->toString()
            ]
        );
        return $event;
    }

    public function practiceTestId()
    {
        return PracticeTestId::fromString($this->aggregateId());
    }

    public function name()
    {
        return PracticeTestName::fromString($this->payload['name']);
    }

    public function description()
    {
        return PracticeTestDescription::fromString($this->payload['description']);
    }

    public function formCode()
    {
        return PracticeTestFormCode::fromString($this->payload['formCode']);
    }

    public function referenceId()
    {
        return PracticeTestReferenceId::fromString($this->payload['referenceId']);
    }

    public function testId()
    {
        return TestId::fromString($this->payload['testId']);
    }

    public function createdBy()
    {
        return UserId::fromString($this->payload['createdBy']);
    }
}