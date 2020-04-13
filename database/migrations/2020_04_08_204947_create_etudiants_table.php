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
            $table->bigIncrements('idetudiant');
            $table->integer('cin');
            $table->string('nom',45);
            $table->string('prenom',45);
            $table->string('adresse',45);
            $table->bigInteger('tel');
            $table->string('email',45);
            $table->string('niveau',45);
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
