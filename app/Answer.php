<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Answer extends Model
{
    use Rememberable;

    protected $table = 'read_answer';
    public $incrementing = false;
}
