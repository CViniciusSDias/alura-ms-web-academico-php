<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CursosController extends Controller
{
    public function index(): JsonResponse
    {
        return \response()->json(Course::all());
    }

    public function assistir(int $courseId, Request $request): Response
    {
        $course = Course::findOrFail($courseId);
        $course->assistido = $request->json('assistido');
        $course->save();

        return \response('', 204);
    }
}
