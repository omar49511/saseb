<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Aqui se crearan los roles de administrador super administrador y psicologo

        Role::create(['name'=>'SuperAdmin']);
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'Psicologo']);

        Permission::create(['name' => '']);

    }
}
