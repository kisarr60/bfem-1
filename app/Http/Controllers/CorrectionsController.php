<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\Candidat;

use App\Models\Correction;
use App\Models\Note;
use App\Models\Notation;
use App\Models\Discipline;
use App\Models\user;
use DB;
use Carbon\Carbon;
use App\Exports\CandidatsExport;
use App\Imports\CandidatsImport;
use Excel;

class CorrectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $correction = Correction::with('user', 'discipline')->first();
       $candidats = Candidat::whereBetween('numero', [$correction->num_debut, $correction->num_fin])->get();
        return $candidats;
       return view('corrections.index')->with(['corrections' => $corrections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplines = Discipline::all();
        $correcteurs = User::where('status', 'correcteur')->get();
        //dd($disciplines);
        return view('corrections.create', compact('correcteurs', 'disciplines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'user_id'   =>  'required',
            'discipline_id'   =>  'required',
            'num_debut'   =>  'required',
            'num_fin'   =>  'required',
        ]);

        $data = Correction::create([

            'user_id'   =>  $request->user_id,
            'discipline_id'   =>  $request->discipline_id,
            'num_debut'   =>  $request->num_debut,
            'num_fin'   =>  $request->num_fin,
        ]);

    //  return ($data);

        $candidats = Candidat::orderBy('id')->whereBetween('numero', [$request->num_debut, $request->num_fin])->get();
    //    dd($candidats);
        foreach($candidats as $candidat){

            Notation::create([
                'candidat_id'   => $candidat->id,
                'discipline_id' => $data->discipline_id,
                'user_id'       => $data->user_id,                
                'correction_id' => $data->id,
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
