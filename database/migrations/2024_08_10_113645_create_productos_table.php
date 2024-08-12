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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto', 150);
            $table->string('foto_producto', 250);
            $table->string('descripcion', 250)->nullable();
            $table->decimal('precio');
            $table->integer('stock');
            $table->unsignedBigInteger('id_estado_producto')->nullable();
            $table->foreign('id_estado_producto')
                ->references('id')
                ->on('estado_productos')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
