<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Etablissement;
use App\Models\Candidat;
use App\Models\PhotoCandidat;
use App\Models\Note;
use DB;
use Carbon\Carbon;
use App\Exports\CandidatsExport;
use App\Imports\CandidatsImport;
use Excel;

class CandidatsController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

      return view('candidats.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('access-admin')) {

            abort('403');
        }
        
        $sections = Section::all();
        $etablissements = Etablissement::all();
        
       return view('candidats.create', compact('etablissements', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->all());
        $request->validate([

            'numero'  =>  ['required', 'integer', 'unique:candidats'],
            'fictif1' =>  ['required', 'string', 'unique:candidats'],
            'fictif2' =>  ['required', 'string', 'unique:candidats'],
            'prenoms' =>  ['required'],
            'nom'     =>  ['required'], 
            'datenais' => ['required', 'date'],
            'lieunais' => ['required'],
            'sexe'     => ['required'],
            'aptitude' => ['required'],
            'etablissement_id' => ['required', 'integer'],
            'section_id' => ['required','integer'],
            'epOption' =>   ['required'],
        ]);

        $candidat = Candidat::create([

            'numero'  =>  $request->numero,
            'fictif1' =>  $request->fictif1, 
            'fictif2' =>  $request->fictif2, 
            'prenoms' =>  $request->prenoms, 
            'nom'     =>  $request->nom, 
            'datenais' => $request->datenais, 
            'lieunais' => $request->lieunais, 
            'sexe'     => $request->sexe, 
            'aptitude' => $request->aptitude, 
            'etablissement_id' => $request->etablissement_id, 
            'section_id' => $request->section_id, 
            'epOption' =>   $request->epOption, 
            'lv1'     =>    $request->lv1, 
            'lv2'     =>    $request->lv2, 
            'facultative' =>    $request->facultative,

        ]);

        $photo = new PhotoCandidat();

        if (!empty($request->image)) {

            $photoname = $request->numero.'_'.time().'.'.$request->image->extension();
            $path = $request->image->storeAs('photos', $photoname, 'public');
            $photo->path = $path;

        } else {

            $photo->path = 'photos/default.png';
        }
        
        $candidat->photoCandidat()->save($photo);
        

       // dd($path);

        session()->flash('message', 'le candidat <b>'. $candidat->prenoms . ' ' . $candidat->nom . '</b> est enregistré avec succès');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        //dd($candidat->photoCandidat->path);
        return view('candidats.show', compact('candidat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        $sections = Section::all();
        $etablissements = Etablissement::all();
       return view('candidats.edit', compact('candidat', 'etablissements', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat)
    {
        // Storage::disk('local')->put('example.txt', $request->all());
        // die();
        $request->validate([

            'numero'  =>  ['required', 'integer'],
            'fictif1' =>  ['required', 'string'], 
            'fictif2' =>  ['required', 'string'], 
            'prenoms' =>  ['required'], 
            'nom'     =>  ['required'], 
            'datenais' => ['date'], 
            'lieunais' => ['required'], 
            'sexe'     => ['required'], 
            'aptitude' => ['required'], 
            'etablissement_id' => ['required', 'integer'], 
            'section_id' => ['required','integer'], 
            'epOption' =>   ['required'], 

        ]);

        $candidat->update($request->all());

        session()->flash('message', 'Les données du candidat <b>'. $candidat->prenoms . ' ' . $candidat->nom . '</b> ont été mises à jour avec succès');

        return redirect()->route('candidats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        //
    }

    public function ajourPoints()
    {
        $notes = Note::all();

        foreach ($notes as $note) {
            
            $note->update(['total' => totalPoints($note->candidat_id)]);

        }

        $candidats = Candidat::all();

        foreach ($candidats as $candidat) {
            
            
            if(moyenneCandidat($candidat->id) >= 10){

                $candidat->update([
                    'totalPointsPremTour' => totalPoints($candidat->id),
                    'moyennePT' => moyenneCandidat($candidat->id),
                    'resultatPremTour' => 'A1',
                    'resultat' => 'Admis'
                ]);

            } elseif (moyenneCandidat($candidat->id) >= 8){

                $candidat->update([
                    'totalPointsPremTour' => totalPoints($candidat->id),
                    'moyennePT' => moyenneCandidat($candidat->id),
                    'resultatPremTour' => 'G2',
                    'resultat' => 'Echec'
                ]);

            } else {

                $candidat->update([
                    'totalPointsPremTour' => totalPoints($candidat->id),
                    'moyennePT' => moyenneCandidat($candidat->id),
                    'resultatPremTour' => 'E',
                    'resultat' => 'Echec'
                ]);
            }

        }

        return redirect()->route('notes.index')->with('message','Mises à jour very OK');
    }

    public function exportIntoExcel()
    {
        return Excel::download(new CandidatsExport, 'les_candidats.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new CandidatsExport, 'mescandidats.csv');
    }

    public function importForm()
    {
        return view('candidats.import-form');
    }

    public function importFromExcel(Request $request)
    {

        $request->validate([
            'file' => 'required'
        ]);
        
      Excel::import(new CandidatsImport, $request->file);

        session()->flash('message', 'La liste a été importée avvec succès.');

        return redirect()->route('candidats.index'); 
    }
}
