<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;

    protected $fillable = [
    	'user_id', 'discipline_id', 'candidat_id', 'mark',
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
