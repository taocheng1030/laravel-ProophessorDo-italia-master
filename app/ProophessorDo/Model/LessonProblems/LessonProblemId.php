<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class LessonProblemId
{
    /**
     * @var UuidInterface
     */
    private $uuid;

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public static function fromString($lessonProblemId)
    {
        return new self(Uuid::fromString($lessonProblemId));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}