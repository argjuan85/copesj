<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetivosEspecificosPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos especificos pr', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('OEPR-Codigo')->nullable();
            $table->longText('OEPR-Descripcion')->nullable();
            $table->string('OEPR-ObjetivoGeneral')->nullable();
            $table->string('OEPR-LineaEstrategica')->nullable();
            $table->string('OEPR-MetaNacion')->nullable();
            $table->string('OEPR-MetaAgenda')->nullable();
            $table->string('OEPR-OrganismoProvincia')->nullable();
            $table->string('OEPR-IndicadorProvincia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetivos especificos pr');
    }
}
