<?php


namespace App\ProophessorDo\Model\Video;


use Webmozart\Assert\Assert;

class FileName
{

    private $name;

    public static function fromString($name)
    {
        return new self($name);
    }

    private function __construct(string $name)
    {
        Assert::endsWith($name, '.mp4');
        $this->name = $name;
    }

    public function toString()
    {
        return $this->name;
    }
}