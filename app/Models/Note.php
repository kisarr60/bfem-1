<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidat;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
    	'ano', 'total', 'red', 'dic', 'tsq', 'svt', 'ang', 
    	'math', 'hge', 'ec', 'sp', 'part', 
    	'eps', 'oral', 'fac', 'compa', 'edr', 'tsqa', 
    	'teq2t', 'mat2t', 'part2t', 'candidat_id'
    ];


    public function candidat()
	{
		return $this->belongsTo(Candidat::class);
	}

    

}
