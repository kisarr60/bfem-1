<?php

namespace App\Nebula\Resources;

use Larsklopstra\Nebula\Contracts\NebulaResource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Larsklopstra\Nebula\Fields\{Input,Date,Select};
use App\Models\Candidat;

class CandidatResource extends NebulaResource
{
    protected $searchable = [];

    public function model()
    {
        return Candidat::class;
    }

    public function build(Builder $query, Request $request): Builder 
    {
        return $query->where('name', 'like', 'A%');
    }

    public function indexQuery()
    {
        return $this->model()::query()
            ->withoutGlobalScopes()
            ->with($this->with);
    }
   
    public function columns(): array
    {
        return [

        	'numero', 'ano', 'total', 'fictif1', 'fictif2', 'prenoms', 'nom', 'datenais', 'lieunais', 'sexe', 'aptitude', 'etablissement_id', 'section_id', 'epOption', 'lv1', 'lv2', 'facultative', 'absent',
        ];
    }

    public function fields(): array
    {
    	$options=['Espagnol', 'Portugais', 'Arabe', 'Allemand', 'Russe', 'Italien', 'Latin','Technologie','Economie familiale','STE'];
        return [
        	Input::make('numero')->label('Num')->rules(['required', 'unique:candidats']),
        	Input::make('fictif1')->label('Ano1')->rules(['required', 'unique:candidats']),     	
        	Input::make('prenoms')->label('prenoms')->rules(['required', 'unique:candidats']),
        	Input::make('nom')->label('nom')->rules(['required', 'unique:candidats']),
        	Date::make('datenais')->label('né le')->format('d-m-Y')->rules(['required', 'unique:candidats']),
        	Input::make('lieunais')->label('à')->rules(['required']),
        	Input::make('sexe')->label('Sexe')->rules('required'),
        	Input::make('aptitude')->label('EPS')->rules('required'),
        	Input::make('etablissement_id')->label('Etab')->type('integer')->rules('required'),
        	Input::make('section_id')->label('Section')->rules('required'),
        	Input::make('epOption')->label('Option')->rules('required'),
        	input::make('facultative')->label('Fac'),

        ];
    }
}
