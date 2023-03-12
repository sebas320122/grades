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
        Schema::create('acts', function (Blueprint $table) {
            $table->id('id_act');
            $table->string('tipo'); 
            $table->string('fecha');
            $table->string('calificacion');

            $table->unsignedBigInteger('id_curso');
            $table->foreign('id_curso')
            ->references('id_curso')
            ->on('cursos')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acts');
    }
};
