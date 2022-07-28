<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredient = [
            ["nom" => "Oeuf",],
            ["nom" => "Farine",],
            ["nom" => "Levure",],
            ["nom" => "Beurre",],
            ["nom" => "Huile",],
            ["nom" => "Sel",],
            ["nom" => "Poivre",],
            ["nom" => "Beure",],
            ["nom" => "Chocolat",],
            ["nom" => "Sucre",],
            ["nom" => "Salade Verte",],
            ["nom" => "Moutarde",],
            ["nom" => "Mozzarella",],
            ["nom" => "Vinaigre",],
            ["nom" => "Tomate",],
        ];
        Ingredient::insert($ingredient);
    }
}
