<?php


namespace App\ProophessorDo\Model\ProblemFormat;


interface ProblemFormatRepository
{
    public function add(ProblemFormat $problemFormat);
    public function get(ProblemFormatId $problemFormatId): ProblemFormat;
}