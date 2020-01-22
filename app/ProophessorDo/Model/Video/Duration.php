<?php


namespace App\ProophessorDo\Model\Video;


use Webmozart\Assert\Assert;

class Duration
{

    private $duration;

    public static function fromInt(int $duration)
    {
        return new self($duration);
    }

    private function __construct(int $duration)
    {
        Assert::minLength($duration, 1);
        $this->duration = $duration;
    }

    public function toString()
    {
        return $this->duration;
    }
}