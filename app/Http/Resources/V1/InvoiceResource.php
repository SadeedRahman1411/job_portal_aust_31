<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'customerId' => $this->customer_id, // CamelCase for JSON consistency
            'amount' => $this->amount,
            'status' => $this->status,
            'billedDate' => $this->billed_date, // CamelCase for JSON consistency
            'paidDate' => $this->paid_date, // CamelCase for JSON consistency
            'createdAt' => $this->created_at, // CamelCase for JSON consistency
            'updatedAt' => $this->updated_at, // CamelCase for JSON consistency
        ];
    }
}
