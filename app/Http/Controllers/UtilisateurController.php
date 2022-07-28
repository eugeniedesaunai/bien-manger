<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class UtilisateurController extends Controller
{
    public function connexion()
    {
        return view('connexion.connexion');
    }

    public function authentification(Request $request)
    {
        $authentifications = [
            'mail' => $request->mail,
            'password' => $request->mdp,
        ];

        if (Auth::attempt($authentifications)) {

            return redirect()->to('administration');
        }

        return back()->withErrors([
            'mail' => "Le mot de passe ne correspond pas à l'email indiqué"
        ]);
    }

    public function administration()
    {
        $utilisateur = Utilisateur::all();
        return view('connexion.administration', ['utilisateur' => $utilisateur]);
    }

    public function deconnection()
    {
        Session::flush(); // vider la session 
        Auth::logout(); // ce que gardait le serveur en mémoire sur l'utilisateur

        return redirect('/connexion'); // renvoyer vers une page de log 
    }
}
