<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="/profil" method="post">
        @csrf
        Nom :<input type="text" name="nom">
        Prenom :<input type="text" name="prenom">
        Age :<input type="text" name="age">
        Email :<input type="text" name="email">

        <button type="submit">Créer</button>
        <br>
    </form>
   

</body>
</html>