<?php


namespace App\ProophessorDo\Model\Video;


use Webmozart\Assert\Assert;

class Height
{

    /**
     * @var int
     */
    private $height;

    public static function fromInt($height)
    {
        return new self($height);
    }

    private function __construct(int $height)
    {
        Assert::length($height, 3);
        $this->height = $height;
    }

    public function toString()
    {
        return $this->height;
    }
}