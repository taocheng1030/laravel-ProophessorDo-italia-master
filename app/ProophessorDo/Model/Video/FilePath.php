<?php


namespace App\ProophessorDo\Model\Video;


use Webmozart\Assert\Assert;

class FilePath
{

    private $path;

    public static function fromString($path)
    {
        return new self($path);
    }

    private function __construct($path)
    {
        $this->path = $path;
    }

    public function toString()
    {
        return $this->path;
    }
}