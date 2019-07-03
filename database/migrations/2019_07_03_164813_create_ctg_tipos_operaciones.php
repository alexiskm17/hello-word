<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtgTiposOperaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctg_tipos_operaciones', function (Blueprint $table) {
            $table->bigIncrements('idtipooperacion');
            $table->integer('codigooperacion')->index('codigooperacion_ctg_tiposoperaciones');
            $table->string('descripcion', 55);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ctg_tipos_operaciones');
    }
}
