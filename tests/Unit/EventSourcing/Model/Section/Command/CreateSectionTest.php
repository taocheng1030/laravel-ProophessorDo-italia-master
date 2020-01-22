<?php
declare(strict_types=1);

use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Section\SectionName;
use PHPUnit\Framework\TestCase;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class CreateSectionTest extends TestCase
{
    /**
     * @var CreateSection
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreateSection::withData(
            SectionId::generate()->toString(),
            SectionName::withString('Fractions')->toString(),
            SubjectId::generate()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testSectionId()
    {
        self::assertInstanceOf(SectionId::class, $this->command->sectionId());
    }

    public function testSectionName()
    {
        self::assertInstanceOf(SectionName::class, $this->command->name());
    }

    public function testSubjectId()
    {
        self::assertInstanceOf(SubjectId::class, $this->command->subjectId());
    }
}
