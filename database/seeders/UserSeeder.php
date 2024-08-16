<?php

namespace Database\Seeders;

use FontLib\Table\Type\name;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Faker\Guesser\Name as GuesserName;

use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    public function run()
    {

        /* User::factory()->count(30)->create(); */

        User::create([
            "name" => "Claudia Morales",
            "email" => "claudia_morales_doctor@gmail.com", // Cambiado
            "password" => "claudia123",
        ])->assignRole('doctor');

        User::create([
            "name" => "Mario Gómez",
            "email" => "mario_gomez@gmail.com",
            "password" => "mario456",
        ])->assignRole('doctor');

        User::create([
            "name" => "Sara Mendoza",
            "email" => "sara_mendoza@gmail.com",
            "password" => "sara6789",
        ])->assignRole('doctor');

        User::create([
            "name" => "Luis Vargas",
            "email" => "luis_vargas@gmail.com",
            "password" => "luis10101",
        ])->assignRole('doctor');

        User::create([
            "name" => "Verónica Silva",
            "email" => "veronica_silva@gmail.com",
            "password" => "veronica2024",
        ])->assignRole('doctor');

        ////////////////////////////////////////////////////////

        User::create([
            "name" => "Alejandra Ruiz",
            "email" => "alejandra_ruiz@gmail.com",
            "password" => "alejandra123",
        ])->assignRole('secretaria');

        User::create([
            "name" => "Fernanda León",
            "email" => "fernanda_leon@gmail.com",
            "password" => "fernanda456",
        ])->assignRole('secretaria');

        User::create([
            "name" => "Isabel Castro",
            "email" => "isabel_castro@gmail.com",
            "password" => "isabel789",
        ])->assignRole('secretaria');

        User::create([
            "name" => "Carla Martínez",
            "email" => "carla_martinez@gmail.com",
            "password" => "carla2024",
        ])->assignRole('secretaria');

        User::create([
            "name" => "Gabriela Torres",
            "email" => "gabriela_torres@gmail.com",
            "password" => "gabriela2024",
        ])->assignRole('secretaria');

        //////////////////////////////////

        User::create([
            "name" => "Carlos Mendoza",
            "email" => "carlos_mendoza@gmail.com",
            "password" => "carlos123",
        ])->assignRole('paciente');

        User::create([
            "name" => "Laura Sánchez",
            "email" => "laura_sanchez@gmail.com",
            "password" => "laura456",
        ])->assignRole('paciente');

        User::create([
            "name" => "Fernando López",
            "email" => "fernando_lopez@gmail.com",
            "password" => "fernando789",
        ])->assignRole('paciente');

        User::create([
            "name" => "María García",
            "email" => "maria_garcia@gmail.com",
            "password" => "maria101",
        ])->assignRole('paciente');

        User::create([
            "name" => "Luis Fernández",
            "email" => "luis_fernandez@gmail.com",
            "password" => "luis2024",
        ])->assignRole('paciente');

        User::create([
            "name" => "Gabriela Morales",
            "email" => "gabriela_morales@gmail.com",
            "password" => "gabriela123",
        ])->assignRole('paciente');

        User::create([
            "name" => "Andrés López",
            "email" => "andres_lopez@gmail.com",
            "password" => "andres456",
        ])->assignRole('paciente');

        User::create([
            "name" => "Paola Fernández",
            "email" => "paola_fernandez@gmail.com",
            "password" => "paola789",
        ])->assignRole('paciente');

        User::create([
            "name" => "Ricardo Pérez",
            "email" => "ricardo_perez@gmail.com",
            "password" => "ricardo101",
        ])->assignRole('paciente');

        User::create([
            "name" => "Natalia Vargas",
            "email" => "natalia_vargas@gmail.com",
            "password" => "natalia2024",
        ])->assignRole('paciente');
    }
}
