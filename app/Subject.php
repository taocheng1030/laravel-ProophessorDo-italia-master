<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'read_subject';

    public $incrementing = false;

//    public function sections()
//    {
//        return $this->hasMany(Section::class, 'subject_id');
//    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'subject_id');
    }
}
