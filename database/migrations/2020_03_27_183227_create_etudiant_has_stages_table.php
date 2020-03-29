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
            $table->unsignedBigInteger('cin_etudiant');
            $table->unsignedBigInteger('id_stage');
            $table->foreign('cin_etudiant')->references('cin')->on('etudiant');
            $table->foreign('id_stage')->references('id')->on('stage');
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
