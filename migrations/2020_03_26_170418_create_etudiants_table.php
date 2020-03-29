<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('idetud');
            $table->integer('cin');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Adresse');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('niveau');
            $table->bigInteger('idsociete')->unsigned();
            $table->foreign('idsociete')->references('idsociete')->on('societes');
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
        Schema::dropIfExists('etudiants');
    }
}
