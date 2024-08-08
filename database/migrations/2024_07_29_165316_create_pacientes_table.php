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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Datos médicos
            $table->string('nro_historia_clinica')->unique(); // Número de historia clínica
            $table->string('grupo_sanguineo', 10);
            $table->text('alergias')->nullable(); // Lista de alergias
            $table->text('condiciones_preexistentes')->nullable(); // Condiciones médicas preexistentes
            $table->text('medicamentos_actuales')->nullable(); // Medicamentos actuales
            $table->text('vacunas_recibidas')->nullable(); // Información sobre vacunas
            $table->text('antecedentes_familiares')->nullable(); // Condiciones médicas familiares
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
