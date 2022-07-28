<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
