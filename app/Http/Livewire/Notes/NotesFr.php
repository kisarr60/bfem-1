<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\ {
    Column,
    DateColumn,
    BooleanColumn,
    NumberColumn
};
use Illuminate\Support\Carbon;


class NotesFr extends LivewireDatatable
{
    public $model = Note::class;
    public $perPage = 100;
    
    public $debut;
    public $fin;

    public $exportFileName = 'notes-table';
    
    public function columns()
    {
    return  [
                NumberColumn::name('id')
                    ->label('Num')
                    ->filterable()
                    ->linkTo('candidats', 3),
                Column::name('ano'),
                NumberColumn::name('red')->editable(),
                NumberColumn::name('dic')->editable(),
                NumberColumn::name('tsq')->editable(),
                NumberColumn::name('total'),
            ];
    }
}