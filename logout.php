<?php
require("config.php");

$pseudo = $_POST['pseudo'];

$stmt = $conn->prepare("DELETE FROM users WHERE pseudo = ?");
$stmt->bind_param("s", $pseudo);
$stmt->execute();

$stmt->close();
$conn->close();
?>