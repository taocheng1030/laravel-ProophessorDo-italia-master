<?php


namespace App\ProophessorDo\Model\Passages;


class PassageActive
{

    /**
     * @var bool
     */
    protected $active;

    public static function active()
    {
        return new self(true);
    }

    private function __construct(bool $active)
    {
        $this->active = $active;
    }

    public static function fromString($passageActive): PassageActive
    {
        return new self($passageActive != 0);
    }

    public function toString()
    {
        return $this->active;
    }
}