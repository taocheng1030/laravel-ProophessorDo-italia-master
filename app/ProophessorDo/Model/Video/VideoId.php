<?php


namespace App\ProophessorDo\Model\Video;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class VideoId
{

    /**
     * @var UuidInterface
     */
    private $uuid;

    public static function fromString($uuid)
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