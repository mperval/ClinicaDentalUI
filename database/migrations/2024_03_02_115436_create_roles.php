<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1 = Role::create(['name' => 'administrador']);
        $role2 = Role::create(['name' => 'user']);
        $user = User::find(1); //indico el id_user 1
        $user->assignRole($role1);//asigno el rol admin a id_user 1
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
