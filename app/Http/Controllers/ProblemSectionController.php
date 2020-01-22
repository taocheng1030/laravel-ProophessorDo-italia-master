<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\ProblemSection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prooph\ServiceBus\CommandBus;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class ProblemSectionController extends Controller
{
    public function __construct(
        CommandBus $commandBus,
        LoggerInterface $logger
    ) {
        parent::__construct($commandBus, $logger);
    }

    public function list(Request $request)
    {
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "problem_section" => ProblemSection::with('subject')->get()
                ]
            ],
            Response::HTTP_OK
        );
    }
}
