<?php

namespace App\Http\Controllers;

use App\Course;
use App\ProophessorDo\Model\Course\Command\AddCourse;
use App\ProophessorDo\Model\Course\CourseId;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends Controller
{
    public function create(Request $request)
    {
        $courseId = CourseId::generate()->toString();
        $command = AddCourse::withData(
            $request->json('name'),
            $request->json('reference_id'),
            $courseId
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function list()
    {
        $courses = Course::all();
        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "courses" => $courses,
                ]
            ],
            Response::HTTP_OK
        );
    }
}
