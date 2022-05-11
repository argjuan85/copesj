<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto pr', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('PROYPR-Codigo')->nullable();
            $table->string('PROYPR-Denominacion')->nullable();
            $table->string('PROYPR-ProgramaPR')->nullable();
            $table->string('PROYPR-ObjetivoEspecifico')->nullable();
            $table->string('PROYPR-Indicador')->nullable();
            $table->string('PROYPR-Comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto pr');
    }
}
