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

        $roleSA = Role::create(['name'=>'SuperAdmin']);
        $roleA = Role::create(['name'=>'Admin']);
        $roleP = Role::create(['name'=>'Psicologo']);

        Permission::create(['name' => 'admin.home']);

        // este permiso es para que los usuarios psicologos no puedan ver la tabla para crear usuarios

        Permission::create(['name' => 'admin.usuarios.index']);
        Permission::create(['name' => 'admin.usuarios.create']);
        Permission::create(['name' => 'admin.usuarios.edit']);
        Permission::create(['name' => 'admin.usuarios.destroy']);

        Permission::create(['name' => 'admin.alumnos.index']);
        Permission::create(['name' => 'admin.alumnos.create']);
        Permission::create(['name' => 'admin.alumnos.edit']);
        Permission::create(['name' => 'admin.alumnos.destroy']);

        Permission::create(['name' => 'admin.expedientes.index']);
        Permission::create(['name' => 'admin.expedientes.create']);
        Permission::create(['name' => 'admin.expedientes.edit']);
        Permission::create(['name' => 'admin.expedientes.destroy']);

        Permission::create(['name' => 'admin.reportes.index']);
        Permission::create(['name' => 'admin.reportes.create']);
        Permission::create(['name' => 'admin.reportes.edit']);
        Permission::create(['name' => 'admin.reportes.destroy']);
    }
}
