<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubproyectoPdlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subproyecto pdl', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('SPRD-Codigo')->nullable()->index('SPRD-Codigo');
            $table->string('SPRD-Denominacion')->nullable();
            $table->longText('SPRD-Descripción')->nullable();
            $table->string('SPRD-ProyectoPDL')->nullable();
            $table->string('SPRD-ObjetivoEspecificoPR')->nullable();
            $table->longText('SPRD-Comentarios')->nullable();
            $table->dateTime('SPRD-FechaRelevamiento')->nullable();
            $table->string('SPRD-EstadoOriginal')->nullable();
            $table->dateTime('SPRD-FechaActualización')->nullable();
            $table->actual`('SPRD-Estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subproyecto pdl');
    }
}
