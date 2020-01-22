<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Lesson extends Model
{
    use Rememberable;

    public $incrementing = false;
    protected $table = 'read_lesson';
    protected $with = ['subjects', 'units', 'lessonType', 'lessonProblems'];

    public function subjects()
    {
        return $this->belongsTo(
            Subject::class,
            'subject_id'
            );
    }

    public function units()
    {
        return $this->belongsTo(
            Unit::class,
            'unit_id'
        );
    }

    public function lessonType()
    {
        return $this->belongsTo(
            LessonType::class,
            'type'
        );
    }

    public function lessonProblems()
    {
        return $this->belongsToMany(
            Problem::class,
            'read_lesson_problem',
            'lesson_id',
            'problem_id'
        );
    }
}
