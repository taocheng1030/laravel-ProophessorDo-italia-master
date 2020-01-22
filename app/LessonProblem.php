<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonProblem extends Model
{
    public $incrementing = false;
    protected $table = 'read_lesson_problem';
}
