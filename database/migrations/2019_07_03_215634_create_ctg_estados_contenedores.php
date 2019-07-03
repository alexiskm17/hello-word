<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtgEstadosContenedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctg_estados_contenedores', function (Blueprint $table) {
            $table->bigIncrements('idestadocontenedor');
            $table->string('estado', 10);
            $table->boolean('codigoestado')->index('codigoestado_ctgesetadoscontenedores');
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
        Schema::dropIfExists('ctg_estados_contenedores');
    }
}
