<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Passages extends Model
{
    use Rememberable;

    public $incrementing = false;

    protected $table = 'read_passage';

    public function subjects()
    {
        return $this->belongsTo(
            PassageSubject::class,
            'passageSubjectId'
        );
    }

    public function problems()
    {
        return $this->belongsToMany(
            Problem::class,
            'read_passage_problems',
            'passage_id',
            'problem_id'
        );
    }
}
