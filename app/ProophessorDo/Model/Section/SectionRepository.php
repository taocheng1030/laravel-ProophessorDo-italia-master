<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Section;

interface SectionRepository
{
    public function add(Section $section);
    public function get(SectionId $sectionId);
}