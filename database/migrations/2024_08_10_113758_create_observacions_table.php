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
        Schema::create('observacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orden')->nullable();
            $table->foreign('id_orden')
                ->references('id')
                ->on('ordenes')
                ->onDelete('set null');
            $table->string('observacion', 500);
            $table->unsignedBigInteger('id_estado_observacion')->nullable();
            $table->foreign('id_estado_observacion')
                ->references('id')
                ->on('estado_observacions')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observacions');
    }
};
