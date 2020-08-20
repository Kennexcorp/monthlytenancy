<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app() [PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'update-property']);
        Permission::create(['name' => 'delete-property']);
        Permission::create(['name' => 'view-property']);
        Permission::create(['name' => 'create-property']);
        Permission::create(['name' => 'update-profile']);
        Permission::create(['name' => 'delete-profile']);
        Permission::create(['name' => 'view-profile']);
        Permission::create(['name' => 'create-profile']);

        $role = Role::create(['name' => 'super-admin']);

    }
}
