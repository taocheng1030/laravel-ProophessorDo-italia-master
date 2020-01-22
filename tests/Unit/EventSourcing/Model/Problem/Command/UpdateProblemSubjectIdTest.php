<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSubjectId;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class UpdateProblemSubjectIdTest extends TestCase
{
    /**
     * @var UpdateProblemSubjectId
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = UpdateProblemSubjectId::withData(
            ProblemId::generate()->toString(),
            SubjectId::generate()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testProblemId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }

    public function testSubjectId()
    {
        self::assertInstanceOf(SubjectId::class, $this->command->subjectId());
    }
}
