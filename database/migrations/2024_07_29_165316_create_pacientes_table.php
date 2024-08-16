    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Datos médicos
            $table->string('nro_seguro')->unique()->nullable();;// Número de historia clínica
            $table->string('grupo_sanguineo', 10)->nullable();
            $table->text('alergias')->nullable(); // Lista de alergias
            $table->text('vacunas_recibidas')->nullable(); // Información sobre vacunas
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
