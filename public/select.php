<?php




$con = new PDO("mysql:host=mariadb;dbname=pokedex", 'phpstorm', '123456');

$sql = 'SELECT * FROM pokemon';
$stmt = $con->prepare($sql);
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

