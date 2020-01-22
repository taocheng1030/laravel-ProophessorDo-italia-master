<?php


namespace App\ProophessorDo\Model\Test;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class TestId
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

    public static function fromString(string $testId)
    {
        return new self(Uuid::fromString($testId));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}