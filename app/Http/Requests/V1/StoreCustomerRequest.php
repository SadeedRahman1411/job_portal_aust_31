<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
namespace App\Http\Requests\V1;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //rules for customer creation
            'name' => ['required'],
            'type' => ['required',Rule::in(['Individual','individual','Business','business'])], // Assuming type is a string, adjust as necessary
            'email' => ['required', 'email'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'postalCode' => ['required'], // Assuming zip is a string, adjust as necessary
            // Add any other validation rules as needed
        ];
    }

    protected function prepareForValidation()
    {
        // Map postalCode to zip for the database
        $this->merge([
            'zip' => $this->postalCode,
        ]);
    }
}
