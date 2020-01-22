<?php

namespace App\Http\Controllers;

use App\Problem;
use App\ProophessorDo\Model\Problem\Command\AddCategoryToProblem;
use App\ProophessorDo\Model\Problem\Command\UpdateProblemText;
use App\Repositories\ProblemRepository;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Problem\Command\AddProblem;
use Prooph\ProophessorDo\Model\Problem\Command\DeleteProblem;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemActivity;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemFormat;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemNotes;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSection;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSubjectId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\User\UserId;
use Prooph\ProophessorDo\Projection\Problem\ProblemReadModel;
use Prooph\ServiceBus\CommandBus;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class ProblemController extends Controller
{

    /**
     * @var ProblemReadModel
     */
    private $problemReadModel;
    /**
     * @var CommandBus
     */
    private $commandBus;
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(
        CommandBus $commandBus,
        LoggerInterface $logger,
        ProblemReadModel $problemReadModel,
        ProblemRepository $repository
    ) {
        parent::__construct($commandBus, $logger);
        $this->logger = $logger;
        $this->repository = $repository;
    }

    public function create(Request $request)
    {
        $problemId = ProblemId::generate()->toString();
        $command = AddProblem::withData(
            $problemId,
            $request->json('problemText'),
            $request->json('details.referenceNumber'),
            $request->json('details.subject'),
            $request->json('details.problemFormat'),
            $request->json('details.difficulty'),
            UserId::generate()->toString(),
            (new Carbon())->now()->format('Y-m-d H:i:s'),
            $request->json('details.testSection'),
            Categories::fromArray($request->json('details.categories'))->toString(),
            $request->json('notes'),
            Answers::fromArray($request->json('answerChoices'))->toString(),
            $request->json('details.active')
        );

        $this->dispatchCommandAndReturnResponse($command);
    }

    public function addCategoryToProblem(Request $request)
    {
        $command = AddCategoryToProblem::withData(
            $request->input('problem_id'),
            Answers::fromArray($request->json('answerChoices'))->toString()
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function delete(Request $request)
    {
        $command = DeleteProblem::withData(
            $request->json('problem_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateReferenceNumber(Request $request)
    {
        $command = UpdateProblemReferenceNumber::withData(
            $request->input('problem_id'),
            $request->input('reference_number')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateDifficulty(Request $request)
    {
        $command = UpdateProblemDifficulty::withData(
            $request->input('problem_id'),
            $request->input('difficulty')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateActivity(Request $request)
    {
        $command = UpdateProblemActivity::withData(
            $request->input('problem_id'),
            $request->input('active')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateFormat(Request $request)
    {
        $command = UpdateProblemFormat::withData(
            $request->input('problem_id'),
            $request->input('format')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateNotes(Request $request)
    {
        $command = UpdateProblemNotes::withData(
            $request->input('problem_id'),
            $request->input('notes')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateSection(Request $request)
    {
        $command = UpdateProblemSection::withData(
            $request->input('problem_id'),
            $request->input('section_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateSubject(Request $request)
    {
        $command = UpdateProblemSubjectId::withData(
            $request->input('problem_id'),
            $request->input('subject_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function updateText(Request $request)
    {
        $command = UpdateProblemText::withData(
            $request->input('problem_id'),
            $request->input('text')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function list(Request $request)
    {

        $problems = $this->repository
            ->setActive($request->input('active', 1))
            ->setSearch($request->input('search'))
            ->setPage($request->input('page', 0) * 100)
            ->setCategories($request->input('category'))
            ->setSubject($request->input('subject'))
            ->setAfterDate($request->input('after-date'))
            ->setBeforeDate($request->input('before-date'))
            ->setCourse($request->input('course'))
            ->get();

        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "problems" => $problems,
                    "pages" => $this->repository->count()
                ]
            ],
            Response::HTTP_OK
        );
    }
}
