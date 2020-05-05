<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantHasStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_has_stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idetud')->unsigned();
            $table->bigInteger('idstage')->unsigned();
            $table->foreign('idetud')->references('id')->on('etudiants');
            $table->foreign('idstage')->references('id')->on('stages');
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
        Schema::dropIfExists('etudiant_has_stages');
    }
}
