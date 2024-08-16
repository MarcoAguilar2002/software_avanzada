<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{

    public function run(): void
    {
        //
        /* Paciente::factory()->count(150)->create()->each(function ($user) {
            $user->assignRole('paciente');
        }); */
        Paciente::create([
            'user_id' => '12',
            'nro_seguro' => '12345678',
            'grupo_sanguineo' => 'O+',
            'alergias' => 'Ninguna',
            'vacunas_recibidas' => 'COVID-19, Hepatitis B',
        ]);

        Paciente::create([
            'user_id' => '13',
            'nro_seguro' => '23456789',
            'grupo_sanguineo' => 'A-',
            'alergias' => 'Penicilina',
            'vacunas_recibidas' => 'COVID-19, Gripe',
        ]);

        Paciente::create([
            'user_id' => '14',
            'nro_seguro' => '34567890',
            'grupo_sanguineo' => 'B+',
            'alergias' => 'Polen',
            'vacunas_recibidas' => 'COVID-19, Fiebre Amarilla',
        ]);

        Paciente::create([
            'user_id' => '15',
            'nro_seguro' => '45678901',
            'grupo_sanguineo' => 'AB-',
            'alergias' => 'Mariscos',
            'vacunas_recibidas' => 'COVID-19, Hepatitis B, Gripe',
        ]);

        Paciente::create([
            'user_id' => '16',
            'nro_seguro' => '56789012',
            'grupo_sanguineo' => 'O-',
            'alergias' => 'Ninguna',
            'vacunas_recibidas' => 'COVID-19, Fiebre Tifoidea',
        ]);

        Paciente::create([
            'user_id' => '17',
            'nro_seguro' => '67890123',
            'grupo_sanguineo' => 'A+',
            'alergias' => 'Lactosa',
            'vacunas_recibidas' => 'COVID-19, Gripe',
        ]);

        Paciente::create([
            'user_id' => '18',
            'nro_seguro' => '78901234',
            'grupo_sanguineo' => 'B-',
            'alergias' => 'Ninguna',
            'vacunas_recibidas' => 'COVID-19, Hepatitis B',
        ]);

        Paciente::create([
            'user_id' => '19',
            'nro_seguro' => '89012345',
            'grupo_sanguineo' => 'O+',
            'alergias' => 'Ninguna',
            'vacunas_recibidas' => 'COVID-19, Fiebre Tifoidea',
        ]);

        Paciente::create([
            'user_id' => '20',
            'nro_seguro' => '90123456',
            'grupo_sanguineo' => 'AB+',
            'alergias' => 'Mariscos',
            'vacunas_recibidas' => 'COVID-19, Hepatitis B, Gripe',
        ]);

        Paciente::create([
            'user_id' => '21',
            'nro_seguro' => '01234567',
            'grupo_sanguineo' => 'A-',
            'alergias' => 'Ninguna',
            'vacunas_recibidas' => 'COVID-19, Gripe, Fiebre Amarilla',
        ]);
    }
}
