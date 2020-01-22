<?php


namespace App\ProophessorDo\Model\Section;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class SectionId
{

    /**
     * @var UuidInterface
     */
    private $uuid;

    public static function generate(): self
    {
        return new self(Uuid::uuid4());
    }

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public static function fromString(string $sectionId): self
    {
        return new self(Uuid::fromString($sectionId));
    }

    public function toString(): string
    {
        return $this->uuid->toString();
    }
}