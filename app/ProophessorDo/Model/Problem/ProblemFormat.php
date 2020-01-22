<?php


namespace Prooph\ProophessorDo\Model\Problem;


class ProblemFormat
{

    /**
     * @var string
     */
    protected $format;

    public static function multipleChoice()
    {
        return new self("Multiple");
    }

    public static function fillInTheBlank()
    {
        return new self("Fill n The Blank");
    }

    private function __construct(string $format)
    {
        $this->format = $format;
    }

    public static function fromString(string $format)
    {
        return new self($format);
    }

    public function toString()
    {
        return $this->format;
    }
}