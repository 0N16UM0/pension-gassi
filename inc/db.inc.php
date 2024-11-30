<?php 
$dbhost = "localhost";
$dbname = "project";
$user = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $user, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
}
catch(PDOException $e) {
    die("Konnte keine Verbindung mit Datenbank aufbauen");
}


?>