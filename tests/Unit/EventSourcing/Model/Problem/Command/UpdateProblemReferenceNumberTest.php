<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Command;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemReferenceNumber;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;

class UpdateProblemReferenceNumberTest extends TestCase
{
    /**
     * @var UpdateProblemReferenceNumber
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = UpdateProblemReferenceNumber::withData(
            ProblemId::generate()->toString(),
            ProblemReferenceNumber::fromString('1234abcd')->toString()
        );
    }

    public function testProblemId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }

    public function testReferenceId()
    {
        self::assertInstanceOf(ProblemReferenceNumber::class, $this->command->referenceNumber());
    }
}
