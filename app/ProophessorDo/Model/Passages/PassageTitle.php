<?php


namespace App\ProophessorDo\Model\Passages;


class PassageTitle
{

    /**
     * @var string
     */
    private $title;

    public static function fromString(string $string)
    {
        return new self($string);
    }

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function toString()
    {
        return $this->title;
    }
}