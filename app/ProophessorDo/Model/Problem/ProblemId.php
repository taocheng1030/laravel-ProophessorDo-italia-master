<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class ProblemId
{

    /**
     * @var UuidInterface
     */
    protected $problemId;

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->problemId = $uuid;
    }

    public static function fromString($uuid)
    {
        return new self(Uuid::fromString($uuid));
    }

    public function toString()
    {
        return $this->problemId->toString();
    }
}