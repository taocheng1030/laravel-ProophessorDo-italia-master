<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Command;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class UpdatePassageTest extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $passageId,
        string $passageTestId
    ) {
        return new self(
            [
                'id' => $passageId,
                'test_id' => $passageTestId
            ]
        );
    }

    public function passageId()
    {
        return PassageId::fromString($this->payload['id']);
    }

    public function testId()
    {
        return TestId::fromString($this->payload['test_id']);
    }
}