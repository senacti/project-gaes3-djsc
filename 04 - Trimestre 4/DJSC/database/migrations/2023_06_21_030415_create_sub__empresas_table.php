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
        Schema::create('sub__empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();

            $table->foreign('id_estado')->references('id')->on('estado__sub__empresas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub__empresas');
    }
};
