<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Rol administrador

        // Roles generales
        Permission::create(['name' => 'panel.show',        'guard_name' => 'web']);
        Permission::create(['name' => 'translations.show', 'guard_name' => 'web']);

        // Posts
        Permission::create(['name' => 'posts',        'guard_name' => 'web']);
        Permission::create(['name' => 'posts.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'posts.read',   'guard_name' => 'web']);
        Permission::create(['name' => 'posts.update', 'guard_name' => 'web']);
        Permission::create(['name' => 'posts.delete', 'guard_name' => 'web']);

        // Emails
        Permission::create(['name' => 'emails',        'guard_name' => 'web']);
        Permission::create(['name' => 'emails.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'emails.read',   'guard_name' => 'web']);
        Permission::create(['name' => 'emails.update', 'guard_name' => 'web']);
        Permission::create(['name' => 'emails.delete', 'guard_name' => 'web']);

        //
    }
}
