<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages;

interface PassageRepository
{
    public function add(Passage $passage);
    public function get(PassageId $passageId): Passage;
}