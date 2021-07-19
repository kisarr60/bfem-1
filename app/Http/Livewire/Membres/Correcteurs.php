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

class Correcteurs extends LivewireDatatable
{
    public $model = User::class;

    public function builder()
    {
        return User::query()->where('status','correcteur');
    }

    public function columns()
    {
        return [
        	NumberColumn::name('id')->label('ID'),
        	Column::name('name')->label('Prénoms et Nom'),
        ];
    }
}