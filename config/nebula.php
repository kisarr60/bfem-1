<?php

use Larsklopstra\Nebula\Http\Middleware\NebulaIPAuthStrategy;
use Larsklopstra\Nebula\Http\Middleware\NebulaEmailAuthStrategy;
use App\Nebula\Dashboards\UserDashboard;


use App\Nebula\Pages\{
    Repechages,

};

use App\Nebula\Metrics\{
    UserCountMetric,
    JuryCountMetric,
};

use App\Nebula\Resources\{
    UserResource,
    JurySettingResource,
    CandidatResource,
};

return [

    'name' => config('app.name'),

    'prefix' => '/president',

    'domain' => null,

    'auth_strategy' => NebulaEmailAuthStrategy::class,

    'allowed_ips' => [
        '127.0.0.1',
    ],

    'allowed_emails' => [
       'sarrsindian@gmail.com',
    ],

    
    'resources' => [
        new UserResource,
        new JurySettingResource,
        new CandidatResource,
    ],

    'dashboards' => [
        new UserDashboard,
    ],

    'pages' => [
        new Repechages,
    ],

];
