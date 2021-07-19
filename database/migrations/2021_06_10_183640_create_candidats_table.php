<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->index()->unique();
            $table->string('fictif1')->unique();
            $table->string('fictif2')->unique();
            $table->string('prenoms');
            $table->string('nom');
            $table->date('datenais');
            $table->string('lieunais');
            $table->enum('sexe', ['M', 'F']);
            $table->enum('aptitude', ['Apte', 'Inapte']);
            $table->unsignedBigInteger('etablissement_id');
            $table->unsignedBigInteger('section_id');
            $table->enum('epOption', ['Espagnol', 'Portugais', 'Arabe', 'Allemand', 'Russe', 'Italien', 'Latin','Technologie','Economie familiale','STE']);
            $table->enum('lv1', ['Anglais', 'Français'])->default('Anglais');
            $table->enum('lv2', ['Espagnol','Portugais','Arabe','Allemand','Russe','Grec','Néant'])->default('Néant');
            $table->enum('facultative', ['Dessin','Musique','LV2','EC', 'Anglais', 'Néant'])->default('Néant');
            $table->integer('absent')->default(0);
            $table->float('totalPointsPremTour')->nullable()->default(0);
            $table->enum('resultatPremTour', ['E', 'G2', 'A1'])->default('E');
            $table->float('totalPointsSdTour')->nullable()->default(0);
            $table->enum('resultatSdTour', ['E', 'A2'])->nullable()->default('E');
            $table->enum('resultat', ['Echec', 'Admis'])->default('Echec');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}
