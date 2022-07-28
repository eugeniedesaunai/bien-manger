<form action="" method="post">
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
        <p>Quantité <input type="number"> </p>
    </select>
    <input type="submit">
</form>