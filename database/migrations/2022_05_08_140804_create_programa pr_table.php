<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa pr', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('PROGPR-Codigo')->nullable();
            $table->string('PROGPR-Denominacion')->nullable();
            $table->string('PROGPR-PlanPR')->nullable();
            $table->string('PROGPR-Comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa pr');
    }
}
