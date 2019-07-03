<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListAtc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_atc', function (Blueprint $table) {
            $table->bigIncrements('idatc');
            $table->bigInteger('idempresa')->index('idempresa_listatc')->unsigned();
            $table->integer('atc');
            $table->dateTime('fechaatc');
            $table->dateTime('fechavencimiento');
            $table->string('usuariocrea', 65);
            $table->dateTime('fechacrea');
            $table->string('usuarioactualiza', 65);
            $table->dateTime('fechaactualiza');
            $table->timestamps();

        });

        Schema::table('list_atc', function(Blueprint $table){
            $table->foreign('idempresa')->references('idempresa')->on('admin_empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_atc');
    }
}
