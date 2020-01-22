<?php

namespace Tests\Unit\EventSourcing\Model\Passages\Handler;

use App\ProophessorDo\Model\Passages\Command\AddPassage;
use App\ProophessorDo\Model\Passages\Handler\AddPassageHandler;
use App\ProophessorDo\Model\Passages\PassageActive;
use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageNotes;
use App\ProophessorDo\Model\Passages\PassageRepository;
use App\ProophessorDo\Model\Passages\PassageText;
use App\ProophessorDo\Model\Passages\PassageTitle;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Test\TestId;
use Mockery;
use Mockery\Mock;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class AddPassageHandlerTest extends TestCase
{
    /**
     * @var PassageRepository|Mock
     */
    protected $repository;

    /**
     * @var AddPassageHandler
     */
    protected $handler;

    public function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(PassageRepository::class);
        $this->handler = new AddPassageHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = AddPassage::withData(
            PassageId::generate()->toString(),
            PassageText::fromString('Passage text')->toString(),
            PassageTitle::fromString('This is a passage title that takes up two lines.')->toString(),
            TestId::generate()->toString(),
            SectionId::generate()->toString(),
            SubjectId::generate()->toString(),
            PassageActive::active()->toString(),
            PassageNotes::fromString('this is a note')->toString()
        );

        $this->repository
            ->shouldReceive('add')
            ->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
