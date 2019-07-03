<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListContenedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_contenedores', function (Blueprint $table) {
            $table->bigIncrements('idcontenedor');
            $table->bigInteger('idempresa')->index('idempresa_listcontenedores')->unsigned();
            $table->bigInteger('idbarco')->index('idbarco_listcontenedores')->unsigned();
            $table->bigInteger('idatc')->index('idatc_listcontenedores')->unsigned();
            $table->integer('codigooperacion')->index('codigooperacion_listcontenedores');
            $table->string('contenedor', 12);
            $table->string('tipocontenedor', 4)->index('tipocontenedor_listcontenedores');
            $table->bigInteger('idestadocontenedor')->index('idestadocontenedor_listcontenedores')->unsigned();
            $table->string('usuariocrea', 65);
            $table->dateTime('fechacrea');
            $table->string('usuariomodifica', 65);
            $table->dateTime('fechamodifica');
            $table->timestamps();
        });

        Schema::table('list_contenedores', function(Blueprint $table){
            $table->foreign('idempresa')->references('idempresa')->on('admin_empresas')->onDelete('cascade');
            $table->foreign('idbarco')->references('idbarco')->on('list_barcos')->onDelete('cascade');
            $table->foreign('idatc')->references('idatc')->on('list_atc')->onDelete('cascade');
            $table->foreign('codigooperacion')->references('codigooperacion')->on('ctg_tipos_operaciones');
            $table->foreign('tipocontenedor')->references('tipocontenedor')->on('ctg_tipos_contenedores');
            $table->foreign('idestadocontenedor')->references('idestadocontenedor')->on('ctg_estados_contenedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_contenedores');
    }
}
