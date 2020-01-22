<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem;

interface PassageProblemRepository
{
    /**
     * @param PassageProblem $passageProblem
     * @return null
     */
    public function add(PassageProblem $passageProblem);

    /**
     * @param PassageProblemId $passageProblemId
     * @return PassageProblem
     */
    public function get(PassageProblemId $passageProblemId): PassageProblem;
}