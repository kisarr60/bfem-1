<?php

namespace App\Exports;

use App\Models\Candidat;
use Maatwebsite\Excel\Concerns\{
		FromCollection,
		withHeadings,
	};

class CandidatsExport implements FromCollection, withHeadings
{

	public function headings() :array
	{
		return [

			'id', 'numero', 'fictif1', 'fictif2', 'prenoms', 'nom', 'datenais', 'lieunais', 'sexe', 'aptitude', 'etablissement_id', 'section_id', 'epOption', 'lv1', 'lv2', 'facultative', 'absent'
		];
	}
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Candidat::getCandidats());
    }
}
