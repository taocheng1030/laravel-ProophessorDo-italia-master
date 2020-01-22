<?php

namespace App\Http\Controllers;

use App\ProophessorDo\Model\Test\TestId;
use App\ProophessorDo\Projection\Test\TestReadModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ProophessorDo\Model\Test\Command\CreateTest;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
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
     * @var TestReadModel
     */
    private $readModel;

    public function __construct(CommandBus $commandBus, LoggerInterface $logger, TestReadModel $readModel)
    {
        $this->commandBus = $commandBus;
        $this->logger = $logger;
        $this->readModel = $readModel;
    }

    public function create(Request $request)
    {
        $command = CreateTest::withDate(
            TestId::generate()->toString(),
            $request->input('name')
        );

        try {
            $this->commandBus->dispatch($command);
        } catch (CommandDispatchException $ex) {
            $this->logger->error($ex->getPrevious());
            return JsonResponse::create(
                ['message' => $ex->getPrevious()->getMessage()],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        } catch (\Throwable $error) {
            $this->logger->error($error);
            return JsonResponse::create(['message' => $error->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return JsonResponse::create(null, Response::HTTP_ACCEPTED);
    }

    public function list()
    {
        $data = $this->readModel->findAll();
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "tests" => $data
                ]
            ],
            Response::HTTP_OK
        );
    }
}
