<?php


namespace App\ProophessorDo\Model\Passages;


class PassageReferenceId
{

    private $referenceId;

    public static function fromString($referenceId)
    {
        return new self((int) $referenceId);
    }

    private function __construct(int $referenceId)
    {
        $this->referenceId = $referenceId;
    }

    public function toString()
    {
        return $this->referenceId;
    }
}