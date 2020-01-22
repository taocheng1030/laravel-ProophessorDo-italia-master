<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Subject;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class SubjectId
{

    /**
     * @var UuidInterface
     */
    protected $subjectId;

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->subjectId = $uuid;
    }

    public static function fromString(string $subjectId)
    {
        return new self(Uuid::fromString($subjectId));
    }

    public function toString()
    {
        return $this->subjectId->toString();
    }
}