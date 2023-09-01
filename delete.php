<?php

host = '127.0.0.1'; //Adresse
$db = 'todo'; //DBname
$user = 'root'; //Benutzer
$password = ''; //Paswort

// data source name 
$dsn ="mysql:host=$host;dbname=$db";
// PDO object
$pdo = new PDO($dsn, $user, $password);

$id = $_POST['id'];

$sql = "DELETE FROM todos WHERE id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

