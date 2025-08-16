<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Applicants;
use App\Http\Requests\StoreApplicantsRequest;
use App\Http\Requests\UpdateApplicantsRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ApplicantsResource;
use App\Http\Resources\V1\ApplicantsCollection; // Assuming you have a resource collection for applicants
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return new ApplicantsCollection(Applicants::all()); // Example implementation
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
    public function store(StoreApplicantsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Applicants $applicant)
    {
       return new ApplicantsResource($applicant); // Example implementation
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicants $applicants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicantsRequest $request, Applicants $applicants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicants $applicants)
    {
        //
    }
}
