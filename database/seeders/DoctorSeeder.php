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
        $users = [
            [
                'name' => 'doctor1',
                'email' => 'doctor1@gmail.com',
                'password' => Hash::make('doctor1')
            ],
            [
                'name' => 'doctor2',
                'email' => 'doctor2@gmail.com',
                'password' => Hash::make('doctor2')
            ],
            [
                'name' => 'doctor3',
                'email' => 'doctor3@gmail.com',
                'password' => Hash::make('doctor3')
            ],
        ];

        $especialidades = Consultorio::get()->pluck('especialidad')->toArray();

        $faker = Faker::create();

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->fill($user);
            $newUser->assignRole('doctor');
            $newUser->save();

            // *DOCTOR
            $newUser->doctor()->create([
                'codigo_colegiado' => $faker->unique()->randomNumber(8, true),
                'especialidad' => $faker->randomElement($especialidades),
                'anos_experiencia' => $faker->numberBetween(1, 20),
            ]);

            // *PROFILE
            $newUser->profile()->create([
                'nombres' => $faker->firstName(),
                'apellidos' => $faker->lastName(),
                'dni' => $faker->unique()->randomNumber(8, true),
            ]);
        }
    }
}
