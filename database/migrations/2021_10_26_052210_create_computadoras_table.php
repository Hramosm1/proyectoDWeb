<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcomputadoras', function (Blueprint $table) {
            $table->increments('idcomputadoras');
            $table->integer('idmarcas');
            $table->string('compdescripcion');
            $table->integer('compcantidad');
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
        Schema::drop('tbcomputadoras');
    }
}
