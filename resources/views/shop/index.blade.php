<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Shop</title>
</head>
<style>
.ItemDescStyle{
    /*text-align: right !important;
    float: right;*/
    margin-left:75%;
    width: 24.8%;
    border: 1px solid #659df7;
    box-shadow: 0 0 0 2px #3f6eba;
    background-color:#0177BD;
    display: block;
}
</style>
<body>
    <p> Welcome to the shop! Look at our inventory ^^</p>
    <!--style="border-color:burlywood;border-width:2px; border-style:solid; box-shadow:black 10px;" -->
    <div align="right">
    <table cellspacing="3" style="width:25%;border: 4px solid burlywood;box-shadow: 0 0 0 2px black;background-color:#F3FCD7;">

        @foreach ($Items as $item)
            <div>
                <tr>
                    <td id="item" itemDescription='{{$item->ItemDescription}}' style="border-bottom: 3px dashed gray;">{{$item->Itemname}}</td>
                    <td align="right"  style="border-bottom: 3px dashed gray;">{{$item->Itemprice}}</td>
                </tr>
            </div>
        @endforeach

    <td >Cancel</td>

    </table>
    </div>
    <br>
    <!--align="right"-->
    <div  class="ShowItemDesc">
        
    </div>
</body>
</html>



<script>
    var Triggerd = 0;
    var orginalText = "";
$("td#item").hover(function(){
    Triggerd++;

    switch(Triggerd){
        case 1:
        orginalText = $(this).text();
        var selectedText = $(this).text();
        var Arrow = "⮞ ";
        var NewText = Arrow + selectedText;
        $(this).text(NewText);
        console.log(NewText);

        //Get Item Description
        console.log($(this).attr('itemDescription'));
        //get the Item Desciption
        $Description = $(this).attr('itemDescription');
        $('div.ShowItemDesc').addClass('ItemDescStyle');
        $('div.ShowItemDesc').html($Description);
        
        break;

        case 2:
        Triggerd = 0;
        $(this).text(orginalText);
        console.log(orginalText);
        $('div.ShowItemDesc').html("<span> </span>");
        $('div.ShowItemDesc').removeClass('ItemDescStyle');
        break;
    }
})
</script>