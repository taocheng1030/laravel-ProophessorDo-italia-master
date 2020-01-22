<?php


namespace App\ProophessorDo\Model\Video;


use Webmozart\Assert\Assert;

class Width
{

    private $width;

    public static function fromInt($width)
    {
        return new self($width);
    }

    private function __construct(int $width)
    {
        Assert::length($width, 3);
        $this->width = $width;
    }

    public function toString()
    {
        return $this->width;
    }
}