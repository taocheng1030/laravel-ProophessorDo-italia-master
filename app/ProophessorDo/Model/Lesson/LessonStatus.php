<?php


namespace Prooph\ProophessorDo\Model\Lesson;


use Assert\Assertion;

class LessonStatus
{

    const STATUS_TYPES = [
        'complete' => 1,
        'overdue' => 2,
        'due_soon' => 3,
        'due_later' => 4,
        'assigned' => 5,
        'completed_overdue' => 6
    ];

    protected $status;

    /**
     * @return LessonStatus
     * @throws \Assert\AssertionFailedException
     */
    public static function dueLater()
    {
        return new self(self::STATUS_TYPES['due_later']);
    }

    /**
     * @return LessonStatus
     * @throws \Assert\AssertionFailedException
     */
    public static function overDue()
    {
        return new self(self::STATUS_TYPES['overdue']);
    }

    /**
     * @return LessonStatus
     * @throws \Assert\AssertionFailedException
     */
    public static function dueSoon()
    {
        return new self(self::STATUS_TYPES['due_soon']);
    }

    /**
     * @return LessonStatus
     * @throws \Assert\AssertionFailedException
     */
    public static function complete()
    {
        return new self(self::STATUS_TYPES['complete']);
    }

    /**
     * LessonStatus constructor.
     * @param $status
     * @throws \Assert\AssertionFailedException
     */
    private function __construct($status)
    {
        Assertion::integer($status);
        $this->status = $status;
    }

    /**
     * @param $status
     * @return LessonStatus
     * @throws \Assert\AssertionFailedException
     */
    public static function fromString($status)
    {
        $key = array_search($status, self::STATUS_TYPES);
        Assertion::notNull($key);
        return new self(self::STATUS_TYPES[$key]);
    }

    public function toString()
    {
        return $this->status;
    }
}