<?php

$host = "sql204.infinityfree.com";
$user = "if0_41463815";
$pass = "blqKLwYIbHUWJt";
$db = "if0_41463815_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur connexion");
}

?>