<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados proyectos', function (Blueprint $table) {
            $table->integer('Id')->index()->primary();
            $table->string('ESTADO-codigo')->nullable();
            $table->string('ESTADO-denominación')->nullable();
            $table->longText('ESTADO-descripción')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados proyectos');
    }
}
