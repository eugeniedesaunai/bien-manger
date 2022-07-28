<?php

namespace Database\Seeders;

use App\Models\Plat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Plat::create([
            "menu" => "Apéritif",
        ]);

        Plat::create([
            "menu" => "Entrée",
        ]);

        Plat::create([
            "menu" => "Plat",
        ]);

        Plat::create([
            "menu" => "Dessert",
        ]);

        Plat::create([
            "menu" => "Pâtisserie",
        ]);
    }
}
