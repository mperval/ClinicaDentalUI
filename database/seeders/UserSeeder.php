<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Crear un usuario
        $userAdmin = User::factory()->create([
            'name' => 'UserAdmin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
        ]);
        $userBasic = User::factory()->create([
            'name' => 'UserUser',
            'email' => 'user@user.com',
            'password' => bcrypt('1234'),
        ]);

        // Asigno rol
        $userAdmin->assignRole('administrador');
        $userBasic->assignRole('user');
    }
}
