<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class OrganizationsFilter extends ApiFilter
{
    // Allowed filterable parameters
    protected $safeParms = [
        'id'          => ['eq', 'gt', 'lt', 'gte', 'lte'], // numeric
        'userId'      => ['eq'],                             // foreign key → users.id
        'name'        => ['eq', 'like'],                     // from related user
        'email'       => ['eq', 'like'],                     // from related user
        'role'        => ['eq'],                             // from related user
        'companyName' => ['eq', 'like'],                     // organization name
        'address'     => ['eq', 'like'],                     // organization address
    ];

    // Map API parameters → DB columns
    protected $columnMap = [
        'userId'      => 'user_id',
        'companyName' => 'company_name',
    ];
}
