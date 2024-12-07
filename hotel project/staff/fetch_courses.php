<?php
include 'db.php';
$result = $conn->query("SELECT id, title FROM courses");
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>
