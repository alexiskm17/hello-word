<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListBarcos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_barcos', function (Blueprint $table) {
            $table->bigIncrements('idbarco');
            $table->bigInteger('idempresa')->index('idempresa_listbarcos')->unsigned();
            $table->string('codigopuertolocal',5)->index('codigopuertolocal_listbarcos');
            $table->string('nombrebarco', 50);
            $table->string('numviaje', 50);
            $table->integer('codigooperacion')->index('codigooperacion_listsbarcos');
            $table->string('usuariocrea', 65);
            $table->dateTime('fechacrea');
            $table->string('usuariomodifica',65);
            $table->dateTime('fechamodifica');
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
        Schema::dropIfExists('list_barcos');
    }
}
