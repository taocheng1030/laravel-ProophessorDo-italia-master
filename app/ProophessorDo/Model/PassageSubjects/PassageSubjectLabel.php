<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageSubjects;

use Prooph\EventStore\Util\Assertion;

class PassageSubjectLabel
{

    protected $label;

    public static function withString($label): PassageSubjectLabel
    {
        return new self($label);
    }

    /**
     * PassageSubjectLabel constructor.
     * @param string $label
     * @throws \Assert\AssertionFailedException
     */
    private function __construct(string $label)
    {
        Assertion::string($label);
        $this->label = $label;
    }

    public function toString()
    {
        return $this->label;
    }
}