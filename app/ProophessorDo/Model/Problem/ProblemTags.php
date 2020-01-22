<?php


namespace Prooph\ProophessorDo\Model\Problem;


class ProblemTags
{

    /**
     * @var string
     */
    protected $tags;

    public static function fromString(string $tags)
    {
        return new self($tags);
    }

    private function __construct(string $tags)
    {
        $this->tags = $tags;
    }

    public function toString()
    {
        return $this->tags;
    }
}