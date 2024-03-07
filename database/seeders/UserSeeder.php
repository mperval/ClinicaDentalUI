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
        $user = User::factory()->create([
            'name' => 'useradmin',
            'email' => 'useradmin@useradmin.com',
            'password' => bcrypt('1234'),
        ]);

        // Asigno rol
        $user->assignRole('administrador');
    }
}
