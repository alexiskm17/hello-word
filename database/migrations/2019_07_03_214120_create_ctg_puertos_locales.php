<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtgPuertosLocales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctg_puertos_locales', function (Blueprint $table) {
            $table->bigIncrements('idpuertolocal');
            $table->string('codigopuertolocal',5)->index('codigopuertolocal_ctgpuertoslocales');
            $table->string('puerto', 65);
            $table->boolean('maritimo');
            $table->bigInteger('glnaduana');
            $table->bigInteger('glnpuerto');
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
        Schema::dropIfExists('ctg_puertos_locales');
    }
}
