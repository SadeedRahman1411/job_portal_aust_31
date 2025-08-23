<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class JobsFilter extends ApiFilter
{
    // Allowed filterable parameters
    protected $safeParms = [
        'id'             => ['eq', 'gt', 'lt', 'gte', 'lte','ne'], // numeric
        'organizationId' => ['eq'],                             // foreign key
        'jobTitle'       => ['eq', 'like'],                     // title of job
        'description'    => ['eq', 'like'],                     // description text
        'location'       => ['eq', 'like'],                     // location string
        'jobType'        => ['eq'],                             // employment_type enum
        'salary'         => ['eq', 'like'],                     // salary_range string
        'deadline'       => ['eq', 'gt', 'lt', 'gte', 'lte'],   // date comparisons
        'postedAt'       => ['eq', 'gt', 'lt', 'gte', 'lte'],   // datetime comparisons
        'status'         => ['eq','ne'],                             // job status enum
    ];

    // Map API parameters → DB columns
    protected $columnMap = [
        'organizationId' => 'organization_id',
        'jobTitle'       => 'title',
        'jobType'        => 'employment_type',
        'postedAt'       => 'posted_at',
    ];
}
