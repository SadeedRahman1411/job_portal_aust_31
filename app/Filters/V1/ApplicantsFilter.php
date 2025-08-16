<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class ApplicantsFilter extends ApiFilter
{
    protected $safeParms = [ //allowed parameters for filtering
        'id'=> ['eq', 'gt', 'lt', 'gte', 'lte'], // numeric comparisons
        'userId'=> ['eq'],  // filter by user_id
        'name'=> ['eq', 'like'],// from related users table
        'email'=> ['eq', 'like'],// from related users table
        'address'=> ['eq', 'like'],
        'qualification'=> ['eq', 'like'],
        'skills'=> ['eq', 'like'], // JSON field
        'resume' => ['eq', 'like'],// path string
        'coverLetter' => ['eq', 'like'],// path string
    ];

    protected $columnMap = [
        'userId' => 'user_id',
        'coverLetter' => 'cover_letter',

    ];
}