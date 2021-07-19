<?php

namespace App\Imports;

use App\Models\Note;
use Maatwebsite\Excel\Concerns\ToModel;

class NotesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Note([

            'ano'           =>  $row['ano'],
            'total'         =>  $row['total'],
            'red'           =>  $row['red'],
            'dic'           =>  $row['dic'],
            'tsq'           =>  $row['tsq'],
            'svt'           =>  $row['svt'],
            'ang'           =>  $row['ang'], 
            'math'          =>  $row['math'],
            'hge'           =>  $row['hge'],
            'ec'            =>  $row['ec'],
            'sp'            =>  $row['sp'],
            'part'          =>  $row['part'], 
            'eps'           =>  $row['eps'],
            'oral'          =>  $row['oral'],
            'fac'           =>  $row['fac'],
            'compa'         =>  $row['compa'],
            'edr'           =>  $row['edr'],
            'tsqa'          =>  $row['tsqa'], 
            'teq2t'         =>  $row['teq2t'],
            'mat2t'         =>  $row['mat2t'],
            'part2t'        =>  $row['part2t'],
            'candidat_id'   =>  $row['candidat_id'],
        ]);
    }
}
