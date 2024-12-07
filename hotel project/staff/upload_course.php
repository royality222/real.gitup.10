<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($image["name"]);
    move_uploaded_file($image["tmp_name"], $targetFile);

    $stmt = $conn->prepare("INSERT INTO courses (title, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $targetFile);
    $stmt->execute();

    header("Location: admin.php");
    exit();
}
?>
