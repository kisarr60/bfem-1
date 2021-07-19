<?php

  

function changeDateFormate($date, $date_format){

    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    

}

function EleveImagePath($image_name)

{

    return public_path('images/eleves/'.$image_name);

}

function get_nombreCandidats(?int $section_id = 0, ?int $etablissement_id = 0)
{
    
    $nbCandidats = DB::table('candidats')
                        ->where('section_id', $section_id)
                        ->where('etablissement_id', $etablissement_id)
                        ->count();
     
    return (isset($nbCandidats) ? $nbCandidats : '');
}

function get_NombreCandidatsGarcon($section_id, $etablissement_id) 

{
         
    $nbGarconsM = DB::table('candidats')
                      ->where('section_id', $section_id)
                      ->where('etablissement_id', $etablissement_id)
                      ->where('sexe', 'M')
                      ->count();

    return $nbGarconsM . ($nbGarconsM>1 ? ' garçons' : ' garçon');

} 

function get_CandidatsFille($section_id, $etablissement_id)
{
         
    $nbCandidatsF = DB::table('candidats')
                        ->where('section_id', $section_id)
                        ->where('etablissement_id', $etablissement_id)
                        ->where('sexe', 'F')
                        ->count();
    return $nbCandidatsF . ($nbCandidatsF>1 ? ' filles' : ' fille');

}

    function generatePin($number) {

// Generate set of alpha characters
       $alpha = array();
       for ($u = 65; $u <= 90; $u++) {
           // Uppercase Char
           array_push($alpha, chr($u));
       }

       // Just in case you need lower case
       // for ($l = 97; $l <= 122; $l++) {
       //    // Lowercase Char
       //    array_push($alpha, chr($l));
       // }

       // Get random alpha character
       $rand_alpha_key = array_rand($alpha);
       $rand_alpha = $alpha[$rand_alpha_key];

       // Add the other missing integers
       $rand = array($rand_alpha);
       for ($c = 0; $c < $number - 1; $c++) {
           array_push($rand, mt_rand(0, 9));
           shuffle($rand);
       }

       return implode('', $rand);
    }

    function resultatCandidat(int $num)
    {
      if (moyenneCandidat($num) >= 10)
      {

        $resultat = 'Admis';

      } elseif (moyenneCandidat($num) >= 8)
      {

        $resultat = 'Second tour';

      } else 
      {

        $resultat = 'Echec';

      }

      return $resultat;

    }

    function moyenneCandidat(int $num)
    {
      $candTotal = totalPoints($num);
      $cand = \App\Models\Candidat::where('numero', $num)->first();

      if ($cand->aptitude === 'Apte')
      {
        $moyenne = $candTotal / 21;
      }
      if ($cand->aptitude === 'Inapte')
      {
        $moyenne = $candTotal / 19;
      }
      return $moyenne;
    }

    function totalPoints(int $numero)
    {
        $lasection = DB::table('sections')->where('title', 'Moderne')->get();

        $lesnotes = DB::table('notes')->where('candidat_id', $numero)->first();

        $total = $lesnotes->red*2 + $lesnotes->dic + $lesnotes->tsq + $lesnotes->svt*2 + $lesnotes->ang*2 + $lesnotes->math*3 + $lesnotes->hge*2 + $lesnotes->ec + $lesnotes->sp*2 + $lesnotes->part*2 + $lesnotes->eps*2 + $lesnotes->oral + $lesnotes->fac;

        return $total;
    }

    function totalPointsSdTour(int $numero)
    {
        $lasection = DB::table('sections')->where('title', 'Moderne')->get();

        $lesnotes = DB::table('notes')->where('candidat_id', $numero)->first();

        $totalSdTour = $lesnotes->teq2t*3 + $lesnotes->mat2t*3 + $lesnotes->part2t*2;

        return $totalSdTour;
    }

    function nbMembres($status)
    {
        $membres = DB::table('users')->where('status', $status)->get();

        return $membres;
    }
