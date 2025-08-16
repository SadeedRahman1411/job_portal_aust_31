<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ApplicantsResource extends JsonResource
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
            'userId' => $this->user_id,
            'name' => $this->user ? $this->user->name : null,
            'email' => $this->user ? $this->user->email : null,
            'address' => $this->address,
            'qualification' => $this->qualification,
            'skills' => $this->skills,
            'resume' => $this->resume,
            'coverLetter' => $this->cover_letter,
        ];
    }
}
