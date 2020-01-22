<?php

namespace Tests\Unit\EventSourcing\Model\Tag\Event;

use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Category\Event\CategoryWasCreated;
use Prooph\ProophessorDo\Model\Category\Category;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\CategoryName;
use Tests\Unit\TestCase;

class CategoryCreatedTest extends TestCase
{
    public function testTagCreated()
    {
        $tagId = CategoryId::generate();
        $name = CategoryName::fromString('test tag');
        $subjectId = SubjectId::generate();
        $parentId = CategoryId::generate();

        $tag = Category::create(
            $tagId,
            $name,
            $subjectId,
            $parentId
        );
        self::assertInstanceOf(Category::class, $tag);
        $events = $this->popRecordedEvent($tag);
        self::assertCount(1, $events);

        /**
         * @var CategoryWasCreated $event
         */
        $event = $events[0];

        self::assertInstanceOf(CategoryWasCreated::class, $event);

        $expectedResult = [
            'name' => $name->toString(),
            'subject_id' => $subjectId->toString(),
//            'parent_id' => $parentId->toString()
        ];
        self::assertEquals($expectedResult, $event->payload());

        self::assertEquals($tagId->toString(), $event->aggregateId());
        self::assertInstanceOf(CategoryId::class, $event->categoryId());
        self::assertInstanceOf(CategoryName::class, $event->name());
        self::assertInstanceOf(SubjectId::class, $event->subjectId());
//        self::assertInstanceOf(CategoryId::class, $event->parentId());
    }
}
