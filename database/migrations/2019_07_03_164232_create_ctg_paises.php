<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtgPaises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctg_paises', function (Blueprint $table) {
            $table->bigIncrements('idpais');
            $table->string('codigopais', 2)->index('codigopais_ctg_paises');
            $table->string('pais_name1', 60);
            $table->string('pais_name2', 60);
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
        Schema::dropIfExists('ctg_paises');
    }
}
