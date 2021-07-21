<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JurySetting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('juries.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function createMembre()
    {
        return view('membres.membre-form');
    }

    public function storeMembre(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'prenoms'       => 'required|string|max:255',
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string',
            'status'        => 'nullable|string',
            'matricule'     => 'string|unique:users',
            'grade'         => 'nullable|string',
            'provenance'    => 'nullable|string',
            'contact'       => 'nullable|string',
            'arrived_at'    => 'date|string',
        ]);

        $user = User::create([
            'prenoms'          => $request->prenoms,
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'status'        =>  $request->status,
            'matricule'     =>  $request->matricule,
            'grade'         =>  $request->grade,
            'provenance'    =>  $request->provenance,
            'contact'       =>  $request->contact,
            'arrived_at'    =>  $request->arrived_at,
            'admin'         =>  $request->admin,
        ]);
        
        session()->flash('message', 'Le '. $user->status .' : '. $user->prenoms. ' ' . $user->name .' est enregistré avec succès &#x2602;');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jury = JurySetting::find($id);
        return view('juries.show', compact('jury'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jury = JurySetting::first();

        return view('juries.edit', compact('jury'));
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
       //dd($request->centre);
        $jurySetting = JurySetting::find($id);
        $request->validate([
            'academie'  =>  'required',
            'ief'       =>  'required',
            'centre'    =>  'required',
            'section'    =>  'required',
            'jury'      =>  'required',
            'president' =>  'required',
            'matriculePresident'  =>  'required',
            'gradePresident'  =>  'required',
            'session'    =>  'required',
        ]);

        $jurySetting->update([

            'academie'  =>  $request->academie,
            'ief'       =>  $request->ief,
            'centre'    =>  $request->centre,
            'section'    =>  $request->section,
            'jury'      =>  $request->jury,
            'president' =>  $request->president,
            'matriculePresident'  =>  $request->matriculePresident,
            'gradePresident'  =>  $request->gradePresident,
            'session'    =>  $request->session,
        ]);

        return redirect()->route('dashboard');

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

    public function correcteurs()
    {
        $correcteurs = User::where('status', 'correcteur')->get();
        return view('membres.correcteurs', compact('correcteurs'));
    }

    public function surveillants()
    {
        $surveillants = User::where('status', 'surveillant')->get();
        return view('membres.surveillants', compact('surveillants'));
    }

    public function membres()
    {
        $membres = User::all();
        return view('membres.membres', compact('membres'));
    }
}
