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
        Schema::create('detalle_ordenes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mesa')->nullable();
            $table->foreign('id_mesa')
                ->references('id')
                ->on('mesas')
                ->onDelete('set null');
            $table->string('cliente', 150);
            $table->unsignedBigInteger('id_orden');
            $table->foreign('id_orden')
                ->references('id')
                ->on('ordenes')
                ->onDelete('cascade');
            $table->string('comentario', 150)->nullable();
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_plato')->nullable();
            $table->foreign('id_plato')
                ->references('id')
                ->on('platos')
                ->onDelete('set null');
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_producto')
                ->references('id')
                ->on('productos')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ordenes');
    }
};
