<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaPdlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa pdl', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('PROGD-Codigo')->nullable();
            $table->string('PROGD-Denominacion')->nullable();
            $table->string('PROGD-LineaPDL')->nullable();
            $table->longText('PROGD-Comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa pdl');
    }
}
