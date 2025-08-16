<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class ApplicationFormFilter extends ApiFilter
{
    // Allowed filterable parameters
    protected $safeParms = [
        'id'          => ['eq', 'gt', 'lt', 'gte', 'lte'], // numeric filters
        'jobId'       => ['eq'],                           // foreign key → jobs_id
        'applicantId' => ['eq'],                           // foreign key → applicants.id
        'status'      => ['eq'],                           // ENUM (pending, rejected)
        'coverLetter' => ['eq', 'like'],                   // text field
        'skills'      => ['eq', 'like'],                   // JSON field
        'resume'      => ['eq', 'like'],                   // file path string
        'appliedAt'   => ['eq', 'gt', 'lt', 'gte', 'lte'], // timestamp comparisons
    ];

    // Map API parameters → DB columns
    protected $columnMap = [
        'jobId'       => 'jobs_id',
        'applicantId' => 'applicant_id',
        'coverLetter' => 'cover_letter',
        'appliedAt'   => 'applied_at',
    ];
}
