<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas agenda', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('MA-Codigo')->unique('MA-Codigo');
            $table->longText('MA-Descripcion');
            $table->string('MA-NumeroODS', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas agenda');
    }
}
