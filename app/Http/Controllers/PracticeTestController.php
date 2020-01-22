<?php

namespace App\Http\Controllers;

use App\ProophessorDo\Projection\PracticeTest\PracticeTestReadModel;
use Illuminate\Http\Request;
use Prooph\ServiceBus\CommandBus;
use Psr\Log\LoggerInterface;

class PracticeTestController extends Controller
{
    /**
     * @var CommandBus
     */
    private $commandBus;
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var PracticeTestReadModel
     */
    private $readModel;

    public function __construct(CommandBus $commandBus, LoggerInterface $logger, PracticeTestReadModel $readModel)
    {
        $this->commandBus = $commandBus;
        $this->logger = $logger;
        $this->readModel = $readModel;
    }

    public function create()
    {

    }

    public function list()
    {

    }
}
