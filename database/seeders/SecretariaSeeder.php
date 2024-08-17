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
<<<<<<< HEAD

        /* Secretaria::factory()->count(20)->create()->each(function ($user){
            $user->assignRole('secretaria');
        }); */

        Secretaria::create([
            'user_id' => '7',
            'area_responsable' => 'Cardiologia',
        ]);

        Secretaria::create([
            'user_id' => '8',
            'area_responsable' => 'Gastroenterologia',
        ]);

        Secretaria::create([
            'user_id' => '9',
            'area_responsable' => 'Pediatria',
        ]);

        Secretaria::create([
            'user_id' => '10',
            'area_responsable' => 'Dermatologia',
        ]);

        Secretaria::create([
            'user_id' => '11',
            'area_responsable' => 'Oftalmologia',
        ]);
=======
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
>>>>>>> bda0805694c6fb2705483a685dcaf605245d8953
    }
}
