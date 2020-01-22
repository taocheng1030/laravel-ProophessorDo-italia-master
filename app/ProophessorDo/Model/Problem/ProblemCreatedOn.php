<?php


namespace Prooph\ProophessorDo\Model\Problem;


use Carbon\Carbon;

class ProblemCreatedOn
{

    /**
     * @var \DateTimeImmutable
     */
    protected $dateTime;

    public static function fromString(string $dateTime)
    {
        return new self(\DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $dateTime));
    }

    public static function generate()
    {
        return new self(new \DateTimeImmutable());
    }

    private function __construct(\DateTimeImmutable $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function toString()
    {
        return $this->dateTime->format('Y-m-d H:i:s');
    }
}