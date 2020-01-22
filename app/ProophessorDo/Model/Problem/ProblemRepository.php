<?php


namespace Prooph\ProophessorDo\Model\Problem;


interface ProblemRepository
{
    public function add(Problem $problem);
    public function get(ProblemId $problemId): Problem;
}