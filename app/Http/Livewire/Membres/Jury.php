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
        	NumberColumn::name('id')->label('ID'),        	
        	Column::name('prenoms')->label('Prénoms'),
        	Column::name('name')->label('Nom'),        	
        	Column::name('status')->label('Fonction'),
        	Column::name('email')->label('Email'),        	
        	Column::name('contact')->label('Contact'),
        	BooleanColumn::name('admin')->label('Admin'),
        ];
    }
}