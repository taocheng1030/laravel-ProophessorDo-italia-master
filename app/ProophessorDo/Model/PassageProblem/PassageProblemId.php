<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PassageProblemId
{

    private $uuid;

    public static function fromString($passageProblemId)
    {
        return new self(Uuid::fromString($passageProblemId));
    }

    private function __construct(UuidInterface $passageProblemId)
    {
        $this->uuid = $passageProblemId;
    }

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}