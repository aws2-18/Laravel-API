<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntsWifiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wifis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigocapa');
            $table->string('capagenerica');
            $table->string('nombrecapa');
            $table->string('equipamiento');
            $table->string('nombredistricto');
            $table->string('nombrebarrio');
            $table->string('direccion');


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
        Schema::dropIfExists('wifis');
    }
}
