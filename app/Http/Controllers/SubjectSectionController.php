<?php

namespace App\Http\Controllers;

use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Projection\Section\SectionReadModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class SubjectSectionController extends Controller
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
     * @var SectionReadModel
     */
    private $readModel;

    public function __construct(CommandBus $commandBus, LoggerInterface $logger, SectionReadModel $readModel)
    {
        $this->commandBus = $commandBus;
        $this->logger = $logger;
        $this->readModel = $readModel;
    }

    public function create(Request $request)
    {
        $command = CreateSection::withData(
            SectionId::generate()->toString(),
            $request->input('name'),
            $request->input('subject_id')
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
                    "section" => $data
                ]
            ],
            Response::HTTP_OK
        );
    }
}
