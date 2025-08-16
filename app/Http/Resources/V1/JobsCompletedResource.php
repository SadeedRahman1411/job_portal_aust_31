<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobsCompletedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
           // 'id' => $this->id,
            //'applicantId' => $this->pivot->applicant_id ?? null, // pivot has applicant_id
            'jobId' => $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'employmentType' => $this->employment_type,
                //'earnings' => $this->salary_range,
            'completedAt' => $this->pivot->completed_at ?? null, // pivot has completed_at
        ];
    }
}
