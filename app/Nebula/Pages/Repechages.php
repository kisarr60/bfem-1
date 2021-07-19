<?php

namespace App\Nebula\Pages;

use Larsklopstra\Nebula\Contracts\NebulaPage;
use App\Models\Section;

class Repechages extends NebulaPage
{
	
    public function icon()
    {
        return 'document';
    }


    public function render()
    {
    	$sections = Section::all();

        return view('nebula.pages.repêchages', compact('sections'));
    }
}
