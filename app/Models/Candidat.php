<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Note;
use App\Models\Etablissement;
use App\Models\Section;
use Illuminate\Support\Facades\DB;


class Candidat extends Model
{

	
    use HasFactory;

    protected $dates = [
        'created_at',
        'datenais',
    ];

    protected $fillable = [
        'numero', 'total', 'fictif1', 'fictif2', 'prenoms', 'nom', 'datenais', 'lieunais', 'sexe', 'aptitude', 'etablissement_id', 'section_id', 'epoption', 'lv1', 'lv2', 'facultative', 'absent', 'totalPointsPremTour', 'resultatPremTour', 'moyennePT', 'totalPointsSdTour', 'resultatSdTour', 'resultat',
    ];

    public function photoCandidat()
    {
        return $this->hasOne(PhotoCandidat::class);
    }

    public function note()
    {
    	return $this->hasOne(Note::class);
    }

    public function notations()
    {
        return $this->hasMany(Notation::class);
    }

    public function etablissement()
    {
    	return $this->belongsTo(Etablissement::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function getResultatPremTourAttribute($attributes)
    {
        return [
            'E'     => 'Echec',
            'G2'    => 'Second tour',
            'A1'    => 'Admis au premier tour'
        ][$attributes];
    }

    public function scopePresence(){

        if($this->sexe == 'M')
        {
            if($this->absent == 1){
            return 'Absent';
            }

            return 'Présent';
        }

        if($this->sexe == 'F')
        {
            if($this->absent == 1){
            return 'Absente';
            }

            return 'Présente';
        }
        
    }

    public function scopeLesexe(){

        if($this->sexe == 'M'){
            return 'Mascilin';
        }

        return 'Féminin';
    }

    public function scopeNomComplet()
    {

        return $this->prenoms .' '. $this->nom;
    }

    public function getResultatSdTourAttribute($attributes)
    {
        return [
            'E' => 'Echec au second groupe',
            'A2' => 'Admis au second tour'
        ][$attributes];
    }


    protected static function boot()
    {
        parent::boot();

        static::created(function ($candidat) {
            $candidat->note()->create([
                'ano' => $candidat->fictif1,
            ]);

           // Mail::to($user->email)->send(new NewUserWelcomeMail());
        });
    }

    public static function getCandidats()
    {
        $records = DB::table('candidats')->select('numero', 'fictif1', 'fictif2', 'prenoms', 'nom', 'datenais', 'lieunais', 'sexe', 'aptitude', 'etablissement_id', 'section_id', 'epoption', 'lv1', 'lv2', 'facultative', 'absent')->get();

        return $records;
    }
}
