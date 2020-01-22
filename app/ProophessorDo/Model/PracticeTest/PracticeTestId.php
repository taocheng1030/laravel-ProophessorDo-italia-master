<?php


namespace App\ProophessorDo\Model\PracticeTest;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PracticeTestId
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

    public static function fromString(string $practiceTestId)
    {
        return new self(Uuid::fromString($practiceTestId));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}