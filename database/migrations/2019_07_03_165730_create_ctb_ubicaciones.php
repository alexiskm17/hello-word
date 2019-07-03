<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtbUbicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctg_ubicaciones', function (Blueprint $table) {
            $table->bigIncrements('idubicacion');
            $table->string('codigoubicacion', 5)->index('codigoubicacion_ctg_ubicaciones');
            $table->string('ubicacion', 65);
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
        Schema::dropIfExists('ctg_ubicaciones');
    }
}
