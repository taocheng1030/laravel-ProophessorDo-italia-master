<?php


namespace Prooph\ProophessorDo\Model\Category\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\CategoryName;

class CreateCategory extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $tagId,
        string $tagName,
        string $subjectId
    ) {
        return new self(
            [
                'tag_id' => $tagId,
                'tag_name' => $tagName,
                'subject_id' => $subjectId
            ]
        );

    }

    public function tagId()
    {
        return CategoryId::fromString($this->payload['tag_id']);
    }

    public function tagName()
    {
        return CategoryName::fromString($this->payload['tag_name']);
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subject_id']);
    }

    public function parentId()
    {
        return CategoryId::fromString($this->payload['category_id']);
    }
}