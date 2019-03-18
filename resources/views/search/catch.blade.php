<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Test!</title>
</head>
<body>
    @if(!empty($Pokemon))
        <p>{{$Pokemon->PokemonID}} {{$Pokemon->Pokemonname}} {{$Pokemon->PokemonType}}</p>
    @endif
    <div class="Pokeballs"> <div class="remainder"></div></div>
    <button class="CatchingButton"onclick="trytoCatch();">Throw pokeball!</button>
    <div class="Result"></div>
    <div class="OutOfBalls"></div>
</body>
</html>


<script>
var balls = 5;
var Catched = false;
$(document).ready(function(){
    $('div.Pokeballs').html("<span> Remaining Pokeballs: </span>" + balls);
});

function trytoCatch(){
    balls = balls - 1;
    console.log(balls);
    $('div.Pokeballs').html("<span> Remaining Pokeballs: </span>" + balls);
    if(balls == 0){
        //Do nothing out of balls
        $('div.OutOfBalls').html('<span> <a href="/shop">Buy some pokeballs!</a> <br> </span>');
        $('button.CatchingButton').remove();
    }else {
        if(Catched != true){  
            var randomint = 1 + Math.floor(Math.random() * 100);
            if(randomint > 60 && randomint < 65){
                $('div.Result').html('<span> You catched the pokemon! <br> </span>');
                
                Catched = true;
            }
            else{
                $('div.Result').html('<span> Get fucked <br> </span>');
            }
        }
        else{
            //Do nothing the pokemon was already catched
        }
        
    }
}

</script>