<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Unit extends Model
{
    use Rememberable;
    public $incrementing = false;
    protected $table = 'read_unit';

    public function subjects()
    {
        return $this->belongsTo(
            Subject::class,
            'subject_id'
        );
    }

    public function lessons()
    {
        return $this->hasMany(
            Lesson::class,
            'unit_id'
        );
    }
}
