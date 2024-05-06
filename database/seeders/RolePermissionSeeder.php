<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);

        $editPermission = Permission::where('name', 'edit roles')->first();
        $sendPermission = Permission::where('name', 'send message')->first();

        $adminRole->givePermissionTo($editPermission,$sendPermission);
        $managerRole->givePermissionTo($sendPermission);
    }
}
