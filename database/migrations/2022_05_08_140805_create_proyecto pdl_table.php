<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoPdlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto pdl', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('PROYD-Codigo')->nullable();
            $table->string('PROYD-Denominacion')->nullable();
            $table->longText('PROYD-Descripción')->nullable();
            $table->string('PROYD-ProgramaPDL')->nullable();
            $table->string('PROYD-ObjetivoGeneralPDL')->nullable();
            $table->longText('PROYD-ObjetivoEspecificoPDL')->nullable();
            $table->longText('PROYD-VinculoPESJ')->nullable();
            $table->longText('PROYD-VinculoODS')->nullable();
            $table->longText('PROYD-ActoresRelevantes')->nullable();
            $table->longText('PROYD-ResponsablesProy')->nullable();
            $table->longText('PROYD-Beneficiarios')->nullable();
            $table->longText('PROYD-ProyVinculados')->nullable();
            $table->longText('PROYD-IndicadorPDL')->nullable();
            $table->string('PROYD-EstimacionPresup')->nullable();
            $table->string('PROYD-EscalaImpacto')->nullable();
            $table->longText('PROYD-Comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto pdl');
    }
}
