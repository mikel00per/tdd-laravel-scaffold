<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Roles y permisos
        $this->call(PermissionSeeder::class);
        $this->call(RolePermission::class);
        $this->call(UserSeeder::class);

        // Posts y categorias
        $this->call(CategorySeeder::class);

        // Ejecuto el comando para generarar las traducciones en bd.
        $this->command->call('migrate:translation');
    }
}
