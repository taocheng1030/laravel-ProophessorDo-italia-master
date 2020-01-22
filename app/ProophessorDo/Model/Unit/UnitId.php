<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Unit;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class UnitId
{

    /**
     * @var UuidInterface
     */
    protected $uuid;

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public static function fromString($unitId)
    {
        return new self(Uuid::fromString($unitId));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}