<?php

namespace Prooph\ProophessorDo\Model\Category;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class CategoryId
{

    protected $uuid;

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public static function fromString(string $uuid)
    {
        return new self(Uuid::fromString($uuid));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}