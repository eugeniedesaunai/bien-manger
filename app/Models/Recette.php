<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model // le "extends Model" permet d'aller chercher les éléments dans la base de donnée grace aux migrations 

{
    use HasFactory;
    public function images() // la méthode "images" se transforme en variable/propriété 
    //et être utiliser dans la vue ensuite
    { // hasMany ou hasOne : à une clé étrangère
        return $this->hasMany(Image::class);
    }

    public function etapes() // la méthode "etapes" se transforme en variable/propriété 
    //et être utiliser dans la vue ensuite
    { // hasMany ou hasOne : à une clé étrangère
        return $this->hasMany(Etape::class);
    }

    public function ingredients() // la méthode "ingredients" se transforme en variable/propriété 
    //et être utiliser dans la vue ensuite
    { // hasMany ou hasOne : à une clé étrangère
        return $this->hasMany(Ingredient::class);
    }

    public function plat()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        return $this->belongsTo(Plat::class); //quand on respecte la convention laravel
    }

    public function saison()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        return $this->belongsTo(Saison::class); //quand on respecte la convention laravel
    }

    public function utilisateur()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        return $this->belongsTo(Utilisateur::class); //quand on respecte la convention laravel
    }
}
