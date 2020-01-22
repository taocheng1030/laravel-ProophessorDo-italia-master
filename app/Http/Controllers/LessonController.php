<?php


namespace App\Http\Controllers;


use App\Lesson;
use App\Problem;
use App\ProophessorDo\Model\Lesson\Event\UpdateLessonReferenceId;
use App\ProophessorDo\Projection\Lesson\LessonReadModel;
use App\Repositories\LessonRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ProophessorDo\Model\Lesson\Command\CreateLesson;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedBy;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedOn;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonEstimatedDuration;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Lesson\LessonName;
use Prooph\ProophessorDo\Model\Lesson\LessonStatus;
use Prooph\ProophessorDo\Model\Lesson\LessonType;
use Prooph\ProophessorDo\Model\Lesson\LessonUpdatedOn;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Psy\Util\Json;
use Ramsey\Uuid\Uuid;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LessonController
 * @package App\Http\Controllers
 *
 * @SWG\Tag(
 *     name="Lessons",
 *     description="All of the Lessons"
 * )
 *
 *     @SWG\Definition(
 *      definition="Lesson",
 *      required={},
 *      @SWG\Property(property="reference_id", type="string"),
 *      @SWG\Property(property="lesson_type_id", type="string"),
 *      @SWG\Property(property="sequence", type="integer"),
 *      @SWG\Property(property="subject_id", type="string"),
 *      @SWG\Property(property="unit_id", type="string"),
 *      @SWG\Property(property="title", type="string"),
 *      @SWG\Property(property="multi_line_title", type="string"),
 *      @SWG\Property(property="description", type="string"),
 *      @SWG\Property(property="start_page", type="integer"),
 *      @SWG\Property(property="ending_page", type="integer"),
 *      @SWG\Property(property="challenge_page", type="integer"),
 *      @SWG\Property(property="practice_page", type="integer"),
 *      @SWG\Property(property="drill_page", type="integer"),
 *      @SWG\Property(property="status", type="boolean")
 *     ),
 * @SWG\Definition(
 *     definition="UpdateLessonReferenceId",
 *     required={},
 *     @SWG\Property(property="lesson_id", type="string"),
 *     @SWG\Property(property="lesson_reference_id", type="string")
 * )
 *
 */
class LessonController extends Controller
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
     * @var LessonReadModel
     */
    private $lessonReadModel;
    /**
     * @var LessonRepository
     */
    private $repository;

    public function __construct(
        CommandBus $commandBus,
        LoggerInterface $logger,
        LessonReadModel $lessonReadModel,
        LessonRepository $repository
    ) {
        parent::__construct($commandBus, $logger);
        $this->lessonReadModel = $lessonReadModel;
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     * @SWG\Post(
     *  path="/commands/create-lesson",
     *     tags={"Lessons"},
     *     @SWG\Parameter(
     *     parameter="lesson_in_body",
     *     in="body",
     *     name="Lesson",
     *     @SWG\Schema(ref="#/definitions/Lesson"),
     *  ),
     *  @SWG\Response(response="202", description="Create a lesson")
     * )
     *
     */
    public function create(Request $request)
    {
        $command = CreateLesson::withData(
            LessonId::generate()->toString(),
            $request->json('reference_id'),
            $request->json('lesson_type_id'),
            $request->json('sequence'),
            $request->json('subject_id'),
            $request->json('unit_id'),
            $request->json('title'),
            $request->json('multi_line_title'),
            $request->json('description'),
            $request->json('start_page', 0),
            $request->json('end_page', 0),
            $request->json('challenge_page', 0),
            $request->json('practice_page', 0),
            $request->json('drill_page'),
            1,
            $request->json('status')
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
     * @return JsonResponse
     *
     * @SWG\Get(
     *     path="/lessons",
     *     tags={"Lessons"},
     *     @SWG\Parameter(
     *      name="page",
     *      in="query",
     *      description="get page of lessons",
     *      required=false,
     *      type="integer"
     *     ),
     *     @SWG\Parameter(
     *      name="search",
     *      in="query",
     *      description="search in lessons",
     *      required=false,
     *      type="integer"
     *     ),
     *     @SWG\Parameter(
     *      name="course_id",
     *      in="query",
     *      description="filter the lessons by course",
     *      required=false,
     *      type="string"
     *     ),
     *     @SWG\Parameter(
     *      name="subject_id",
     *      in="query",
     *      description="filter by subject_id",
     *      required=false,
     *      type="string"
     *     ),
     *     @SWG\Parameter(
     *      name="after_date",
     *      in="query",
     *      description="filter by created at date after date provided",
     *      required=false,
     *      type="string"
     *     ),
     *     @SWG\Parameter(
     *      name="before_date",
     *      in="query",
     *      description="filter by created at date before date provided",
     *      required=false,
     *      type="string"
     *     ),
     *     @SWG\Parameter(
     *      name="active",
     *      in="query",
     *      description="filter by active or inactive lessons",
     *      required=false,
     *      type="boolean"
     *     ),
     *     @SWG\Response(response="200", description="Get Lesson")
     * )
     */
    public function list(Request $request)
    {
       $lessons = $this->repository
           ->setPage($request->input('page'))
           ->setSearch($request->input('search'))
//           ->setCourse($request->input('course'))
//           ->setSection($request->input('section'))
           ->setSubject($request->input('subject'))
//           ->setCategory($request->input('category'))
//           ->setVideo($request->input('has_video'))
           ->setAfterDate($request->input('after_date'))
           ->setBeforeDate($request->input('before_date'))
           ->setActive($request->input('active'))
           ->get();
       return JsonResponse::create(
           [
               'status' => 'OK',
               'message' => null,
               'data' => [
                   "lessons" => $lessons,
                   "pages" => $this->repository->count()
               ]
           ],
           Response::HTTP_OK
       );
    }

    /**
     * @param Request $request
     *
     * @SWG\Patch(
     *     path="/commands/update-lesson-reference-id",
     *     tags={"Lessons"},
     *     @SWG\Parameter(
     *     parameter="lesson_in_body",
     *     in="body",
     *     name="Lesson",
     *     @SWG\Schema(ref="#/definitions/UpdateLessonReferenceId"),
     *  ),
     *  @SWG\Response(response="202", description="Update the lesson reference id")
     * )
     */
    public function updateReferenceId(Request $request)
    {
        $command = UpdateLessonReferenceId::withData(
            $request->json('lesson_id'),
            $request->json('lesson_reference_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }
}