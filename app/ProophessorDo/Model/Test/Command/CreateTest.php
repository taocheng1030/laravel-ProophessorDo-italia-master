<?php
declare(strict_types=1);
Namespace Prooph\ProophessorDo\Model\Test\Command;

use App\ProophessorDo\Model\Test\TestId;
use App\ProophessorDo\Model\Test\TestName;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class CreateTest extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withDate($testId, $testName)
    {
        return new self([
            'testId' => $testId,
            'name' => $testName
        ]);
    }

    public function testId()
    {
        return TestId::fromString($this->payload['testId']);
    }

    public function name()
    {
        return TestName::fromString($this->payload['name']);
    }
}