<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;

class EtablissementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etablissements = Etablissement::all();

        return view('etablissements.index')->with([

            'etablissements' => $etablissements,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etablissements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etablissement = $request->validate([
            'name'      =>  'required',
            'statut'    =>  'required'
        ]);

        Etablissement::create($request->all());

        return redirect(route('etablissements.index'))->with('status', 'Etablissement ajouté avec succès');
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
    public function edit(Etablissement $etablissement)
    {
        return view('etablissements.edit', compact('etablissement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etablissement $etablissement)
    {
         $etablissement = $request->validate([
            'name'      =>  'required',
            'statut'    =>  'required'
        ]);

         $etablissement->update($request->all());

         return redirect(route('etablissements.index'))->with('status', 'Etablissement mis à jour.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        
        //return redirect(route('etablissements.index'))->with('status', 'Etablissement supprimé avec succès.');
    }
}
