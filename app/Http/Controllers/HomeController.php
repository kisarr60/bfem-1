<?php

namespace App\Http\Controllers;

use App\Models\JurySetting;
use App\Models\Section;
use App\Models\Etablissement;
use App\Models\Candidat;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    

    public function index()
    {
    	$lejury = JurySetting::first();
    	return view('welcome', compact('lejury'));
    }

    public function dashboard()
    {

    	
        $users = User::all();
    	$sections = Section::all();
    	$etablissements = Etablissement::all();
    	$candidats = Candidat::with('section', 'etablissement')->get();

    	return view('dashboard', compact('sections', 'etablissements', 'candidats', 'users'));
    }
}
