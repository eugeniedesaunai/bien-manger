@extends('layout.template')
@section('content')
<html>

<body>
    <section class="flex_column_j_center height_max ">
        <h1 class="flex_column_a_center">Partagez vos recettes : </h1>
        <form class="flex_column_a_center " action="" method="post">

            @csrf

            <input id="nom" name="nom" type="text" placeholder="Titre(nom) de votre recette">
            <p>Recette pour <input type="number" id="nb_convices" name="nb_convices"> personnes</p>
            <br>
            <select name="plat_id" id="plat_id">
                @foreach ($plats as $plat)
                <option value="{{ $plat->id}}">{{ $plat->menu}} </option>
                @endforeach
            </select>
            <select name="saison_id" id="saison_id">
                @foreach ($saisons as $saison)
                <option value="{{ $saison->id}}"> {{ $saison->nom}}</option>
                @endforeach
            </select>
            <p>La présentation :</p>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <br>
            <select name="utilisateur_id" id="utilisateur_id">
                @foreach ($utilisateurs as $utilisateur)
                <option value="{{ $utilisateur->id}}">{{ $utilisateur->prenom}} {{ $utilisateur->nom}}</option>
                @endforeach
            </select>
            <input type="submit" value="Envoyer">
        </form>
    </section>
</body>

</html>
@endsection