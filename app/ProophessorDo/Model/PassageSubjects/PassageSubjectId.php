<?php


namespace App\ProophessorDo\Model\PassageSubjects;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PassageSubjectId
{

    /**
     * @var UuidInterface
     */
    protected $uuid;

    public static function fromString($id)
    {
        return new self(Uuid::fromString($id));
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
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