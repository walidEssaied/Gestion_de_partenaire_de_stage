<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocieteHasStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societe_has_stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_societe');
            $table->unsignedBigInteger('id_stage');
            $table->foreign('id_societe')->references('id')->on('societe');
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
        Schema::dropIfExists('societe_has_stages');
    }
}
