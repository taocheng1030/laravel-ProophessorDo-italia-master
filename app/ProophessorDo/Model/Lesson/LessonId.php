<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Lesson;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class LessonId
{

    /**
     * @var Uuid
     */
    protected $lessonId;

    /**
     * @return LessonId
     */
    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    private function __construct(UuidInterface $lessonId)
    {
        $this->lessonId = $lessonId;
    }

    public static function fromString($lessonId)
    {
        return new self(Uuid::fromString($lessonId));
    }

    public function toString()
    {
        return $this->lessonId->toString();
    }
}