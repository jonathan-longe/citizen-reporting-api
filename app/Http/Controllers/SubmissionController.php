<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Log;

class SubmissionController extends Controller
{

    /**
     * Store a newly created Submission
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::warning(json_encode($request->all()));

        $request->validate([
            'lat'                   => 'required',
            'lon'                   => 'required',
            'incident-date'         => 'required',
            'while-i-was'           => 'required',
            'relationship'          => 'required',
            'incident-type'         => 'required',
            'involving'             => 'required',
            'involving-2'           => 'required',
            'injured'               => 'required',
            'was-police-informed'   => 'required',
            'possible-cause'        => 'required',
            'contributed'           => 'required',
            'what-happened'         => 'string'
        ]);

        return Submission::create($request->all());

    }


}
