<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CurrentJobsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'jobId' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'employmentType' => $this->employment_type,
            'status' => $this->pivot->status ?? $this->status ?? null,  // pivot or model
            'assignedAt' => $this->pivot->assigned_at ?? $this->assigned_at ?? null,
        ];
    }
}
