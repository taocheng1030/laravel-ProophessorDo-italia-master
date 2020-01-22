<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Problem;
use App\ProophessorDo\Model\Video\Command\CreateVideo;
use App\ProophessorDo\Model\Video\VideoId;
use App\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VideoController extends Controller
{
    public function create(Request $request)
    {
        $videoId = VideoId::generate();
        $command = CreateVideo::withData(
            $videoId,
            $request->json('name'),
            $request->json('path'),
            $request->json('mediaId'),
            $request->json('width'),
            $request->json('height'),
            $request->json('duration')
        );
        $this->dispatchCommandAndReturnResponse($command);
    }

    public function list(Request $request)
    {
        $page = ($request->input('page')) ? $request->input('page') * 100 : 0;

        $data = ($page) ? Video::remember(5)->limit(100)->offset($page)->get():
            Video::remember(5)->limit(100)->get();
        $pages = Video::remember(5)->count()/100;

        return JsonResponse::create(
            [
                'status' => 'OK',
                'message' => null,
                'data' => [
                    "videos" => $data,
                    "pages" => ceil($pages)
                ]
            ],
            Response::HTTP_OK
        );
    }
}
