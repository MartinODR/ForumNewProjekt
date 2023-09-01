<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>TODO APP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>TODO APP</h1>

    <form action="server.php" method="POST">


        <label for="bezeichnung">Bezeichnung</label>
        <input type="text" name="bezeichnung" id="bezeichnung" />   <!--name es la clasificacio de dato que se le manda a la base de datos-->
        
        <input type="submit" value="Absenden" />

    </form>
</body>
</html>