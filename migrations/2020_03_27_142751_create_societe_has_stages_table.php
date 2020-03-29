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
            $table->bigInteger('idsociete')->unsigned();
            $table->bigInteger('idstage')->unsigned();
            $table->foreign('idsociete')->references('idsociete')->on('societes');
            $table->foreign('idstage')->references('idstage')->on('stages');
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
