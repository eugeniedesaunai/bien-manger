<?php

namespace Database\Seeders;

use App\Models\Saison;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Saison::create([
            "nom"=>"Printemps",
        ]);

        Saison::create([
            "nom"=>"Été",
        ]);

        Saison::create([
            "nom"=>"Automne",
        ]);

        Saison::create([
            "nom"=>"Hiver",
        ]);
    }
}
