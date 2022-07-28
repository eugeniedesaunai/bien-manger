<form action="/recette-ok" method="post">
    @csrf
    <select name="recette_id" id="recette_id">
        @foreach ($recettes as $recette)
        <!-- le id correspond au nom dans la base de données -->
        <option value="{{ $recette->id}}"> {{ $recette->nom}}</option>
        @endforeach
    </select>
    <select name="ingredient_id" id="ingredient_id">
        @foreach ($ingredients as $ingredient)
        <!-- le id correspond au nom dans la base de données -->
        <option value="{{ $ingredient->id}}"> {{ $ingredient->nom}}</option>
        @endforeach
    </select>
    <p>Quantité <input name="quantite" id="quantite" type="number"> </p>
    <select name="ingredient_id" id="ingredient_id">
        @foreach ($ingredients as $ingredient)
        <!-- le id correspond au nom dans la base de données -->
        <option value="{{ $ingredient->id}}"> {{ $ingredient->nom}}</option>
        @endforeach
    </select>
    <p>Quantité <input name="quantite" id="quantite" type="number"> </p>
    <select name="ingredient_id" id="ingredient_id">
        @foreach ($ingredients as $ingredient)
        <!-- le id correspond au nom dans la base de données -->
        <option value="{{ $ingredient->id}}"> {{ $ingredient->nom}}</option>
        @endforeach
    </select>
    <p>Quantité <input name="quantite" id="quantite" type="number"> </p>
    <input type="submit">

</form>
{{$errors}}