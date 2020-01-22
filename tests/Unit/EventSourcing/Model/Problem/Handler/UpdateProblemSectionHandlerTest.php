<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemSectionHandler;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemSectionHandlerTest extends TestCase
{
    private $repository;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ProblemRepository::class);
    }
}
