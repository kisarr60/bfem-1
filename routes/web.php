<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidatsController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\EtablissementsController;
use App\Http\Controllers\DisciplinesController;
use App\Http\Controllers\CorrectionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::middleware('secretaire')->group(function() {
    	Route::resource('candidats', CandidatsController::class);
        Route::get('/membre-create', [JuryController::class, 'createMembre'])->name('creer-membre');
        Route::post('/membre-create', [JuryController::class, 'storeMembre'])->name('store-membre');
    });
    Route::middleware('correcteur')->group(function() {
    	Route::resource('notes', NotesController::class);
    });
    Route::middleware('is_admin')->group(function(){

    	Route::resource('sections', SectionsController::class);
		
		Route::resource('juries', JuryController::class);
	    Route::get('/export-candidats-excel', [CandidatsController::class, 'exportIntoExcel'])->name('candidats-to-excel');

	    Route::get('/importer-candidats', [CandidatsController::class, 'importForm'])->name('form-candidats-excel');
	    Route::post('/importer-candidats', [CandidatsController::class, 'importFromExcel'])->name('form-candidats-excel');
    });
    
    
    Route::get('surveillants', [JuryController::class, 'surveillants'])->name('surveillants');
    Route::get('correcteurs', [JuryController::class, 'correcteurs'])->name('correcteurs');
    Route::get('membres-jury', [JuryController::class, 'membres'])->name('membres');
    Route::get('/mise-jour', [CandidatsController::class, 'ajourPoints']);
});

Route::resource('/corrections', CorrectionsController::class);
Route::resource('/disciplines', DisciplinesController::class);
Route::resource('etablissements', EtablissementsController::class);


require __DIR__.'/auth.php';
