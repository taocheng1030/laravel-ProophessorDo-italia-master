<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Command;

use App\ProophessorDo\Model\Section\SectionId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSection;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemSection;

class UpdateProblemSectionTest extends TestCase
{
    /**
     * @var UpdateProblemSection
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = UpdateProblemSection::withData(
            ProblemId::generate()->toString(),
            SectionId::generate()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testProblemId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }

    public function testSectionId()
    {
        self::assertInstanceOf(SectionId::class, $this->command->sectionId());
    }
}
