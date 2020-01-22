<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class LessonSection extends Model
{
    use Rememberable;
    public $incrementing = false;
    protected $table = 'read_lesson_section';
}
