<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create page!</title>
</head>
<body>
    <h1>Welcome to the create page</h1>

    <form action="/AddPok" method="POST">
        @csrf
        <input name="Name" type="text" style="width:200px;" placeholder="Naam van de pokemon" required> <br> <br>
        <select name="Type" required>
            <option value="Water">Water Type</option>
            <option value="Fire">Fire Type</option>
            <option value="Grass">Grass Type</option>
                </select><br><br>
        <input class="button is-warning" type="submit" value="Zet hem in de database!">
    </form>
</body>
</html>