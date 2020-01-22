<?php


namespace App\ProophessorDo\Model\Course;


use Webmozart\Assert\Assert;

class CourseRefId
{

    /**
     * @var string
     */
    protected $refId;

    public static function fromString(string $refId)
    {
        Assert::notNull($refId);
        return new self($refId);
    }

    private function __construct($refId)
    {
        $this->refId = $refId;
    }

    public function toString()
    {
        return $this->refId;
    }
}