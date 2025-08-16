<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter{
  protected $safeParms = [];

      protected $columnMap = [];

      protected $operatorMap = [
        'eq' => '=',
        'like' => 'LIKE',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'in' => 'IN',
        'nin' => 'NOT IN',
        'ne' => '!=',//not equal
        'nlike' => 'NOT LIKE',
      ];

    /**
     * Transform the request into query items.
     *
     * @param Request $request
     * @return array
     */
    public function transform(Request $request): array
    {
        $eloQuery = [];

        foreach ($this->safeParms as $parm => $operators) {
            $query = $request->query($parm);

            if(!isset($query)) {
                continue; // Skip if the parameter is not present in the request
            }

            $column = $this->columnMap[$parm] ?? $parm; // Use mapped column if exists, otherwise use the parameter name

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    // Map the operator to the database operator
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]]; // Add the condition to the query array
                }
            }
        }

        return $eloQuery;
    }
}
