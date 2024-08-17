<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'user_id' => 1,  // Claudia Morales
            'nombres' => 'Jorgue',
            'apellidos' => 'Zavaleta',
            'dni' => '67942506',
            'celular' => '965280564',
            'fecha_nacimiento' => '1985-01-01',
            'direccion' => 'Av. Pino 60',
            'genero' => 'Masculito',
            'estado_civil' => 'Soltero',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 2,  // Claudia Morales
            'nombres' => 'Claudia',
            'apellidos' => 'Morales',
            'dni' => '12345678',
            'celular' => '912345678',
            'fecha_nacimiento' => '1985-01-01',
            'direccion' => 'Av. Pino 1',
            'genero' => 'Femenino',
            'estado_civil' => 'Soltera',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 3,  // Mario Gómez
            'nombres' => 'Mario',
            'apellidos' => 'Gómez',
            'dni' => '23456789',
            'celular' => '923456789',
            'fecha_nacimiento' => '1980-05-15',
            'direccion' => 'Av. Los Olivos 123',
            'genero' => 'Masculino',
            'estado_civil' => 'Casado',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 4,  // Sara Mendoza
            'nombres' => 'Sara',
            'apellidos' => 'Mendoza',
            'dni' => '34567890',
            'celular' => '934567890',
            'fecha_nacimiento' => '1992-02-20',
            'direccion' => 'Calle Las Flores 456',
            'genero' => 'Femenino',
            'estado_civil' => 'Soltera',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 5,  // Luis Vargas
            'nombres' => 'Luis',
            'apellidos' => 'Vargas',
            'dni' => '45678901',
            'celular' => '945678901',
            'fecha_nacimiento' => '1985-08-25',
            'direccion' => 'Av. San Juan 789',
            'genero' => 'Masculino',
            'estado_civil' => 'Casado',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 6,  // Verónica Silva
            'nombres' => 'Verónica',
            'apellidos' => 'Silva',
            'dni' => '56789012',
            'celular' => '956789012',
            'fecha_nacimiento' => '1990-11-30',
            'direccion' => 'Calle Los Naranjos 123',
            'genero' => 'Femenino',
            'estado_civil' => 'Casada',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 7,  // Alejandra Ruiz
            'nombres' => 'Alejandra',
            'apellidos' => 'Ruiz',
            'dni' => '67890123',
            'celular' => '967890123',
            'fecha_nacimiento' => '1988-09-15',
            'direccion' => 'Calle Santa Rosa 321',
            'genero' => 'Femenino',
            'estado_civil' => 'Soltera',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 8,  // Fernanda León
            'nombres' => 'Fernanda',
            'apellidos' => 'León',
            'dni' => '78901234',
            'celular' => '972345678',
            'fecha_nacimiento' => '1987-10-20',
            'direccion' => 'Av. Las Américas 456',
            'genero' => 'Femenino',
            'estado_civil' => 'Casada',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 9,  // Isabel Castro
            'nombres' => 'Isabel',
            'apellidos' => 'Castro',
            'dni' => '89012345',
            'celular' => '973456789',
            'fecha_nacimiento' => '1991-04-12',
            'direccion' => 'Jr. San Juan 456',
            'genero' => 'Femenino',
            'estado_civil' => 'Divorciada',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 10,  // Carla Martínez
            'nombres' => 'Carla',
            'apellidos' => 'Martínez',
            'dni' => '90123456',
            'celular' => '974567890',
            'fecha_nacimiento' => '1989-03-25',
            'direccion' => 'Calle Los Cedros 654',
            'genero' => 'Femenino',
            'estado_civil' => 'Soltera',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 11,  // Gabriela Torres
            'nombres' => 'Gabriela',
            'apellidos' => 'Torres',
            'dni' => '01234567',
            'celular' => '975678901',
            'fecha_nacimiento' => '1984-02-15',
            'direccion' => 'Jr. Los Naranjos 987',
            'genero' => 'Femenino',
            'estado_civil' => 'Casada',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 12,  // Carlos Mendoza
            'nombres' => 'Carlos',
            'apellidos' => 'Mendoza',
            'dni' => '78345612',
            'celular' => '964567890',
            'fecha_nacimiento' => '1982-05-18',
            'direccion' => 'Av. Los Olivos 123',
            'genero' => 'Masculino',
            'estado_civil' => 'Casado',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 13,  // Laura Sánchez
            'nombres' => 'Laura',
            'apellidos' => 'Sánchez',
            'dni' => '89234756',
            'celular' => '986543210',
            'fecha_nacimiento' => '1985-07-25',
            'direccion' => 'Jr. Los Cedros 321',
            'genero' => 'Femenino',
            'estado_civil' => 'Soltera',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 14,  // Fernando López
            'nombres' => 'Fernando',
            'apellidos' => 'López',
            'dni' => '90456732',
            'celular' => '975432109',
            'fecha_nacimiento' => '1980-11-05',
            'direccion' => 'Jr. Santa Rosa 456',
            'genero' => 'Masculino',
            'estado_civil' => 'Casado',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 15,  // María García
            'nombres' => 'María',
            'apellidos' => 'García',
            'dni' => '97654321',
            'celular' => '979012345',
            'fecha_nacimiento' => '1983-06-12',
            'direccion' => 'Av. La Marina 789',
            'genero' => 'Femenino',
            'estado_civil' => 'Soltera',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 16,  // Luis Fernández
            'nombres' => 'Luis',
            'apellidos' => 'Fernández',
            'dni' => '95364782',
            'celular' => '971234567',
            'fecha_nacimiento' => '1986-12-01',
            'direccion' => 'Calle La Libertad 456',
            'genero' => 'Masculino',
            'estado_civil' => 'Soltero',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 17,  // Gabriela Morales
            'nombres' => 'Gabriela',
            'apellidos' => 'Morales',
            'dni' => '95147836',
            'celular' => '969876543',
            'fecha_nacimiento' => '1983-07-09',
            'direccion' => 'Jr. Santa Rosa 456',
            'genero' => 'Femenino',
            'estado_civil' => 'Casada',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 18,  // Andrés López
            'nombres' => 'Andrés',
            'apellidos' => 'López',
            'dni' => '78903474',
            'celular' => '975432109',
            'fecha_nacimiento' => '1986-09-12',
            'direccion' => 'Av. Los Olivos 123',
            'genero' => 'Masculino',
            'estado_civil' => 'Soltero',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 19,  // Paola Fernández
            'nombres' => 'Paola',
            'apellidos' => 'Fernández',
            'dni' => '54893267',
            'celular' => '969876543',
            'fecha_nacimiento' => '1983-07-09',
            'direccion' => 'Jr. Santa Rosa 456',
            'genero' => 'Femenino',
            'estado_civil' => 'Casada',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 20,  // Ricardo Pérez
            'nombres' => 'Ricardo',
            'apellidos' => 'Pérez',
            'dni' => '87324590',
            'celular' => '978901234',
            'fecha_nacimiento' => '1994-06-15',
            'direccion' => 'Calle La Libertad 789',
            'genero' => 'Masculino',
            'estado_civil' => 'Soltero',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);

        Profile::create([
            'user_id' => 21,  // Natalia Vargas
            'nombres' => 'Natalia',
            'apellidos' => 'Vargas',
            'dni' => '48271936',
            'celular' => '979012345',
            'fecha_nacimiento' => '1988-10-23',
            'direccion' => 'Av. El Sol 321',
            'genero' => 'Femenino',
            'estado_civil' => 'Divorciada',
            'region' => 'La Libertad',
            'provincia' => 'Pacasmayo',
            'distrito' => 'Guadalupe',
            'pais' => 'Peru',
        ]);
    }
}
