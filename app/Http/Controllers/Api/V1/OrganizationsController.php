<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Organizations;
use App\Http\Requests\StoreOrganizationsRequest;
use App\Http\Requests\UpdateOrganizationsRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\OrganizationsResource;
use App\Http\Resources\V1\OrganizationsCollection; // Assuming you have a resource collection for organizations
use Illuminate\Http\Request;
use App\Filters\V1\OrganizationsFilter; // Assuming you have a filter class for organizations

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $filter = new OrganizationsFilter();
         $filterItems = $filter->transform($request);

         if(count($filterItems) === 0) {
            return new OrganizationsCollection(Organizations::paginate()); // Example implementation
         }
         else {
            return new OrganizationsCollection(Organizations::where($filterItems)->paginate()); // Example implementation
         }
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
    public function store(StoreOrganizationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Organizations $organization)
    {
        return new OrganizationsResource($organization); // Example implementation
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organizations $organizations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationsRequest $request, Organizations $organizations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizations $organizations)
    {
        //
    }
}
