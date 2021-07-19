<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenoms',
        'name',
        'email',
        'password',
        'status',
        'matricule',
        'grade',
        'provenance',
        'contact',
        'arrived_at',
        'admin',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'admin' =>  'boolean',
    ];

    public static function getCorrecteurs()
    {
        $correcteurs = User::where('status', 'correcteur')->get();

        return $correcteurs;
    }

    public function scopeNomComplet()
    {

        return $this->prenoms .' '. $this->name;
    }

    public static function scopeSurveillants()
    {
        $surveillants = User::where('status', 'surveillant')->get();

        return $surveillants;
    }

    public function isAdmin(): bool
    {
        return $this->admin == 1;
    }

    public function corrections()
    {
        return $this->hasMany(Correction::class);
    }

    public function hasRole(string $role): bool
    {
        return $this->role == $role ? true : false;
    }

    public function statusClass(): string
    {
        return 

        [
            'president' =>  'bg-red-400',

            'secretaire'    =>  'bg-red-300',

            'surveillant'   =>  'bg-indigo-500',

            'correcteur'    =>  'bg-green-500',

        ][$this->status ?? 'bg-gray-500'];
    }

    public function notations()
    {
        return $this->hasMany(Notation::class);
    }
    
}
