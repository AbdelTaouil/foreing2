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
    
    @foreach ($profil as $item)
        <h3>{{$item->nom}}</h3>
        <h3>{{$item->prenom}}</h3>
        <h3>{{$item->age}}</h3>
        <h3>{{$item->membre->email}}</h3>
    @endforeach

</body>
</html>