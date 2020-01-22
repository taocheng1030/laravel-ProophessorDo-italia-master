<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Student;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class StudentId
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

    public static function fromString($studentId)
    {
        return new self(Uuid::fromString($studentId));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}