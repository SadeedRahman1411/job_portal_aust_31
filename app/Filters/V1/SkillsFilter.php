<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class SkillsFilter extends ApiFilter
{
    // Allowed filterable parameters
    protected $safeParms = [
        'id'         => ['eq', 'gt', 'lt', 'gte', 'lte', 'ne'], // numeric
        'skillName'  => ['eq', 'like'],     
    ];

    // Map API parameters → DB columns
    protected $columnMap = [
        'skillName' => 'skill_name',
    ];
}