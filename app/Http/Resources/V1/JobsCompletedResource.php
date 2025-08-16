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
 'id' => $this->id,
            'applicantId' => $this->applicant_id,
            'jobId' => $this->job_id,
            'job' => [
                'title' => $this->job?->title,
                'description' => $this->job?->description,
                'employmentType' => $this->job?->employment_type,
                //'earnings' => $this->job?->salary_range,
                      ],
            'completedAt' => $this->completed_at,
        ];
    }
}
