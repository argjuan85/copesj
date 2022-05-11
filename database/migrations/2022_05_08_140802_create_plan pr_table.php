<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan pr', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('PLAN-Codigo')->nullable();
            $table->string('PLAN-Denominacion')->nullable();
            $table->string('PLAN-LineaEstrategicaPR')->nullable();
            $table->string('PLAN-Comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan pr');
    }
}
