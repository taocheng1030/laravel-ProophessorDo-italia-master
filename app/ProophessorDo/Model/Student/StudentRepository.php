<?php
namespace Prooph\ProophessorDo\Model\Student;

interface StudentRepository
{
    public function add(Student $student);
    public function get(StudentId $studentId);
}