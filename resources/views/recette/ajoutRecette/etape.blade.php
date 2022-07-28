@extends('layout.template')
@section('content')
<form action="/recette-ok" method="post">
    @csrf
    <select name="recette_id" id="recette_id">
        @foreach ($recettes as $recette)
        <!-- le id correspond au nom dans la base de données -->
        <option value="{{ $recette->id}}"> {{ $recette->nom}}</option>
        @endforeach
    </select>
    <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
    <input type="submit">
</form>
@endsection
{{$errors}}