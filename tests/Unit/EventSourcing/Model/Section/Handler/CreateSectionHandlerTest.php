<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\Section\Handler;

use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Section\SectionName;
use App\ProophessorDo\Model\Section\SectionRepository;
use Mockery;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class CreateSectionHandlerTest extends TestCase
{
    /**
     * @var SectionRepository|Mockery\Mock
     */
    private $repository;

    /**
     * @var CreateSectionHandler
     */
    private $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(SectionRepository::class);
        $this->handler = new CreateSectionHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreateSection::withData(
            SectionId::generate()->toString(),
            SectionName::withString('Fractions')->toString(),
            SubjectId::generate()->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
