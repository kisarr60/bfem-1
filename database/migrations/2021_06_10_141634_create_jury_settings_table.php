<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jury_settings', function (Blueprint $table) {
            $table->id();
            $table->string('academie');
            $table->string('ief');
            $table->string('centre');
            $table->string('section');
            $table->string('jury');
            $table->string('president');
            $table->string('matriculePresident');
            $table->string('gradePresident');
            $table->string('session');
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
        Schema::dropIfExists('jury_settings');
    }
}
