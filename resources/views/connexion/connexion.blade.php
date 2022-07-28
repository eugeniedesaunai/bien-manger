<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ajouter une recette</title>
</head>

<body>
    <form method="post" action="">
        @csrf
        <h1>Connexion: </h1>
        <label for="">Email:</label>
        <input type="text" name="mail">
        <label for="">Mot de passe:</label>
        <input type="password" name="mdp">
        <input type="submit">
    </form>
</body>


{{$errors}}