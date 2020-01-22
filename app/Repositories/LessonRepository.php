<?php
declare(strict_types=1);

namespace App\Repositories;


use App\Lesson;

class LessonRepository
{
    const CACHE_TIME = 5;

    /**
     * @var string
     */
    protected $search;

    /**
     * @var string
     */
    protected $course;

    /**
     * @var string
     */
    protected $section;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $video;

    /**
     * @var float|int
     */
    protected $page;

    /**
     * @var string
     */
    protected $afterDate;

    /**
     * @var string
     */
    protected $beforeDate;


    protected $active;

    /**
     * @var Lesson
     */
    private $lesson;

    public function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }

    public function setPage($page)
    {
        if ($page && $page >= $this->count()) {
            $this->page = $page * 50;
        }
        return $this;
    }

    public function setSearch($search)
    {
        $this->search = $search;
        return $this;
    }

    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    public function setSection($section)
    {
        $this->section = $section;
        return $this;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function setVideo($video)
    {
        $this->video = $video;
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

    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }


    public function get()
    {
        return $this->lesson->remember(self::CACHE_TIME)
            ->with('subjects', 'units', 'lessonType')
            ->when($this->page, function($query) {
                return $query->offset($this->page);
            })
            ->when($this->search, function($query) {
                return $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('multi_line_title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->when($this->subject, function($query) {
                return $query->where('subject_id', $this->subject);
            })
            ->when($this->afterDate, function($query) {
                return $query->whereDate('created_at', '>=', $this->afterDate);
            })
            ->when($this->beforeDate, function($query) {
                return $query->whereDate('created_at', '<=', $this->beforeDate);
            })
            ->when($this->active != null, function($query) {
                return $query->where('active', $this->active);
            })
            ->limit(50)
            ->orderBy('sequence')
            ->get();
    }



    public function count()
    {
        return ceil($this->lesson->remember(self::CACHE_TIME)
            ->with('subjects', 'units', 'lessonType')
            ->count());
    }
}