<?php

require_once 'credentials.php';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur connexion");
}

?>