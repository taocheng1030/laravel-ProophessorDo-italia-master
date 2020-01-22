<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class ProblemSectionId
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

    public static function fromString(String $uuid)
    {
        return new self(Uuid::fromString($uuid));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}