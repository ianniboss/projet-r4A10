<?php
require("config.php");

$salle = $_GET['salle'];

$sql = "SELECT pseudo FROM users 
        WHERE last_active > NOW() - INTERVAL 10 SECOND 
        AND salle = '$salle'";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div class='user'>" . $row['pseudo'] . "</div>";
}

$conn->close();
?>