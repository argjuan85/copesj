<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetivosGeneralesPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos generales pr', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('OGPR-Codigo')->nullable();
            $table->longText('OGPR-Descripcion')->nullable();
            $table->string('OGPR-EjeProvincia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetivos generales pr');
    }
}
