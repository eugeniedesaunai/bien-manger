@extends('layout.template')
@section('content')
<h1>Recette {{ $recette['nom'] }}</h1>
<p>Type de plat : {{ $recettes->plat->menu}}</p>
<p>Nombre de couvert : {{ $recette['nb_convices'] }}</p>
<p> Recette à faire en : {{ $recettes->saison->nom}}</p>

<p> {{ $recette['description'] }}</p>
<p> Créer par : {{ $recettes->utilisateur->prenom}} {{ $recettes->utilisateur->nom}}</p>
@endsection