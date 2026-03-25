<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "projetR4A10";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur connexion");
}

?>