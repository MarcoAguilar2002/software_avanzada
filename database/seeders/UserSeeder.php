<?php

namespace Database\Seeders;

use FontLib\Table\Type\name;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Guesser\Name as GuesserName;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
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
    }
}
