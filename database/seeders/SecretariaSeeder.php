<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Secretaria;
use App\Models\User;
use App\Models\Consultorio;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class SecretariaSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'secretaria1',
                'email' => 'secretaria1@gmail.com',
                'password' => Hash::make('secretaria1')
            ],
            [
                'name' => 'secretaria2',
                'email' => 'secretaria2@gmail.com',
                'password' => Hash::make('secretaria2')
            ],
            [
                'name' => 'secretaria3',
                'email' => 'secretaria3@gmail.com',
                'password' => Hash::make('secretaria3')
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
            $newUser->secretaria()->create([
                'area_responsable' => $faker->randomElement($especialidades),
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
