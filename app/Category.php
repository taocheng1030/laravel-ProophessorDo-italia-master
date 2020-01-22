<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'read_category';

    public $incrementing = false;

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
