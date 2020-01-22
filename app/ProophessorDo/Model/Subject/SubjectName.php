<?php


namespace Prooph\ProophessorDo\Model\Subject;


class SubjectName
{

    /**
     * @var string
     */
    protected $name;

    public static function fromString(string $name)
    {
        return new self(
            $name
        );
    }

    private function __construct($name)
    {
        $this->name = $name;
    }

    public function toString()
    {
        return $this->name;
    }
}