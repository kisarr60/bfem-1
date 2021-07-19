<?php

namespace App\Imports;

use App\Models\Candidat;
use Maatwebsite\Excel\Concerns\{ToModel, WithHeadingRow};

class CandidatsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Candidat([
            'numero'             =>  $row['numero'],
            'fictif1'            =>  $row['fictif1'],
            'fictif2'            =>  $row['fictif2'],
            'prenoms'            =>  $row['prenoms'],
            'nom'                =>  $row['nom'],
            'datenais'           =>  $row['datenais'],
            'lieunais'           =>  $row['lieunais'],
            'sexe'               =>  $row['sexe'],
            'aptitude'           =>  $row['aptitude'],
            'etablissement_id'   =>  $row['etablissement_id'],
            'section_id'         =>  $row['section_id'],
            'epoption'           =>  $row['epoption'],
            'lv1'                =>  $row['lv1'],
            'lv2'                =>  $row['lv2'],
            'facultative'        =>  $row['facultative'],
            'absent'             =>  $row['absent'],
        ]);
    }
}
