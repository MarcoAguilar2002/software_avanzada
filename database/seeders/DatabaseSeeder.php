<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Secretaria;
use App\Models\Doctor;
use App\Models\Consultorio;
use App\Models\Horario;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
            ConsultorioSeeder::class,
            UserSeeder::class,
            DoctorSeeder::class,
            SecretariaSeeder::class,
<<<<<<< HEAD
            PacienteSeeder::class,
            ProfileSeeder::class,
=======
>>>>>>> bda0805694c6fb2705483a685dcaf605245d8953
        ]);
        /*
        User::create([
            'name'=>'secretaria1',
            'email'=>'secretaria1@gmail.com',
            'password'=>Hash::make('secretaria1123')
        ])->assignRole('secretaria');

        
        User::create([
            'name'=>'usuario',
            'email'=>'usuario@gmail.com',
            'password'=>Hash::make('usuario123')
        ])->assignRole('usuario');
       

        Consultorio::create([
            'nombre' => 'Odontologia',
            'ubicacion' => '3b5',
            'capacidad' => '5',
            'telefono' =>'94584545',
            'especialidad' => 'Odontologia',
            'estado' => 'Activo'
        ]);
        Consultorio::create([
            'nombre' => 'Pediatria',
            'ubicacion' => '2b5',
            'capacidad' => '5',
            'telefono' =>'94584545',
            'especialidad' => 'Pediatria',
            'estado' => 'Activo'
        ]);


        Consultorio::create([
            'nombre' => 'Fisioterapia',
            'ubicacion' => '4b5',
            'capacidad' => '5',
            'telefono' =>'94584545',
            'especialidad' => 'Fisioterapia',
            'estado' => 'Activo'
        ]);

        $this->call([PacienteSeeder::class,]);
        Creacopm de pacientes
        $this->call([UserSeeder::class,]);
        $this->call([PacienteSeeder::class,]);
        $this->call([ConsultorioSeeder::class,]);
        $this->call([DoctorSeeder::class,]);
        $this->call([HorarioSeeder::class,]);
        $this->call([EventSeeder::class,]);
        $this->call([HistorialSeeder::class,]);
        $this->call([PagoSeeder::class,]);*/
    }
}