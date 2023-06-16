<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('idPub');
            $table->unsignedBigInteger('autorid');
            $table->string('titulo');
            $table->float('precio',14,2);
            $table->string('url')->nullable();
            $table->text('descripcion');
            $table->integer('habitaciones');
            $table->integer('baños');
            $table->integer('estacionamiento');
            $table->foreign('autorid')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('publicaciones');
    }
};
