<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultorio;

class ConsultorioSeeder extends Seeder
{
    public function run()
    {
        $consultorios = [
            [
                'ubicacion' => '2P3',
                'capacidad' => 25,
                'telefono' => '+51 987654321',
                'especialidad' => 'Pediatría',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '3G5',
                'capacidad' => 18,
                'telefono' => '+51 912345678',
                'especialidad' => 'Ginecología',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '1M2',
                'capacidad' => 30,
                'telefono' => '+51 934567890',
                'especialidad' => 'Medicina General',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '5D7',
                'capacidad' => 22,
                'telefono' => '+51 945678123',
                'especialidad' => 'Dermatología',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '4C6',
                'capacidad' => 28,
                'telefono' => '+51 956789234',
                'especialidad' => 'Cardiología',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '7O8',
                'capacidad' => 20,
                'telefono' => '+51 967890345',
                'especialidad' => 'Oftalmología',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '8O4',
                'capacidad' => 26,
                'telefono' => '+51 978901456',
                'especialidad' => 'Odontología',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '6F1',
                'capacidad' => 19,
                'telefono' => '+51 989012567',
                'especialidad' => 'Fisioterapia',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '9N9',
                'capacidad' => 15,
                'telefono' => '+51 990123678',
                'especialidad' => 'Nutrición',
                'estado' => 'Activo',
            ],
            [
                'ubicacion' => '10P10',
                'capacidad' => 24,
                'telefono' => '+51 901234789',
                'especialidad' => 'Psicología',
                'estado' => 'Activo',
            ],
        ];

        Consultorio::insert($consultorios);
    }
}
