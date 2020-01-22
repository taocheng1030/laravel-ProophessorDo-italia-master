<?php


namespace App\ProophessorDo\Model\PassageSubjects;


interface PassageSubjectRepository
{
    public function add(PassageSubject $passageSubject);
    public function get(PassageSubjectId $passageSubjectId): PassageSubject;
}