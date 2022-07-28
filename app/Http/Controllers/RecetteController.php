<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Saison;
use App\Models\Recette;
use App\Models\Ingredient;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\IngredientRecette;
use App\Http\Requests\RecetteRequest;
use App\Http\Requests\IngredientRecetteRequest;

class RecetteController extends Controller
{
    public function ajouterRecette()
    {
        $saisons = Saison::all('id', 'nom');
        $utilisateurs = Utilisateur::all('id', 'nom', 'prenom');
        $plats = Plat::all('id', 'menu');

        return view('recette.ajoutRecette.description', ['saisons' => $saisons, 'utilisateurs' => $utilisateurs, 'plats' => $plats]);
    }

    public function validationRecette(RecetteRequest $request)
    {
        $recettes = new Recette();
        $recettes->id = $request->recette_id;
        $recettes->nom = $request->nom;
        $recettes->description = $request->description;
        $recettes->nb_convices = $request->nb_convices;
        $recettes->slug = $request->slug;
        $recettes->plat_id = $request->plat_id;
        $recettes->saison_id = $request->saison_id;
        $recettes->utilisateur_id = $request->utilisateur_id;
        $recettes->save();

        return redirect('/ajouter-recette-ingredient');
    }

    public function ajouterRecettebis()
    {
        $ingredients = Ingredient::all('id', 'nom');
        $recettes = Recette::all();

        return view('recette.ajoutRecette.choixIngredient', ['ingredients' => $ingredients, 'recettes' => $recettes]);
    }

    public function validationRecettebis(IngredientRecetteRequest $request)
    {
        $ingredients = new IngredientRecette();
        $ingredients->id = $request->ingredient_recette_id;
        $ingredients->quantite = $request->quantite;
        $ingredients->recette_id = $request->recette_id;
        $ingredients->ingredient_id = $request->ingredient_id;
        $ingredients->save();

        return view('recette.recetteOk', ['ingredients' => $ingredients]);
    }


    public function voirRecette(int $id)
    {
        $recette = Recette::where('id', '=', $id)->firstOrFail();
        $recettes = Recette::find($id);
        return view('recette.recette', ["recette" => $recette, "recettes" => $recettes]);
    }
}
