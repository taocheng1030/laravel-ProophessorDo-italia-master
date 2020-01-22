<?php

namespace App\Http\Controllers;

use App\Category;
use App\ProophessorDo\Projection\Category\CategoryReadModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\Command\CreateCategory;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class CategoryController
 * @package App\Http\Controllers
 *
 * @SWG\Tag(
 *     name="Category",
 *     description="Category apis"
 * )
 *
 *  @SWG\Definition(
 *     definition="Category",
 *     required={"name", "subject_id"},
 *     @SWG\Property(property="name", type="string"),
 *     @SWG\Property(property="subject_id", type="string", description="uuid")
 *  ),
 * )
 */
class CategoryController extends Controller
{

    /**
     * @var CommandBus
     */
    private $commandBus;
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(CommandBus $commandBus, LoggerInterface $logger)
    {
        parent::__construct($commandBus, $logger);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     *
     * @SWG\Post(
     *     path="/commands/create-category",
     *     tags={"Category"},
     *     @SWG\Parameter(
     *      parameter="category_in_body",
     *      in="body",
     *      name="category",
     *     @SWG\Schema(ref="#/definitions/Category")
     *     ),
     *     @SWG\Response(response="204", description="Create a category")
     * )
     */
    public function create(Request $request)
    {
        $command = CreateCategory::withData(
            CategoryId::generate()->toString(),
            $request->input('name'),
            $request->input('subject_id')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    /**
     *
     * @SWG\Get(
     *     path="/categories",
     *     tags={"Category"},
     *     
     *     @SWG\Response(response="200", description="Get all categories")
     * )
     */
    public function list()
    {
        $data = Category::with('subject')->get();
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "categories" => $data
                ]
            ],
            Response::HTTP_OK
        );
    }
}
