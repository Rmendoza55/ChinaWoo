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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto_pago', 10, 2);
            $table->unsignedBigInteger('id_tipo_pago')->nullable();
            $table->foreign('id_tipo_pago')
                ->references('id')
                ->on('tipo_pagos')
                ->onDelete('set null');
            $table->unsignedBigInteger('id_estado_pago')->nullable();
            $table->foreign('id_estado_pago')
                ->references('id')
                ->on('estado_pagos')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
