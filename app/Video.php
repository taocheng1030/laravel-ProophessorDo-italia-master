<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Video extends Model
{
    use Rememberable;

    protected $table = 'read_video';
}
