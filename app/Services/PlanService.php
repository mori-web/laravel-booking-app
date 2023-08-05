<?php

namespace App\Services;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Plan;

class PlanService
{
    public static function search(array $params): Builder {
      $query = Plan::query();
      if (isset($params['plan_search'])) {
        dd($params['plan_search']);
        $query->where('name', 'like', '%' .$params['plan_search'] . '%');
      }
      return $query;
    }
}
