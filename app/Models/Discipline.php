<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'coef'];

    public function corrections()
    {
        return $this->hasMany(Correction::class);
    }

    public function notations()
    {
        return $this->hasMany(Notation::class);
    }
}
