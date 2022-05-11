<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasNacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas nacion', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('MN-Codigo')->nullable()->unique('MN-Codigo');
            $table->longText('MN-Descripcion')->nullable();
            $table->string('MN-CodigoODS', 2);
            $table->string('MN-MetaAgenda')->nullable();
            $table->string('MN-OrganismoNacion')->nullable();
            $table->string('MN-TipoMeta')->nullable();
            $table->string('MN-Observaciones')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas nacion');
    }
}
