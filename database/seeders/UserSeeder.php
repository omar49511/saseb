<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Omar',
            'surname' => 'Reyes',
            'secondSurname' => 'Zamudio',
            'phone' => '6643538663',
            'email' => 'omar@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('SuperAdmin');
        

        User::create([
            'name' => 'Octavio',
            'surname' => 'Salazar',
            'secondSurname' => 'Ramirez',
            'phone' => '6643538663',
            'email' => 'octavio@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Cristian David',
            'surname' => 'Melendez',
            'secondSurname' => 'Gonzalez',
            'phone' => '6643538663',
            'email' => 'cristian@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Psicologo');

    }
}
