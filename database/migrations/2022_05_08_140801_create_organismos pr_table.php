<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganismosPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organismos pr', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('OP-Codigo')->nullable();
            $table->string('OP-Denominacion')->nullable();
            $table->string('OP-TipoOrganismo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organismos pr');
    }
}
