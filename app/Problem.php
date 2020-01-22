<?php
declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Problem extends Model
{
    use Rememberable;

    protected $table = 'read_problem';

    public $incrementing = false;

    protected $casts = [
        'reference_number' => 'integer'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'problem_id');
    }

    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            'read_problem_category',
            'problem_id',
            'category_id'
        );
    }

    public function section()
    {
        return $this->hasOne(
            Section::class,
            'section_id'
        );
    }

    public function passages()
    {
        return $this->belongsToMany(
          Passages::class,
          'read_passage_problems',
            'problem_id',
            'passage_id'
        );
    }
}
