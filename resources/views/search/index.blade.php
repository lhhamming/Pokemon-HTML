<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Found pokemon</title>
</head>
<body>
    @foreach($pkmns as $pkmn)
    <p>{{$pkmn->PokemonID}} {{$pkmn->Pokemonname}} {{$pkmn->PokemonType}}</p>
    @endforeach
    <div class="Walked"></div>
    <a href="create">Create a mon</a>
    <a href="/catch/{{$pkmn->PokemonID}}">Catch the pokemon!</a>
    <button onclick="location.reload();">Search for another mon</button>
</body>
</html>



<script>
    var Pressed = 0;
$(document).keydown(function(e){
    var KeyCode = e.keyCode || e.which;
    if(KeyCode == 38 || KeyCode == 39 ||KeyCode == 40 ||KeyCode == 37){
    Pressed = Pressed + 1;
            if(Pressed <= 1)
            {
                //Do some animation
                switch(KeyCode){
                    case 37:
                    $('div.Walked').html('<span> You walked to Left </span>');
                    break;
                    case 38:
                    $('div.Walked').html('<span> You walked to Up </span>');
                    break;
                    case 39:
                    $('div.Walked').html('<span> You walked to Right </span>');
                    break;
                    case 40:
                    $('div.Walked').html('<span> You walked to Down </span>');
                    break;
                }
                setTimeout(function(){
                console.log("Key pressed"); 
                location.reload();
                },1000)
            }
    }
});
</script>