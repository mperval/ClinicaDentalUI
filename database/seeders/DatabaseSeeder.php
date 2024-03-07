<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Instrumento;
use App\Models\Merchandising;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usando el ProductFactory
        Product::factory()->count(10)->create();

        // Usando el MerchandisingFactory
        Merchandising::factory()->count(10)->create();

        // Usando el InstrumentoFactory
        Instrumento::factory()->count(10)->create();

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
