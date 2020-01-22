<?php
declare(strict_types=1);

namespace App\Repositories;


use App\Passages;

class PassagesRepository
{
    const CACHE_TIME = 5;

    /**
     * @var int
     */
    protected $page;

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
    protected $active;

    /**
     * @var Passages
     */
    private $passages;

    public function __construct(Passages $passages)
    {
        $this->passages = $passages;
    }

    public function setPage(int $page): self
    {
        if ($page && $this->page <= $this->count()) {
            $this->page = $page * 50;
        }
        return $this;
    }

    public function setSearchText($search)
    {
        $this->search = $search;
        return $this;
    }

    public function setCourse($course)
    {
        $this->course = $course;
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

    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    public function get()
    {
        return $this->passages
            ->with('subjects', 'problems')
            ->remember(self::CACHE_TIME)
            ->when($this->page, function($query) {
                return $query->offset($this->page);
            })
            ->when($this->search, function($query) {
                return $query->where('text', 'like', '%' . $this->search . '%')
                    ->orWhere('notes', 'like', '%' . $this->search . '%')
                    ->orWhere('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->course, function($query) {
                return $query->where('testId', $this->course);
            })
            ->when($this->subject, function($query){
                return $query->where('passageSubjectId', $this->subject);
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
            ->get();
    }

    public function count()
    {
        return ceil($this->passages->remember(self::CACHE_TIME)
            ->with('subjects')
            ->count()/100);
    }
}