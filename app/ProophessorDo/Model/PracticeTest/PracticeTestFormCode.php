<?php


namespace App\ProophessorDo\Model\PracticeTest;


class PracticeTestFormCode
{

    /**
     * @var string
     */
    private $formCode;

    public static function fromString(string $formCode)
    {
        return new self($formCode);
    }

    private function __construct(string $formCode)
    {
        $this->formCode = $formCode;
    }

    public function toString()
    {
        return $this->formCode;
    }
}