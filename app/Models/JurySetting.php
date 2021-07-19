<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurySetting extends Model
{
    use HasFactory;

    protected $fillable = [

    	'academie',
    	'ief',
    	'centre',
    	'section',
    	'jury',
    	'president',
    	'matricule',
    	'grade',
    	'session',
    	
    ];


}
