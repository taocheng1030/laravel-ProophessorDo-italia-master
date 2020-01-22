<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProblemSection extends Model
{
    public $incrementing = false;
    protected $table = 'read_problem_section';

    public function subject()
    {
        return $this->belongsTo(
            Subject::class,
            'subject_id'
        );
    }
}
