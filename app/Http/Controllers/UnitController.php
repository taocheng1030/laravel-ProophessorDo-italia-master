<?php

namespace App\Http\Controllers;

use App\ProophessorDo\Model\Unit\UnitMultiLineLabel;
use App\ProophessorDo\Model\Unit\UnitReferenceId;
use App\ProophessorDo\Projection\Unit\UnitReadModel;
use App\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ProophessorDo\Model\Unit\Command\CreateUnit;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\Unit\UnitLabel;
use Prooph\ProophessorDo\Model\User\UserId;
use Prooph\ServiceBus\CommandBus;
use Prooph\ServiceBus\Exception\CommandDispatchException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class UnitController extends Controller
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
     * @var UnitReadModel
     */
    private $readModel;

    public function __construct(CommandBus $commandBus, LoggerInterface $logger, UnitReadModel $readModel)
    {
        $this->commandBus = $commandBus;
        $this->logger = $logger;
        $this->readModel = $readModel;
    }

    public function create()
    {
        $command = CreateUnit::withData(
            UnitId::generate()->toString(),
            UnitLabel::fromString('This is a unit')->toString(),
            UnitReferenceId::fromString('123ab')->toString(),
            UnitMultiLineLabel::fromString('this is a desc')->toString(),
            UserId::generate()->toString()
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

        return JsonResponse::create(null, Response::HTTP_NO_CONTENT);
    }

    public function list(Request $request)
    {
        $page = ($request->input('page')) ? $request->input('page') * 100 : 0;

        $units = ($page) ? Unit::remember(5)->with('subjects', 'lessons')->limit(100)->offset($page)->get() :
            Unit::remember(5)->with('subjects', 'lessons')->limit(100)->get();
        $pages = Unit::remember(5)->with('subjects', 'lessons')->count()/100;
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "units" => $units,
                    "pages" => ceil($pages)
                ]
            ],
            Response::HTTP_OK
        );
    }
}
