<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateListBarcos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('list_barcos', function (Blueprint $table) {
            $table->foreign('codigopuertolocal')->references('codigopuertolocal')->on('ctg_puertos_locales');
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
        Schema::table('list_barcos', function (Blueprint $table) {
            //
        });
    }
}
