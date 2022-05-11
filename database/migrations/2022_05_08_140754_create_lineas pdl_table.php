<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineasPdlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas pdl', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('LED-Codigo')->nullable();
            $table->string('LED-Descripcion')->nullable();
            $table->string('LED-SiglaDpto')->nullable();
            $table->longText('LED-Comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas pdl');
    }
}
