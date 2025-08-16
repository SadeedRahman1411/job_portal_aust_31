<?php

namespace App\Filters\V1;
use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class CustomerFilter extends ApiFilter{
  protected $safeParms = [ //allowed parameters for filtering
        'name' =>['eq', 'like'], // Allows exact match or like search
        'type' =>['eq'],// Allows exact match for type
        'email' => ['eq', 'like'], // Allows exact match or like search
        'address' => ['eq', 'like'], // Allows exact match or like search
        'city' =>['eq'], // Allows exact match or like search
        'state' =>['eq'], // Allows exact match or like search
        'postalCode'=>['eq','gt','lt','gte','lte'] // This will map to the zip field in the database
    ];

      protected $columnMap = [
        'postalCode' => 'zip', // Maps postalCode to zip in the database
      ]; 
}
