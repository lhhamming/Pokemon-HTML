<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Found pokemon</title>
</head>
<body>
    @foreach($pkmns as $pkmn)
    <p>{{$pkmn->Pokemonname}}</p>
    @endforeach
    
    <a href="create">Create a mon</a>
</body>
</html>