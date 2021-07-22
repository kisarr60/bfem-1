<?php

namespace App\Http\Livewire\Membres;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use App\Models\User;
use Mediconesystems\LivewireDatatables\ {
    Column,
    DateColumn,
    TimeColumn,
    BooleanColumn,
    NumberColumn
};
use Carbon\Carbon;

class Jury extends LivewireDatatable
{
    public $model = User::class;

    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
        	NumberColumn::name('id')->linkTo('membres', 3)->label('ID'),        	
        	Column::name('prenoms')->label('Prénoms'),
        	Column::name('name')->label('Nom'),
        	Column::name('provenance')->label('Provenance'),
        	Column::name('status')->label('Fonction'),
        	Column::name('contact')->label('Contact'),
        	DateColumn::name('arrived_at')->label('Arrivée')->format(),
        	BooleanColumn::name('admin')->label('Admin'),
        ];
    }
}