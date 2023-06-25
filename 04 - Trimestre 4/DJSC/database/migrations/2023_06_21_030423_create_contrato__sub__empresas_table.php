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
        Schema::create('contrato__sub__empresas', function (Blueprint $table) {
            $table->id();
            $table->string('detalles',200);
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();

            $table->foreign('id_estado')->references('id')->on('estado__contratos');
            $table->foreign('id_empresa')->references('id')->on('sub__empresas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato__sub__empresas');
    }
};
