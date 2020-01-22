<?php


namespace Prooph\ProophessorDo\Model\Answer;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class AnswerId
{

    /**
     * @var UuidInterface
     */
    protected $uuid;

    public static function fromString(string $uuid)
    {
        return new self(Uuid::fromString($uuid));
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