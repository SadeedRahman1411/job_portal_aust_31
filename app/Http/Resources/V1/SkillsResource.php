<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillsResource extends JsonResource
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
            'skillName' => $this->skill_name, // Assuming skill_name is the field in the Skills model.   
        ];
    }
}
