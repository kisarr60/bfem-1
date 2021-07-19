<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoCandidat extends Model
{
    use HasFactory;

    protected $table = 'photo_candidats';

    protected $fillable = [

    	'candidat_id',
    	'path',
    ];

    public function candidat()
	{
		return $this->belongsTo(Candidat::class);
	}
}
