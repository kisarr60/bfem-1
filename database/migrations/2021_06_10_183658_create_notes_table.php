<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();            
            $table->string('ano')->unique();            
            $table->decimal('total');
            $table->decimal('red')->nullable()->default(0);
            $table->decimal('dic')->nullable()->default(0);
            $table->decimal('tsq')->nullable()->default(0);
            $table->decimal('svt')->nullable()->default(0);
            $table->decimal('ang')->nullable()->default(0);
            $table->decimal('math')->nullable()->default(0);
            $table->decimal('hge')->nullable()->default(0);
            $table->decimal('ec')->nullable()->default(0);
            $table->decimal('sp')->nullable()->default(0);
            $table->decimal('part')->nullable()->default(0);
            $table->decimal('eps')->nullable()->default(0);
            $table->decimal('oral')->nullable()->default(0);
            $table->decimal('fac')->nullable()->default(0);
            $table->decimal('compa')->nullable()->default(0);
            $table->decimal('edr')->nullable()->default(0);
            $table->decimal('tsqa')->nullable()->default(0);
            $table->decimal('teq2t')->nullable()->default(0);
            $table->decimal('mat2t')->nullable()->default(0);
            $table->decimal('part2t')->nullable()->default(0);
            $table->unsignedBigInteger('candidat_id');
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
        Schema::dropIfExists('notes');
    }
}
