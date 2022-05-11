<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresPdlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores pdl', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('ID-Codigo')->nullable()->index('ID-Codigo');
            $table->string('ID-Descripcion')->nullable()->index('ID-Descripcion');
            $table->string('ID-Departamento')->nullable()->index('ID-Departamento');
            $table->string('ID-IndicadorProvincia')->nullable()->index('ID-IndicadorProvincia');
            $table->string('ID-FichaTecnica')->nullable()->index('ID-FichaTecnica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores pdl');
    }
}
