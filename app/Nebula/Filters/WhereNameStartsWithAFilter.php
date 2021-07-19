<?php

namespace App\Nebula\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Larsklopstra\Nebula\Contracts\NebulaFilter;

class WhereNameStartsWithAFilter extends NebulaFilter
{
    public function build(Builder $query, Request $request): Builder
    {
        return $query->where('name', 'like', '%'. $search .'%');
    }
}
