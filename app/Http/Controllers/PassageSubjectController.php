<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\PassageSubject;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PassageSubjectController extends Controller
{
    public function list()
    {
        $data = PassageSubject::all();

        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "passage-subjects" => $data,
                ]
            ],
            Response::HTTP_OK
        );
    }
}
