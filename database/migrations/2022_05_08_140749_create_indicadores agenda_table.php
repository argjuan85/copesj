<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores agenda', function (Blueprint $table) {
            $table->integer('Id')->index('Id');
            $table->string('IA-Codigo')->unique('IA-Codigo');
            $table->longText('IA-Descripcion')->nullable();
            $table->string('IA-Nivel')->nullable();
            $table->string('IA-MetasAgenda')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores agenda');
    }
}
