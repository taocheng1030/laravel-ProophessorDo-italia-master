<?php


namespace Prooph\ProophessorDo\Model\Lesson;


use Assert\Assert;
use Prooph\EventStore\Util\Assertion;

class LessonType
{

    const READING = 'reading';
    const MODULE = 'module';
    const DRILL = 'drill';
    const Workbook = 'workbook';
    const Standard = 'standard';

    /**
     * @var string
     */
    protected $type;


    public static function reading()
    {
        return new self(
            self::READING
        );
    }

    public static function module()
    {
        return new self(
            self::MODULE
        );
    }

    public static function drill()
    {
        return new self(
            self::DRILL
        );
    }

    public static function workbook()
    {
        return new self(
            self::Workbook
        );
    }

    public static function standard()
    {
        return new self(
            self::Standard
        );
    }

    private function __construct(string $type)
    {
        Assertion::inArray($type, [self::READING]);

        $this->type = $type;
    }

    public static function fromString($lessonType)
    {
        Assertion::inArray($lessonType, [self::READING, self::DRILL, self::MODULE]);
        return new self($lessonType);
    }

    public function toString()
    {
        return $this->type;
    }
}