<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCochesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('coches', function (Blueprint $table) {
            $table->increments('id_coche');
            $table->string('modelo');
            $table->integer('id_marca');
            $table->double('precio');
            $table->float('consumo');
            $table->float('motor');
            $table->integer('cv');
            $table->string('imagen');
            $table->timestamps();
            $table->foreign('id_marca')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('coches');
    }

}
