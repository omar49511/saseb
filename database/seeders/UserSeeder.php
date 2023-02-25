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

        // $user = new User();

        // $user->name = "omar";
        // $user->surname = "reyes";
        // $user->secondSurname = "zamudio";
        // $user->phone = "6643538663";
        // $user->email = "omar@gmail.com";
        // $user->password = bcrypt('12345678');
        // $user->assingnRole('SuperAdmin');
        // $user->save();

        // $user2 = new User();

        // $user2->name = "octavio";
        // $user2->surname = "salasar";
        // $user2->secondSurname = "ramirez";
        // $user2->phone = "6643445765";
        // $user2->email = "octavio@gmail.com";
        // $user2->password = bcrypt('12345678');
        // $user2->assingnRole('Admin');
        // $user2->save();

        // $user3 = new User();

        // $user3->name = "cristian david";
        // $user3->surname = "melendez";
        // $user3->secondSurname = "gonazalez";
        // $user3->phone = "664344576";
        // $user3->email = "cristian@gmail.com";
        // $user3->password = bcrypt('12345678');
        // $user3->assingnRole('Psicologo');
        // $user3->save();
    }
}
