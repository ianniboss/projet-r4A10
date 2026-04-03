<?php
require("config.php");

$salle = $_GET['salle'];
$last_id = intval($_GET['last_id']);

$sql = "SELECT * FROM messages 
        WHERE id > ? AND salle = ? 
        ORDER BY id ASC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $last_id, $salle);
$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p data-id='" . $row['id'] . "'>";
    echo "<b>" . htmlspecialchars($row['auteur']) . "</b> : ";
    echo htmlspecialchars($row['contenu']);
    $date = date("H:i", strtotime($row['date']));
    echo " <span class='time'>(" . $date . ")</span>";
    echo "</p>";
}

$stmt->close();
$conn->close();
?>