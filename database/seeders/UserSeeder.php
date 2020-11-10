<?php

namespace Database\Seeders;

use Core\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super
        $user = User::create([
            'name' => 'Mike',
            'email' => 'mike@l00per.com',
            'email_verified_at' => now(),
            'password' => bcrypt('super123'),
        ]);
        $user->assignRole( 'super');

        // Admin
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@l00per.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
        ]);
        $user->assignRole( 'admin');

        // Helper para proyect
        $user = User::create([
            'name' => 'Helper',
            'email' => 'helper@l00per.com',
            'email_verified_at' => now(),
            'password' => bcrypt('helper123'),
        ]);
        $user->assignRole( 'helper');


        // Creo usuarios normales.
//        User::factory()->count(50)->create()->each(function ($user){
//            $user->assignRole('reader');
//        });

    }
}
