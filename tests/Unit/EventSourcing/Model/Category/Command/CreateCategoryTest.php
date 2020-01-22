<?php

namespace Tests\Unit\EventSourcing\Model\Tag\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Category\Command\CreateCategory;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\CategoryName;
use Tests\Unit\TestCase;

class CreateCategoryTest extends TestCase
{
    /**
     * @var CreateCategory
     */
    protected $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreateCategory::withData(
            CategoryId::generate()->toString(),
            CategoryName::fromString('Test Tag')->toString(),
            SubjectId::generate()->toString(),
            CategoryId::generate()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testTagId()
    {
        self::assertInstanceOf(CategoryId::class, $this->command->tagId());
    }

    public function testTagName()
    {
        self::assertInstanceOf(CategoryName::class, $this->command->tagName());
    }

    public function testSubjectId()
    {
        self::assertInstanceOf(SubjectId::class, $this->command->subjectId());
    }

    public function testParentTagId()
    {
        $this->markTestSkipped();
        self::assertInstanceOf(CategoryId::class, $this->command->parentId());
    }
}
