<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
</head>
<body>
    <p> Welcome to the shop! Look at our inventory ^^</p>
    <!--style="border-color:burlywood;border-width:2px; border-style:solid; box-shadow:black 10px;" -->
    <table align="right" cellspacing="3" style="width:25%;border: 4px solid burlywood;box-shadow: 0 0 0 2px black;background-color:#F3FCD7;">
        @foreach ($Items as $item)
        <div>
            <tr>
                <td style="border-bottom: 3px dashed gray;">{{$item->Itemname}}</td>
                <td align="right"  style="border-bottom: 3px dashed gray;">{{$item->Itemprice}}</td>
            </tr>
        </div>
    @endforeach
    </table>
</body>
</html>