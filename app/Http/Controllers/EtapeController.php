<?php

namespace App\Http\Controllers;

use App\Models\Etape;
use App\Models\Recette;
use Illuminate\Http\Request;
use App\Http\Requests\EtapeRequest;

class EtapeController extends Controller
{
    public function ajouterEtape()
    {
        $recettes = Recette::all('id', 'nom');

        return view('recette.ajoutRecette.etape', ['recettes' => $recettes]);
    }

    public function validationEtape(EtapeRequest $request)
    {
        $etapes = new Etape();
        $etapes->id = $request->etape_id;
        $etapes->contenu = $request->contenu;
        $etapes->recette_id = $request->recette_id;
        $etapes->save();

        return view('recette.recetteOk');
    }
}
