<?php

namespace App\Nebula\Metrics;

use Larsklopstra\Nebula\Metrics\ValueMetric;
use App\Models\User;

class UserCountMetric extends ValueMetric
{
    public function calculate()
    {
        $users = User::where('id', 2);
    	return $this->count($users);
    }

    public function label()
    {
    	return 'New users';
    }

    // Determine how much space your card should take
    // public function colSpan(): int
    // {
    //     return 4; // out of 12
    // }


    // public function cacheFor()
    // {
    //     return now()->addHours(8);
    // }
}
