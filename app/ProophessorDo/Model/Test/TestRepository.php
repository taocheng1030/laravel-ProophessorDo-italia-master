<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Test;

interface TestRepository
{

    public function add(Test $test);
    public function get(TestId $testId);
}