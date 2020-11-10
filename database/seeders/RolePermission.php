<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermission extends Seeder
{
    /**
     * Crea los roles del proyecto por defecto.
     *
     * Los guards_name hacen referencia los guardas para la app, normalmente
     * web y api, se ve en config/auth.php.
     *
     * @return void
     */
    public function run()
    {
        // Rol super admin.
        Role::create(['name' => 'super','guard_name' => 'web']);

        // Rol Admin
        Role::create(['name' => 'admin','guard_name' => 'web'])
            ->givePermissionTo('posts')
            ->givePermissionTo('emails');

        // Rol ayudante de artículos
        Role::create(['name' => 'helper','guard_name' => 'web']);

        // Lector de cursos
        Role::create(['name' => 'writer','guard_name' => 'web'])
            ->givePermissionTo('posts.create');

        //Escritor
        Role::create(['name' => 'reader','guard_name' => 'web'])
            ->givePermissionTo('posts.read');

    }
}
