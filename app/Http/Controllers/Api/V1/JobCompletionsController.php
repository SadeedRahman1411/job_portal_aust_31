<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\job_completions;
use App\Http\Requests\Storejob_completionsRequest;
use App\Http\Requests\Updatejob_completionsRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\JobsCompletedResource; // Assuming you have a resource for job completions
use App\Http\Resources\V1\JobsCompletedCollection; // Assuming you have a resource collection for job completions
use Illuminate\Http\Request;

class JobCompletionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new JobsCompletedCollection(job_completions::all());//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storejob_completionsRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(job_completions $job_completion)
    {
       return new  JobsCompletedResource($job_completion);//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job_completions $job_completions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatejob_completionsRequest $request, job_completions $job_completions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job_completions $job_completions)
    {
        //
    }
}
