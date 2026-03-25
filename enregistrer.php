<?php
require("config.php");

$auteur = $_POST['auteur'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO messages (auteur, contenu) VALUES (?, ?)");
$stmt->bind_param("ss", $auteur, $message);

$stmt->execute();

$stmt->close();
$conn->close();
?>