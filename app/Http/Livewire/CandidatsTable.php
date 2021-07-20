<?php

namespace App\Http\Livewire;

use App\Models\Candidat;
use App\Models\Etablissement;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\ {
    Column,
    DateColumn,
    TimeColumn,
    BooleanColumn,
    NumberColumn
};

class CandidatsTable extends LivewireDatatable
{
    // public $hideable = 'select';
    // public $exportable = true;
     public $perPage = 300;

    public function builder()
    {
        return Candidat::query();
    }

    public function columns()
    {
        return [

            //Column::checkbox(),
        	NumberColumn::name('id')
        		->label('ID'),

        	Column::name('prenoms'),
        	Column::name('nom'),
            DateColumn::name('datenais')->label('né le')->format(),

            //NumberColumn::raw('FLOOR(DATEDIFF(NOW(), candidats.datenais)/365) AS Age'),

            Column::name('lieunais'),
        	Column::name('sexe'), //->filterable(['M','F']),
        	Column::name('aptitude'),
             // Column::name('etablissement.name')
             //     //->filterable($this->etablissements->pluck('name'))
             //     ->label('Etablissement'),
             Column::name('section.title')
                 ->label('Section'),
            Column::callback(['id'], function ($id) {
                return view('candidats.table-actions', ['id' => $id]);
            })


        ];
    }

    public function getEtablissementsProperty()
    {
        return Etablissement::all();
    }

}