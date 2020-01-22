<?php
namespace Prooph\ProophessorDo\Model\Subject;

interface SubjectRepository
{
    public function add(Subject $subject);
    public function get(SubjectId $subjectId);
}