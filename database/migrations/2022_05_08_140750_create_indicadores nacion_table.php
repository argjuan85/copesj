<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresNacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores nacion', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('IN-Codigo')->unique('IN-Codigo');
            $table->longText('IN-Descripcion')->nullable();
            $table->string('IN-Nivel')->nullable();
            $table->string('IN-MetasNacion')->nullable();
            $table->string('IN-IndicadorAgenda')->nullable();
            $table->string('IN-FichaTecnica')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores nacion');
    }
}
