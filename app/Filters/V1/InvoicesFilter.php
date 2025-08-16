<?php

namespace App\Filters\V1;
use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class InvoicesFilter extends ApiFilter{
  protected $safeParms = [ //allowed parameters for filtering
        'customerId' =>['eq', 'like'], // Allows exact match or like search
        'amount'=>['eq','gt','lt','lte','gte'],// This will map to the zip field in the database
        'status' => ['eq','ne'],// Allows exact match for type or not equal
        'billed_date' => ['eq', 'like'], // Allows exact match or like search
        'paid_date' => ['eq', 'like'], // Allows exact match or like search
        'description' =>['eq'], // Allows exact match or like search
    ];

      protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date', // camelCase to snake_case mapping
      ];
  
}
