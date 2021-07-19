<?php

namespace App\Nebula\Resources;

use Larsklopstra\Nebula\Contracts\NebulaResource;
use App\Nebula\Filters\WhereNameStartsWithAFilter;
use App\Nebula\Metrics\UserCountMetric;
use Larsklopstra\Nebula\Fields\Input;

class UserResource extends NebulaResource
{

    protected $searchable = ['name', 'email'];


	public function icon()
    {
        return 'user-group';
    }

    public function singularName()
    {
        return 'user';
    }

    public function pluralName()
    {
        return 'users';
    }

    public function columns(): array
    {
        return [

            'name',
            'email',
            'createdAt',
        ];
    }

    public function fields(): array
    {
        return [
            Input::make('name')
                ->rules('required'),
            Input::make('email')
                ->type('email')
                ->rules('required|email'),
            Input::make('password')
                ->type('text')
                ->rules('required|min:8'),
        	
        ];
    }

    public function metrics(): array
    {
        return [
            new UserCountMetric,
        ];
    }

    public function filters(): array
    {
        return [
            new WhereNameStartsWithAFilter
        ];
    }
}
