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
        $user = new User();

        $user->name = "omar";
        $user->surname = "reyes";
        $user->secondSurname = "zamudio";
        $user->phone = "6643538663";
        $user->email = "omar@gmail.com";
        $user->password = bcrypt('12345678');

        $user->save();

        $user2 = new User();

        $user2->name = "octavio";
        $user2->surname = "salasar";
        $user2->secondSurname = "ramirez";
        $user2->phone = "6643445765";
        $user2->email = "octavio@gmail.com";
        $user2->password = bcrypt('12345678');

        $user2->save();
    }
}
