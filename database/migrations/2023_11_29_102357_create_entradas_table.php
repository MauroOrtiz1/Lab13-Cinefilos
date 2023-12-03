<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->integer('precio');
            $table->string('clasificacion');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('horario_id');
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->unsignedBigInteger('pelicula_id');
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
