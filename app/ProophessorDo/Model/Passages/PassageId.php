<?php


namespace App\ProophessorDo\Model\Passages;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PassageId
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

    public static function fromString(string $string)
    {
        return new self(Uuid::fromString($string));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}