<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class LessonSectionId
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

    public static function withString($id)
    {
        return new self(Uuid::fromString($id));
    }

    public function toString()
    {
        return $this->uuid->toString();
    }
}