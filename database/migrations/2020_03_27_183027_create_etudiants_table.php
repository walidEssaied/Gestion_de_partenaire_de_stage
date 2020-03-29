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
            $table->unsignedBigInteger('cin');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Adresse');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('niveau');
            $table->bigInteger('societe_id');
            $table->primary('cin');
            $table->foreign('societe_id')->references('id')->on('societe');
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
