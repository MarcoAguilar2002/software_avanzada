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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_colegiado')->unique(); // Código del Colegio Médico del Perú
            $table->string('especialidad'); // Especialidad principal del doctor
            $table->integer('anos_experiencia')->nullable(); // Años de experiencia

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
<<<<<<< HEAD
=======

>>>>>>> bda0805694c6fb2705483a685dcaf605245d8953
        Schema::dropIfExists('doctors');
    }
};
