<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class ProblemStatsId
{

    /**
     * @var UuidInterface
     */
    private $problemStatusId;

    public static function withString($problemStatsId)
    {
        return new self(Uuid::fromString($problemStatsId));
    }

    private function __construct(UuidInterface $problemStatusId)
    {
        $this->problemStatusId = $problemStatusId;
    }

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    public function toString()
    {
        return $this->problemStatusId->toString();
    }
}