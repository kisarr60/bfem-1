<?php

namespace App\Nebula\Resources;

use Larsklopstra\Nebula\Contracts\NebulaResource;
use App\Nebula\Metrics\JuryCountMetric; 
use Larsklopstra\Nebula\Fields\Input;


class JurySettingResource extends NebulaResource
{
    protected $searchable = [];

    public function columns(): array
    {
        return [

        	'academie',
	    	'ief',
	    	'centre',
	    	'section',
	    	'jury',
	    	'president',
	    	'matricule_president',
	    	'grade_president',
	    	'session',
	    	'created_at'

	        ];
    }

    public function fields(): array
    {
        return [
        	Input::make('academie')->rules('required'),
	    	Input::make('ief')->rules('required'),
	    	Input::make('centre')->rules('required'),
	    	Input::make('section')->rules('required'),
	    	Input::make('jury')->rules('required'),
	    	Input::make('president')->rules('required'),
	    	Input::make('matricule')->label('Matricule')->rules('nullable'),
	    	Input::make('grade')->label('Grade')->rules('nullable'),
	    	Input::make('session')->rules('required'),
        ];
    }

    public function metrics(): array
    {
        return [

            new JuryCountMetric,
        ];
    }
}
