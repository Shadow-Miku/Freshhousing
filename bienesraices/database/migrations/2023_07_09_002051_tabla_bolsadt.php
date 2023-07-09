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
        Schema::create('bolsadt', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('idtrab');
            $table->unsignedBigInteger('autorid');
            $table->unsignedBigInteger('categoriaid');
            $table->string('titulo');
            $table->string('url')->nullable();
            $table->text('descripcion');
            $table->foreign('autorid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoriaid')->references('idcategoria')->on('categorias_bolsadt')->onDelete('cascade');
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
        Schema::dropIfExists('bolsadt');
    }
};