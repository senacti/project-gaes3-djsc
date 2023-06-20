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
        Schema::create('producciones', function (Blueprint $table) {
            $table->id();
            $table->date('fechaproduccion');
            $table->timestamps();
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_novedad');

            $table->foreign('id_tipo')->references('id')->on('tipo__producciones');
            $table->foreign('id_estado')->references('id')->on('estado__producciones');
            $table->foreign('id_novedad')->references('id')->on('novedad__producciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producciones');
    }
};