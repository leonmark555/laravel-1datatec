<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Routing\Controller;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return Response::json(['error' => $validator->errors()], 400);
        }

        ProcessSubmission::dispatch($request->all());

        return Response::json(['message' => 'Submission received.'], 202);
    }
}