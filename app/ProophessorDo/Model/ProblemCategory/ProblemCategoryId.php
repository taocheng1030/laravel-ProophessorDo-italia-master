<?php


namespace App\ProophessorDo\Model\ProblemCategory;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class ProblemCategoryId
{

    /**
     * @var UuidInterface
     */
    private $uuid;

    public static function fromString(string $problemCategoryId)
    {
        return new self(Uuid::fromString($problemCategoryId));
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public function toString()
    {
        return $this->uuid->toString();
    }

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }
}