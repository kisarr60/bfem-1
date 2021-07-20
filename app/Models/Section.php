<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidat;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['title',
    				'admisPremierTour',
    				'repechagePremierTour',
     				'secondTour',
    				'admisSecondTour',
    				'repechageSecondTour'
    			];

    public function candidats()
	{
		return $this->hasMany(Candidat::class);
	}
}
