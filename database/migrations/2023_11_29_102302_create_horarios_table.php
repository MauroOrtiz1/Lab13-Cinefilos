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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_inicio');
            $table->string('fecha_final');
            $table->string('hora_inicio');
            $table->string('hora_final');
            $table->unsignedBigInteger('sala_id');
            $table->foreign('sala_id')->references('id')->on('salas');
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
        Schema::dropIfExists('horarios');
    }
};
