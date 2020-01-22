<?php

namespace App\Http\Controllers;

use App\ProophessorDo\Model\Answer\Command\ChangeAnswerSequence;
use App\ProophessorDo\Model\Answer\Command\ChangeAnswerText;
use App\ProophessorDo\Model\Answer\Command\CreateAnswer;
use App\ProophessorDo\Model\Answer\Command\DeleteAnswer;
use App\ProophessorDo\Model\Answer\Command\MarkAnswerCorrect;
use App\ProophessorDo\Projection\Answer\AnswerReadModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AnswerController
 * @package App\Http\Controllers
 *
 * @SWG\Tag(
 *     name="Answers",
 *     description="Answers apis"
 * )
 *
 * @SWG\Swagger(
 *     basePath="/api",
 *     @SWG\Info(
 *      title="Answer API",
 *      version="1.0.0"
 *  ),
 *  @SWG\Definition(
 *     definition="Answer",
 *     required={"text", "answer_type_id", "correct", "problem_id", "sequence"},
 *     @SWG\Property(property="text", type="string", description="The conten of an answer"),
 *     @SWG\Property(property="answer_type_id", type="string", description="uuid"),
 *     @SWG\Property(property="correct", type="boolean", description="Correct status of an answer"),
 *     @SWG\Property(property="problem_id", type="string", description="uuid"),
 *     @SWG\Property(property="sequence", type="integer", description="The order of the answers starting at 1")
 *  ),
 * )
 */
class AnswerController extends Controller
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
     * @var AnswerReadModel
     */
    private $readModel;

    public function __construct(CommandBus $commandBus, LoggerInterface $logger, AnswerReadModel $readModel)
    {
        parent::__construct($commandBus, $logger);
        $this->commandBus = $commandBus;
        $this->logger = $logger;
        $this->readModel = $readModel;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     *
     * @SWG\Post(
     *     path="/commands/create-answer",
     *     tags={"Answers"},
     *     @SWG\Parameter(
     *      parameter="answer_in_body",
     *      in="body",
     *      name="answer",
     *     @SWG\Schema(ref="#/definitions/Answer")
     *     ),
     *     @SWG\Response(response="204", description="Create a problem answer")
     * )
     */
    public function create(Request $request)
    {
        $command = CreateAnswer::withData(
            AnswerId::generate()->toString(),
            $request->json('content'),
            $request->json('answer_type_id'),
            $request->json('correct'),
            $request->json('problem_id'),
            $request->json('sequence')
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

    /**
     * @param Request $request
     *
     * @SWG\DELETE(
     *     path="/commands/delete-answer",
     *     tags={"Answers"},
     *     @SWG\Parameter(
     *      name="answer_id",
     *      description="UUID",
     *      in="body",
     *      @SWG\Schema(
     *          type="string"
     *      )
     *     ),
     *     @SWG\Response(response="204", description="Deletes an answer")
     * )
     */
    public function delete(Request $request)
    {
        $command = DeleteAnswer::withData(
            $request->json('answer_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    /**
     * @param Request $request
     *
     * @SWG\Patch(
     *     path="/commands/answer-choice-changed",
     *     tags={"Answers"},
     *     @SWG\Parameter(
     *      name="answer_id",
     *      description="UUID",
     *      in="body",
     *      @SWG\Schema(
     *          type="string"
     *      )
     *     ),
     *     @SWG\Parameter(
     *      name="correct",
     *      description="Correct status of an answer to be set",
     *      in="body",
     *      @SWG\Schema(
     *          type="boolean"
     *      )
     *     ),
     *     @SWG\Response(response="204", description="Set an answer is correct or not")
     * )
     */
    public function answerChoiceChanged(Request $request)
    {
        $command = MarkAnswerCorrect::withData(
            $request->json('answer_id'),
            $request->json('correct')
        );

        $this->dispatchCommandAndReturnResponse($command);
    }

    /**
     * @param Request $request
     *
     * @SWG\Patch(
     *     path="/commands/change-answer-text",
     *     tags={"Answers"},
     *     @SWG\Parameter(
     *      name="answer_id",
     *      description="UUID",
     *      in="body",
     *      @SWG\Schema(
     *          type="string"
     *      )
     *     ),
     *     @SWG\Parameter(
     *      name="text",
     *      description="Content of an answer to be set",
     *      in="body",
     *      @SWG\Schema(
     *          type="string"
     *      )
     *     ),
     *     @SWG\Response(response="204", description="Set the text of an answer")
     * )
     */
    public function changeAnswerText(Request $request)
    {
        $command = ChangeAnswerText::withData(
            $request->json('answer_id'),
            $request->json('text')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    /**
     * @param Request $request
     *
     * @SWG\Patch(
     *     path="/commands/change-answer-sequence",
     *     tags={"Answers"},
     *     @SWG\Parameter(
     *      name="answer_id",
     *      description="UUID",
     *      in="body",
     *      @SWG\Schema(
     *          type="string"
     *      )
     *     ),
     *     @SWG\Parameter(
     *      name="sequence",
     *      description="Sequence of an answer to be set",
     *      in="body",
     *      @SWG\Schema(
     *          type="integer"
     *      )
     *     ),
     *     @SWG\Response(response="204", description="Set the sequence of an answer")
     * )
     */
    public function changeAnswerSequence(Request $request)
    {
        $command = ChangeAnswerSequence::withData(
            $request->json('answer_id'),
            $request->json('sequence')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    /**
     * @param Request $request
     *
     * @SWG\Get(
     *     path="/answer",
     *     tags={"Answers"},
     *     
     *     @SWG\Response(response="200", description="Get all answers")
     * )
     */
    public function list()
    {
        $data = $this->readModel->findAll();
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "answers" => $data
                ]
            ],
            Response::HTTP_OK
        );
    }
}
