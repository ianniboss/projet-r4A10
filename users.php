<?php
require("config.php");

$sql = "SELECT pseudo FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row['pseudo'] . "</p>";
}

$conn->close();
?>