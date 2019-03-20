@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Add items to the shop</title>
</head>
<body>
    <form action="/AddItem" method="POST">
        @csrf
        <input name="Name" type="text" style="width:200px;" placeholder="Name of the Item" required> <br> <br>
        <input name="Desc" type="text" style="width:200px;" placeholder="Item Description" required> <br> <br>
        <input id="price" name="Price" type="number" style="width:200px;" placeholder="Item Price (In Pokedollars)" required> <br> <br>
        <p>Is the item buyable?</p>
        <select name="Buyable" required>
            <option value="1">Yes</option>
            <option value="0">no</option>
                </select><br><br>
        <input class="button is-warning" type="submit" value="Zet hem in de database!">
    </form>
</body>
</html>

<script>
$('#price').keydown(function(e){
    var KeyCode = e.keyCode || e.which;
    if(KeyCode == 69){
        e.preventDefault();
    }
})
</script>

@endsection