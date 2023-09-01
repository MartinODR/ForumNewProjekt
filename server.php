<?php

// DB credentials
$host = '127.0.0.1'; //Adresse
$db = 'todo'; //DBname
$user = 'root'; //Benutzer
$password = ''; //Paswort

// data source name 
$dsn ="mysql:host=$host;dbname=$db";
// PDO object
$pdo = new PDO($dsn, $user, $password); 

// var_dump($todo)

// POST-Request entgegennehmen
$todo = $_POST['bezeichnung'];
$todo = trim($todo); // entferne whitespace am anfang und ende


// create von CRUD - in DB schreiben 
// $sql ="INSERT INTO todos (bezeichnung) VALUES (?)"; 
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$todo]);
 
// Alle Daten einer Tabelle
$data = $pdo->query("SELECT * FROM todos")->fetchAll(); 
?>


<h1> TODOS <h1>

<table>

    <?php // mit schleife jeden eintrag in der DB in einem <tr> ausgeben
        foreach ($data as $record) {
    ?>


    <tr>
        <td><?php echo $record['id'] ?></td> 
        <td><?php echo $record['bezeichnung'] ?></td>
        <td>UPDATE</td>
        <td>
            <!-- DELETE -->
           <!-- <form action="server.php" method="POST">

            <input type="hidden" name="id" value="<php echo $record['id'] ?">
            <input type="submit" value="DELETE">
            --> 
             <!-- </form> --> 


        </td>
    </tr>

  <?php
 }
  ?>    
</table>            