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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Información general
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('dni')->unique();
            $table->string('celular', 12);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('genero', 20)->nullable();
            $table->string('foto')->nullable(); // Ruta de la foto del perfil
            $table->string('estado_civil')->nullable();
            $table->string('region')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('pais')->default('Perú');

            // Información de emergencia
            $table->string('contacto_emergencia')->nullable();
            $table->string('relacion_contacto_emergencia')->nullable();
            $table->string('telefono_contacto_emergencia')->nullable();

                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
