<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\ {
    Column,
    DateColumn,
    BooleanColumn,
    NumberColumn
};
use Illuminate\Support\Carbon;

class NotesTable extends LivewireDatatable
{
    public $model = Note::class;
    public $perPage = 100;
    
    public $debut;
    public $fin=99;

    public $exportFileName = 'notes-table';

    
    public function columns()
    {
        return [

        	NumberColumn::name('id')
        		->label('Num')
        		->linkTo('candidats', 3),
        	Column::name('ano')->searchable(),
            column::name('candidat.aptitude')->label('Apt'),

            // Column::callback(['total'], function ($total) {
            //     return $total >= 210
            //         ? '<span class="text-red-500">Admis</span>'
            //         : $total;
            // }),

        	NumberColumn::name('red'),
        	NumberColumn::name('dic'),
        	NumberColumn::name('tsq'),
        	NumberColumn::name('svt'),
        	NumberColumn::name('ang'),
        	NumberColumn::name('math'),
        	NumberColumn::name('hge'),
        	NumberColumn::name('ec'),
        	NumberColumn::name('sp'),
        	NumberColumn::name('part'),
        	NumberColumn::name('eps'),
        	NumberColumn::name('oral'),
        	NumberColumn::name('fac'),
            // Column::callback(['datenais', 'created_at'], function ($datenais, $createdAt) {
            //     $age = year($createdAt) - year($datenais);
            //     return $age > 18
            //         ? '<span class="text-red-500">' . $age . '</span>'
            //         : $age;
            // }),
        	// DateColumn::name('datenais')
        	// 	->label('Né le'),


        ];
    }

}