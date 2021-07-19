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

class Surveillants extends LivewireDatatable
{
    public $model = User::class;

    public function builder()
    {
        return User::query()->where('status','surveillant');
    }

    public function columns()
    {
        return [
        	NumberColumn::name('id')->label('Num'),
        	Column::name('prenoms')->label('Prénom'),
        	Column::name('name')->label('Nom'),
        	Column::name('matricule')->label('Matricule'),
        	Column::name('grade')->label('Grade'),

        	Column::name('contact')->label('ontact'),
        	Column::name('provenance')->label('Provenance'),
        	DateColumn::name('arrived_at')->label('Arrivée'),
        	BooleanColumn::name('admin')->label('Admin'),
        ];
    }
}