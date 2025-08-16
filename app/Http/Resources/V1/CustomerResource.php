<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'name' => $this->name,
            'type' => $this->type,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'postalCode' => $this->zip, 
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices')), 
            // loads invoices when 'includeInvoices' is true


            
            //CamelCase for JSON consistency
            //'createdAt' => $this->created_at,
           //'updatedAt' => $this->updated_at,
            //Gives Names to the fields in the JSON response
        ];
    }
}
