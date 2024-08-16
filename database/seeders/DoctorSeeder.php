<?php

namespace Database\Seeders;

use App\Models\Consultorio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class DoctorSeeder extends Seeder
{
    public function run()
    {
        /* Doctor::factory()->count(20)->create()->each(function ($user) {
            $user->assignRole('doctor');
        }); */
        Doctor::create([
            'codigo_colegiado' => '2', //Porque 2? porque este perfil es del 2do usuario en crearse
            'especialidad' => 'Cardiologia',
            'anos_experiencia' => '10',
            'user_id' => '2',
        ]);

        Doctor::create([
            'codigo_colegiado' => '3',
            'especialidad' => 'Ginecologia',
            'anos_experiencia' => '8',
            'user_id' => '3',
        ]);

        Doctor::create([
            'codigo_colegiado' => '4',
            'especialidad' => 'Pediatria',
            'anos_experiencia' => '5',
            'user_id' => '4',
        ]);

        Doctor::create([
            'codigo_colegiado' => '5',
            'especialidad' => 'Dermatologia',
            'anos_experiencia' => '12',
            'user_id' => '5',
        ]);

        Doctor::create([
            'codigo_colegiado' => '6',
            'especialidad' => 'Oftalmologia',
            'anos_experiencia' => '6',
            'user_id' => '6',
        ]);
    }
}
