<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'num_debut', 'num_fin', 'discipline_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function discipline()
    {
    	return $this->belongsTo(Discipline::class);
    }
}
