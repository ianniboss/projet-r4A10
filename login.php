<?php
require("config.php");

$pseudo = $_POST['pseudo'];

$stmt = $conn->prepare("INSERT INTO users (pseudo) VALUES (?)");
$stmt->bind_param("s", $pseudo);
$stmt->execute();

$stmt->close();
$conn->close();
?>