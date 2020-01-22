<?php


namespace Prooph\ProophessorDo\Model\Lesson;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class LessonCreatedBy
{

    /**
     * @var UuidInterface
     */
    protected $uuid;

    public static function fromString($uuid)
    {
        return new self(Uuid::fromString($uuid));
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}