<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class OrganizationContactsFilter extends ApiFilter
{
    // Allowed filterable parameters
    protected $safeParms = [
        'id'             => ['eq', 'gt', 'lt', 'gte', 'lte'], // numeric
        'organizationId' => ['eq'],                             // foreign key → organizations.id
        'type'           => ['eq'],                             // 'phone', 'email', 'website'
        'value'          => ['eq', 'like'],                     // actual contact value
    ];

    // Map API parameters → DB columns
    protected $columnMap = [
        'organizationId' => 'organization_id',
    ];
}
