<?php
require("config.php");

$auteur = $_POST['auteur'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO messages (auteur, contenu) VALUES (?, ?)");
$stmt->bind_param("ss", $auteur, $message);
$conn->query("UPDATE users SET last_active = NOW() WHERE pseudo = '$auteur'");

$stmt->execute();

$stmt->close();
$conn->close();
?>