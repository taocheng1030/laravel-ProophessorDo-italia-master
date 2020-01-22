<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\ProophessorDo\Model\PassageProblem\Command\AddProblemToPassage;
use App\ProophessorDo\Model\PassageProblem\Command\ChangePassageProblemSequence;
use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use App\ProophessorDo\Model\Passages\Command\AddPassage;
use App\ProophessorDo\Model\Passages\Command\DeletePassage;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageActivity;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageNote;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageSubject;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageText;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageTitle;
use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Projection\Passages\PassageReadModel;
use App\Repositories\PassagesRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class PassageController extends Controller
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
     * @var PassageReadModel
     */
    private $passageReadModel;
    /**
     * @var PassagesRepository
     */
    private $repository;

    public function __construct(
        CommandBus $commandBus,
        LoggerInterface $logger,
        PassageReadModel $passageReadModel,
        PassagesRepository $repository
    ) {
        parent::__construct($commandBus, $logger);
        $this->commandBus = $commandBus;
        $this->logger = $logger;
        $this->passageReadModel = $passageReadModel;
        $this->repository = $repository;
    }

    public function create(Request $request)
    {
        $command = AddPassage::withData(
            PassageId::generate()->toString(),
            $request->json('reference_id'),
            $request->json('text'),
            $request->json('title'),
            $request->json('test_id'),
            $request->json('subject_id'),
            $request->json('active'),
            $request->json('notes')
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

    public function delete(Request $request)
    {
        $command = DeletePassage::withData(
            $request->input('passage_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function addProblemToPassage(Request $request)
    {
        $command = AddProblemToPassage::withData(
            PassageProblemId::generate()->toString(),
            $request->input('passage_id'),
            $request->input('problem_id'),
            $request->input('sequence')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updatePassageProblemSequence(Request $request)
    {
        $command = ChangePassageProblemSequence::withData(
            $request->input('passage_problem_id'),
            $request->input('sequence')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateText(Request $request)
    {
        $command = UpdatePassageText::withData(
            $request->input('passage_id'),
            $request->input('passage_text')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateTitle(Request $request)
    {
        $command = UpdatePassageTitle::withData(
            $request->input('passage_id'),
            $request->input('title')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateSubject(Request $request)
    {
        $command = UpdatePassageSubject::withData(
            $request->input('passage_id'),
            $request->input('subject_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateActive(Request $request)
    {
        $command = UpdatePassageActivity::withData(
            $request->input('passage_id'),
            $request->input('active')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateNotes(Request $request)
    {
        $command = UpdatePassageNote::withData(
            $request->input('passage_id'),
            $request->input('note')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function list(Request $request)
    {
        $passages = $this->repository
            ->setPage((int) $request->input('page', 0))
            ->setSearchText($request->input('search'))
            ->setCourse($request->input('course'))
            ->setSubject($request->input('subject'))
            ->setAfterDate($request->input('after-date'))
            ->setBeforeDate($request->input('before-date'))
            ->setActive($request->input('active'))
            ->get();

        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' =>
                    [
                        "passages" => $passages,
                        'pages' => $this->repository->count()
                    ]
            ],
            Response::HTTP_OK
        );
    }

}
