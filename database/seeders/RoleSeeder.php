<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'personal']);

        Permission::create(['name' => 'vista'])->assignRole($role1);
        Permission::create(['name' => 'principal'])->assignRole($role1);
        Permission::create(['name' => 'personal'])->assignRole($role1);
        Permission::create(['name' => 'registro'])->assignRole($role1);
        Permission::create(['name' => 'editar'])->assignRole($role1);
        Permission::create(['name' => 'home'])->assignRole($role2);

    }
}
