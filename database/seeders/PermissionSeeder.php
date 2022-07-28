<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            "role"=>"Visiteur simple",
        ]);

        Permission::create([
            "role"=>"Visiteur connecté",
        ]);

        Permission::create([
            "role"=>"Éditeur",
        ]);

        Permission::create([
            "role"=>"Administrateur",
        ]);

        Permission::create([
            "role"=>"Super-administrateur",
        ]);
    }
}
