<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $dates = [
        'created_at',
        'arrived_at',
    ];
}
