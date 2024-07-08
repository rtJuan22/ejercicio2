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
        Schema::create('gols', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('minuto');
            $table->unsignedBigInteger('jugador_id');
            $table->unsignedBigInteger('partido_id');
            $table->foreign('jugador_id')->references('id')->on('jugadors')->onDelete('cascade');
            $table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gols');
    }
};
