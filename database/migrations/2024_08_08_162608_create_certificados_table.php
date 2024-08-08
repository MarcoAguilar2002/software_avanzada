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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        
            $table->string('nombre_certificado'); // Nombre del certificado o título
            $table->string('institucion'); // Institución que emitió el certificado
            $table->date('fecha_obtencion'); // Fecha en la que se obtuvo el certificado
            $table->string('archivo_certificado')->nullable(); // Ruta al archivo del certificado (si se guarda un archivo digital)
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
