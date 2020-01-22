<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection;


interface ProblemSectionRepository
{
    public function add(ProblemSection $problemSection);
    public function get(ProblemSectionId $problemSectionId): ProblemSection;
}