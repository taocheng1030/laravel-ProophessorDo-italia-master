<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Problem;
use Illuminate\Support\Facades\DB;

class ProblemRepository
{
    const CACHE_TIME = 5;

    /**
     * @var int
     */
    protected $limit = 200;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var
     */
    protected $search = null;

    /**
     * @var
     */
    protected $hasVideo = null;

    /**
     * @var
     */
    protected $active = 1;

    /**
     * @var string
     */
    protected $categories;

    /**
     * @var
     */
    protected $subject;

    /**
     * @var string
     */
    protected $afterDate;

    /**
     * @var string
     */
    protected $beforeDate;

    /**
     * @var string
     */
    protected $course;

    /**
     * @var Problem
     */
    private $problem;

    public function __construct(Problem $problem)
    {
        $this->problem = $problem;
    }

    public function setPage($page)
    {
        if ($page) {
            $this->page = $page;
        }
        return $this;
    }

    public function setSearch($search)
    {
        if ($search) {
            $this->search = $search;
        }
        return $this;
    }

    public function hasVideo($hasVideo) {
        $this->hasVideo = $hasVideo;
        return $this;
    }

    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function setAfterDate($afterDate)
    {
        $this->afterDate = $afterDate;
        return $this;
    }

    public function setBeforeDate($beforeDate)
    {
        $this->beforeDate = $beforeDate;
        return $this;
    }

    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    public function get()
    {
        return $this->problem
            ->with(['answers' => function ($q) {
                $q->orderBy('sequence', 'asc');
            }, 'categories', 'passages'])
            ->limit($this->limit)
            ->when($this->page, function($query) {
                return $query->offset($this->page);
            })
            ->when($this->search != null, function($query) {
                return $query->where('text', 'like', '%' . $this->search . '%')
                    ->orWhere('notes', 'like', '%' . $this->search . '%');
            })
            ->when($this->hasVideo != null, function($query) {
                return $query->where('video_id', '!=', null);
            })
            ->when($this->subject, function($query){
                return $query->where('subject_id', $this->subject);
            })
            ->when($this->categories, function($query) {
                return $query->whereHas('categories', function($q) {
                    return $q->where('category_id', '=', $this->categories);
                });
            })
            ->when($this->afterDate, function($query) {
               return $query->whereDate('created_at', '>=', $this->afterDate);
            })
            ->when($this->beforeDate, function($query) {
                return $query->whereDate('created_at', '<=', $this->beforeDate);
            })
            ->when($this->course, function($query) {
                return $query->where('section_id', $this->course);
            })
            ->when($this->active, function($query) {
                return $query->where('active', $this->active);
            })
            ->orderBy(DB::raw("CAST(`reference_number` as unsigned)"))
            ->get();
    }

    public function count()
    {
        return ceil(
            $this->problem->remember(self::CACHE_TIME)
                ->with('answers')
                ->count()/200
        );
    }
}