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

        Permission::create(['name' => 'dashboard'])->syncRoles([$roleSA, $roleA, $roleP]);

        // este permiso es para que los usuarios psicologos no puedan ver la tabla para crear usuarios

        Permission::create(['name' => 'user.index'])->syncRoles([$roleSA, $roleA]);
        Permission::create(['name' => 'user.create'])->syncRoles([$roleSA, $roleA]);
        Permission::create(['name' => 'user.edit'])->syncRoles([$roleSA, $roleA]);
        Permission::create(['name' => 'user.destroy'])->syncRoles([$roleSA, $roleA]);

        Permission::create(['name' => 'alumno.index'])->syncRoles([$roleSA, $roleA, $roleP]);
        Permission::create(['name' => 'alumno.create'])->syncRoles([$roleSA, $roleA]);
        Permission::create(['name' => 'alumno.edit'])->syncRoles([$roleSA, $roleA]);
        Permission::create(['name' => 'alumno.destroy'])->syncRoles([$roleSA, $roleA]);

        Permission::create(['name' => 'expediente.index'])->syncRoles([$roleSA, $roleA, $roleP]);
        Permission::create(['name' => 'expediente.create'])->syncRoles([$roleSA, $roleA, $roleP]);
        Permission::create(['name' => 'expediente.edit'])->syncRoles([$roleSA, $roleA, $roleP]);
        Permission::create(['name' => 'expediente.destroy'])->syncRoles([$roleSA, $roleA, $roleP]);

        Permission::create(['name' => 'reporte.index'])->syncRoles([$roleSA, $roleA, $roleP]);
        Permission::create(['name' => 'reporte.create'])->syncRoles([$roleSA, $roleA, $roleP]);
        Permission::create(['name' => 'reporte.edit'])->syncRoles([$roleSA, $roleA, $roleP]);
        Permission::create(['name' => 'reporte.destroy'])->syncRoles([$roleSA, $roleA, $roleP]);


    }
}
