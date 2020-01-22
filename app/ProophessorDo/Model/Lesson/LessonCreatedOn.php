<?php


namespace Prooph\ProophessorDo\Model\Lesson;


use DateTimeImmutable;

class LessonCreatedOn
{
    const FORMAT = 'Y-m-d H:i:s';

    /**
     * @var DateTimeImmutable
     */
    protected $dateTimeImmutable;

    public static function generate()
    {
        return new self(new DateTimeImmutable());
    }

    private function __construct(DateTimeImmutable $dateTimeImmutable)
    {
        $this->dateTimeImmutable = $dateTimeImmutable;
    }

    public static function fromString(string $createdOn)
    {
        return new self(DateTimeImmutable::createFromFormat(self::FORMAT, $createdOn));
    }

    public function toString()
    {
        return $this->dateTimeImmutable->format(self::FORMAT);
    }
}