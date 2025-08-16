<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Organization_contacts;
use App\Http\Requests\StoreOrganization_contactsRequest;
use App\Http\Requests\UpdateOrganization_contactsRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\OrganizationContactsResource;

class OrganizationContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Organization_contacts::all(); // Example implementation
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
    public function store(StoreOrganization_contactsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization_contacts $organization_contact)
    {
        return new OrganizationContactsResource($organization_contact);//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization_contacts $organization_contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganization_contactsRequest $request, Organization_contacts $organization_contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization_contacts $organization_contacts)
    {
        //
    }
}
