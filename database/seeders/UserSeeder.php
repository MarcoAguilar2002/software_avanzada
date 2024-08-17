<?php

namespace Database\Seeders;

use FontLib\Table\Type\name;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Guesser\Name as GuesserName;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\Hash;

use Faker\Guesser\Name as GuesserName;

use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD

        /* User::factory()->count(30)->create(); */

        User::create([
            "name" => "Jorgue Zavaleta",
            "email" => "jorgue456@gmail.com", // admin
            "password" => Hash::make('12345678'),
        ])->assignRole('admin'); //////

        User::create([
            "name" => "Claudia Morales",
            "email" => "claudia_morales_doctor@gmail.com", // Cambiado
            "password" => Hash::make('12345678'),
        ])->assignRole('doctor');

        User::create([
            "name" => "Mario Gómez",
            "email" => "mario_gomez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('doctor');

        User::create([
            "name" => "Sara Mendoza",
            "email" => "sara_mendoza@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('doctor');

        User::create([
            "name" => "Luis Vargas",
            "email" => "luis_vargas@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('doctor');

        User::create([
            "name" => "Verónica Silva",
            "email" => "veronica_silva@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('doctor');

        ////////////////////////////////////////////////////////

        User::create([
            "name" => "Alejandra Ruiz",
            "email" => "alejandra_ruiz@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('secretaria');

        User::create([
            "name" => "Fernanda León",
            "email" => "fernanda_leon@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('secretaria');

        User::create([
            "name" => "Isabel Castro",
            "email" => "isabel_castro@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('secretaria');

        User::create([
            "name" => "Carla Martínez",
            "email" => "carla_martinez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('secretaria');

        User::create([
            "name" => "Gabriela Torres",
            "email" => "gabriela_torres@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('secretaria');

        //////////////////////////////////

        User::create([
            "name" => "Carlos Mendoza",
            "email" => "carlos_mendoza@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Laura Sánchez",
            "email" => "laura_sanchez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Fernando López",
            "email" => "fernando_lopez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "María García",
            "email" => "maria_garcia@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Luis Fernández",
            "email" => "luis_fernandez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Gabriela Morales",
            "email" => "gabriela_morales@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Andrés López",
            "email" => "andres_lopez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Paola Fernández",
            "email" => "paola_fernandez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Ricardo Pérez",
            "email" => "ricardo_perez@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');

        User::create([
            "name" => "Natalia Vargas",
            "email" => "natalia_vargas@gmail.com",
            "password" => Hash::make('secretaria1123')
        ])->assignRole('paciente');
=======
        $users = [
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin1')
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin2')
            ],
            [
                'name' => 'admin3',
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('admin3')
            ]
        ];

        $faker = Faker::create();


        foreach ($users as $user) {
            $newUser = new User();
            $newUser->fill($user);
            $newUser->assignRole('admin');
            $newUser->save();

            $newUser->profile()->create([
                'nombres' => $faker->firstName(),
                'apellidos' => $faker->lastName(),
                'dni' => $faker->unique()->randomNumber(8, true),
            ]);
        }
>>>>>>> bda0805694c6fb2705483a685dcaf605245d8953
    }
}
