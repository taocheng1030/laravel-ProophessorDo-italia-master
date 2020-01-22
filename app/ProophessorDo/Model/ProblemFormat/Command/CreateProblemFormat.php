<?php


namespace App\ProophessorDo\Model\ProblemFormat\Command;


use App\ProophessorDo\Model\ProblemFormat\ProblemFormatActive;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatId;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatName;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class CreateProblemFormat extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $id,
        string $name,
        bool $active
    ) {
        return new self(
            [
                'id' => $id,
                'name' => $name,
                'active' => $active
            ]
        );
    }

    public function id()
    {
        return ProblemFormatId::fromString($this->payload['id']);
    }

    public function name()
    {
        return ProblemFormatName::fromString($this->payload['name']);
    }

    public function active()
    {
        return ProblemFormatActive::fromBoolean($this->payload['active']);
    }
}