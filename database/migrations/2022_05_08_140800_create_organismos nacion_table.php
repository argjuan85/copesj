<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganismosNacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organismos nacion', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('ON-Codigo')->nullable();
            $table->string('ON-Denominacion')->nullable();
            $table->string('ON-TipoOrganismo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organismos nacion');
    }
}
