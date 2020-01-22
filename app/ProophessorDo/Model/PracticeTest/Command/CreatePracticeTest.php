<?php


namespace App\ProophessorDo\Model\PracticeTest\Command;


use App\ProophessorDo\Model\PracticeTest\PracticeTest;
use App\ProophessorDo\Model\PracticeTest\PracticeTestDescription;
use App\ProophessorDo\Model\PracticeTest\PracticeTestFormCode;
use App\ProophessorDo\Model\PracticeTest\PracticeTestId;
use App\ProophessorDo\Model\PracticeTest\PracticeTestName;
use App\ProophessorDo\Model\PracticeTest\PracticeTestReferenceId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\User\UserId;

class CreatePracticeTest extends Command implements PayloadConstructable
{

    use PayloadTrait;

    public static function withData(
        string $practiceId,
        string $name,
        string $description,
        string $formCode,
        string $referenceId,
        string $testId,
        string $userId
    ) {
        return new self(
            [
                'practiceTestId' => $practiceId,
                'name'=> $name,
                'description' => $description,
                'formCode' => $formCode,
                'referenceId' => $referenceId,
                'testId' => $testId,
                'userId' => $userId
            ]
        );
    }

    public function practiceTestId()
    {
        return PracticeTestId::fromString($this->payload['practiceTestId']);
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

    public function userId()
    {
        return UserId::fromString($this->payload['userId']);
    }
}