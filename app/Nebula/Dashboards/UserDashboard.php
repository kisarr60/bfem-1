<?php

namespace App\Nebula\Dashboards;

use App\Nebula\Metrics\UserCountMetric;
use Larsklopstra\Nebula\Contracts\NebulaDashboard;

class UserDashboard extends NebulaDashboard
{
    public function icon()
    {
        return 'trending-up';
    }

    public function metrics(): array
    {
        return 
        [
            new UserCountMetric,
        ];
    }
}
