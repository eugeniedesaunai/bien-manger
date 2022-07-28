<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function recettes(){
        return $this->hasMany(Recette::class);
    }
}
