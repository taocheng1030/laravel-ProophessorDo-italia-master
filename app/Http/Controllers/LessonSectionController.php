<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\LessonSection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LessonSectionController extends Controller
{
    public function list()
    {
        $data = LessonSection::all();

        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "lesson-sections" => $data,
                ]
            ],
            Response::HTTP_OK
        );
    }
}
