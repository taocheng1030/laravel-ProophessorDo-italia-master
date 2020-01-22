<?php


namespace App\ProophessorDo\Model\PracticeTest;


interface PracticeTestRepository
{
    public function add(PracticeTest $practiceTest);
    public function get(PracticeTestId $id);
}