<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class ApplicantContactsFilter extends ApiFilter
{
    // Allowed filterable parameters
    protected $safeParms = [
        'id'          => ['eq', 'gt', 'lt', 'gte', 'lte'], // numeric comparisons
        'applicantId' => ['eq'],                           // foreign key
        'type'        => ['eq'],                           // only phone or email
        'value'       => ['eq', 'like'],                   // phone/email string
    ];

    // Map API parameters → DB columns
    protected $columnMap = [
        'applicantId' => 'applicant_id',
    ];
}
