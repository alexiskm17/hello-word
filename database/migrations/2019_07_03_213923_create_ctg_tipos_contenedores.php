<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtgTiposContenedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctg_tipos_contenedores', function (Blueprint $table) {
            $table->bigIncrements('idtipocontenedor');
            $table->string('tipocontenedor', 4)->index('tipocontenedor_ctgtiposcontenedores');
            $table->string('tipo', 75);
            $table->boolean('mostrar')->default(0);
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
        Schema::dropIfExists('ctg_tipos_contenedores');
    }
}
