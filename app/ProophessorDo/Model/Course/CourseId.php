<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Course;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Webmozart\Assert\Assert;

class CourseId
{

    /**
     * @var string
     */
    protected $courseId;

    public static function fromString(string $courseId)
    {
        return new self(Uuid::fromString($courseId));
    }

    private function __construct(UuidInterface $courseId)
    {
        Assert::notNull($courseId);
        $this->courseId = $courseId;
    }

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    public function toString()
    {
        return $this->courseId->toString();
    }
}