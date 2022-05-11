<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores pr', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('IP-Codigo')->nullable();
            $table->string('IP-Descripcion')->nullable();
            $table->string('IP-IndicadorNacion')->nullable();
            $table->string('IP-IndicadorAgenda')->nullable();
            $table->string('IP-FichaTecnica')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores pr');
    }
}
