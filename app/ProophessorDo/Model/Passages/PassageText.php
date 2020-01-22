<?php


namespace App\ProophessorDo\Model\Passages;


class PassageText
{

    /**
     * @var string
     */
    private $text;

    public static function fromString(string $text)
    {
        return new self($text);
    }

    private function __construct(string $text)
    {
        $this->text = $text;
    }

    public function toString()
    {
        return $this->text;
    }
}