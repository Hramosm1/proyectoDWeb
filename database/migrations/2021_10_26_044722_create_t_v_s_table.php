<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTVSTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtv', function (Blueprint $table) {
            $table->increments('idtv');
            $table->integer('idmarcas');
            $table->string('tvdescripcion');
            $table->integer('tvcantidad');
            $table->integer('idubicacion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtv');
    }
}
