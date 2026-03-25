<?php
require("config.php");

$last_id = isset($_GET['last_id']) ? intval($_GET['last_id']) : 0;

$sql = "SELECT * FROM messages WHERE id > ? ORDER BY id ASC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $last_id);
$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p data-id='" . $row['id'] . "'>";
    echo "<b>" . htmlspecialchars($row['auteur']) . "</b> : ";
    echo htmlspecialchars($row['contenu']);
    echo " (" . $row['date'] . ")";
    echo "</p>";
}

$stmt->close();
$conn->close();
?>