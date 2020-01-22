<?php


namespace App\ProophessorDo\Model\PracticeTest;


class PracticeTestReferenceId
{

    /**
     * @var string
     */
    private $refId;

    public static function fromString(string $refId)
    {
        return new self($refId);
    }

    private function __construct(string $refId)
    {
        $this->refId = $refId;
    }

    public function toString()
    {
        return $this->refId;
    }
}