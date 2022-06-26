<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);

        $permission = Permission::create(['name' => 'Manage users']);
        $role->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'Manage roles']);
        $role->givePermissionTo($permission);

        $permission = Permission::create(['name' => 'Manage permissions']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'Vendor']);
        $role = Role::create(['name' => 'User']);
    }
}
