<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientRecette extends Model
{
    use HasFactory;

    public $table = 'ingredient_recette';
    public $timestamps = false;


    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function recettes()
    {
        return $this->belongsToMany(Recette::class);
    }
}
