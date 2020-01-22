<?php

namespace App\Http\Controllers;

use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Projection\Subject\SubjectReadModel;
use App\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
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
     * @var SubjectReadModel
     */
    private $readModel;

    public function __construct(CommandBus $commandBus, LoggerInterface $logger, SubjectReadModel $readModel)
    {
        parent::__construct($commandBus, $logger);
        $this->logger = $logger;
        $this->readModel = $readModel;
    }

    public function create(Request $request)
    {
        $command = CreateSubject::withData(
            SubjectId::generate()->toString(),
            $request->input('name')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function createSection(Request $request)
    {
        $command = CreateSection::withData(
            SectionId::generate()->toString(),
            $request->input('name'),
            $request->input('subjectId')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function list()
    {
        $data = Subject::with('categories')->get();
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "subjects" => $data
                ]
            ],
            Response::HTTP_OK
        );
    }
}
