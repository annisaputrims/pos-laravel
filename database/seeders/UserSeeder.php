<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');

        // for ($i = 1; $i < 2000; $i++) {
        //     User::insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => Hash::make($faker->name),
        //     ]);
        // }
        User::create([
            'id_level' =>'1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'id_level' =>'2',
            'name' => 'kasir',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'id_level' =>'3',
            'name' => 'administrator',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
