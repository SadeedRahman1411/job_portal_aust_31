<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
           'id' => $this->id,
            'organizationId' => $this->organization_id,
            'companyName' => $this->organization?->company_name, // include company name
            'jobTitle' => $this->title, //check model for correct field name
            'description' => $this->description,
            'location' => $this->location,
            'jobType' => $this->employment_type,
            'salary' => $this->salary_range,
        ];
    }
}
