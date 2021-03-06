<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;

    public $fillable = ['name', 'statut', 'contact'];

    public function candidats()
    {
    	return $this->hasMany(Candidat::class);
    }

    
}
