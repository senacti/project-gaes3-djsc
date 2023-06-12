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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',50);
            $table->integer('cantidad');
            $table->timestamps();
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('id_estado')->references('id')->on('estado__solicitudes');
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
