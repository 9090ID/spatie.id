<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Create permissions
       Permission::create(['name' => 'view dashboard']);
       Permission::create(['name' => 'manage users']);

       // Create roles and assign permissions
       $adminRole = Role::create(['name' => 'admin']);
       $adminRole->givePermissionTo(['view dashboard', 'manage users']);

       $userRole = Role::create(['name' => 'user']);
       $userRole->givePermissionTo('view dashboard');
    }
}
