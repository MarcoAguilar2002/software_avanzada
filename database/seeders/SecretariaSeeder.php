<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Secretaria;

class SecretariaSeeder extends Seeder
{
    public function run()
    {
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
    }
}
