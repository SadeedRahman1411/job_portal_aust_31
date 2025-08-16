<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class JobCompletionsFilter extends ApiFilter
{
    // Allowed filterable parameters
    protected $safeParms = [
        'id'          => ['eq', 'gt', 'lt', 'gte', 'lte'], // numeric filters
        'applicantId' => ['eq'],                           // foreign key → applicants.id
        'jobId'       => ['eq'],                           // foreign key → jobs.id
        'completedAt' => ['eq', 'gt', 'lt', 'gte', 'lte'], // timestamp comparisons
    ];

    // Map API parameters → DB columns
    protected $columnMap = [
        'applicantId' => 'applicant_id',
        'jobId'       => 'job_id',
        'completedAt' => 'completed_at',
    ];
}
