<?php


namespace App\ProophessorDo\Model\ProblemCategory;


interface ProblemCategoryRepository
{
    public function add(ProblemCategory $problemCategory);
    public function get(ProblemCategoryId $problemCategoryId): ProblemCategory;
}