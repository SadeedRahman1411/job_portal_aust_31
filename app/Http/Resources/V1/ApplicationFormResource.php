<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationFormResource extends JsonResource
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
            'job' => $this->job ? [
                'id' => $this->job->id,
                'title' => $this->job->title,
            ] : null,
            'applicant' => $this->applicant ? [
                'id' => $this->applicant->id,
                'name' => $this->applicant->name,
            ] : null,
            'status' => $this->status,
            'cover_letter' => $this->cover_letter,
            'skills' => $this->skills ? json_decode($this->skills) : [],
            'resume' => $this->resume,
        ];
    }
}
