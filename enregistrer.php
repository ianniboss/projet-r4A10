<?php
require("config.php");

$auteur = $_POST['auteur'];
$message = $_POST['message'];
$salle = $_POST['salle'];

$stmt = $conn->prepare("INSERT INTO messages (auteur, contenu, salle) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $auteur, $message, $salle);
$conn->query("UPDATE users SET last_active = NOW() WHERE pseudo = '$auteur'");

$stmt->execute();

$stmt->close();
$conn->close();
?>