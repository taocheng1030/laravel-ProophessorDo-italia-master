<?php

namespace App\Http\Controllers;

use App\ProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\Command\CreateProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatId;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProblemFormatController extends Controller
{
    public function create(Request $request)
    {
        $problemFormatId = ProblemFormatId::generate()->toString();
        $command = CreateProblemFormat::withData(
            $problemFormatId,
            $request->json('name'),
            $request->json('active')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function list()
    {
        $problemFormats = ProblemFormat::all();
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "problem_formats" => $problemFormats,
                ]
            ],
            Response::HTTP_OK
        );
    }
}