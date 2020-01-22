<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageSubjects;

class PassageSubjectActive
{
    /**
     * @var Boolean
     */
    private $active;

    private function __construct(bool $active)
    {
        $this->active = $active;
    }

    public static function fromString($invalid)
    {
        return new self($invalid != 0);
    }

    public function toString()
    {
        return $this->active;
    }
}