<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ods', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('ODS-Numero', 2);
            $table->string('ODS-Denominacion');
            $table->longText('ODS-Descripcion');
            $table->longblob('ODS-Logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ods');
    }
}
