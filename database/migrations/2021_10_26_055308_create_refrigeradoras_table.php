<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefrigeradorasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbrefrigeradora', function (Blueprint $table) {
            $table->increments('idrefrigeradora');
            $table->integer('idmarcas');
            $table->string('refridesc');
            $table->integer('refricantidad');
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
        Schema::drop('tbrefrigeradora');
    }
}
